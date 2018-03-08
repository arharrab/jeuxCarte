<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class PartyController extends Controller
{

    public function indexAction(Request $request)
    {
        $session = $request->getSession();

            $JoueurNom = $session->get('JoueurNom');
            $JoueurID =  $session->get('JoueurID');

        return $this->render("AppBundle:Default:index.html.twig",array(
            'JoueurNom'=>$JoueurNom, 
            'JoueurID'=>$JoueurID)
        );
    }
    
    
    public function getHandAction(Request $request)
    {
        $session = $request->getSession();
        $randcarte=[];
        $categorycarte=[];$valuecarte=[];
        $category=[];$values=[];
        $jsonData=[] ;$jsonContent=[] ;
        
        
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $JoueurID =  $session->get('JoueurID');
        if(!$session->get('main')){
            $em = $this->getDoctrine()->getManager();

            $stmt = $em->getConnection()->prepare("SELECT c.category,c.value FROM (SELECT b.category, a.value, a.sort  FROM carte AS a INNER JOIN categorie AS b ON a.categorie_id=b.id  order by RAND() LIMIT 10) AS c ORDER BY c.category, c.sort");
            $stmt->execute();
            $randcarte = $stmt->fetchAll();
             
            foreach( $randcarte as $cart){                
                array_push($categorycarte, $cart['category']);     
                array_push($valuecarte, $cart['value']);
            }
            
            foreach (array_unique($categorycarte) as $key => $value) {
                array_push($category, $value);
             }
             
             foreach (array_unique($valuecarte) as $key => $value) {
                array_push($values, $value);
             }
            
            
            

            $session->set('main', $randcarte);
            $session->set('category', $category);
            $session->set('value', $values);
            $jsonData = [
                        'cards' => $randcarte,
                        'categoryOrder' => $category,
                        'valueOrder' => $values,
                        'player' => $JoueurID                            
                        ];
            $jsonContent = $serializer->serialize($jsonData, 'json');
            
//            $jsonData = new JsonResponse([
//                            'cards' => $randcarte,
//                            'categoryOrder' => $category,
//                            'valueOrder' => $values,
//                            'player' => $JoueurID
//                            
//                    ]);
            $session->set('jsonData', $jsonContent);
            
            
        }else{
            $randcarte = $session->get('main');
            $jsonData = $session->get('jsonData');
        }
        
        return $this->render("AppBundle:Default:main.html.twig",array('main'=>$randcarte, 'jsonData'=>[
                        'cards' => $randcarte,
                        'categoryOrder' => $category,
                        'valueOrder' => $values,
                        'player' => $JoueurID                            
                        ]));
    }
    
    public function sendHandAction(Request $request)
    {
        
        
        

        $session = $request->getSession();

            $main_carte = $session->get('main');
            $JoueurID =  $session->get('JoueurID');
            $categoryOrder =  $session->get('category');
            $valueOrder =  $session->get('value');
            
            $jsonData = json_decode(array(
                            'cards' => $main_carte,
                            'categoryOrder' => $categoryOrder,
                            'valueOrder' => $valueOrder,
                            'player' => $JoueurID
                            
                    ));
            
            
            
            $response = new Response($jsonData);
        $response->headers->set('Content-Type', 'text/plain');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->setCharset('US-ASCII');
        $response->setContent($response);
        
            
       echo $response;
            //$this->render("AppBundle:Default:resultat.html.twig",array('jsonData'=>$jsonData));
    }
}
