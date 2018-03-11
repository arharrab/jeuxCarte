<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;



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

            $stmt = $em->getConnection()->prepare("SELECT c.category, c.value FROM (SELECT b.category, b.id, a.value, a.sort  FROM carte AS a INNER JOIN categorie AS b ON a.categorie_id=b.id  order by RAND() LIMIT 10) AS c ORDER BY c.id, c.sort");
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
            
             
            $order=["ACE","TWO","THREE","FOUR","FIVE","SIX","SEVEN","EIGHT","NINE","TEN","JACK","QUEEN","KING"]; 
            
            usort($values, function($a, $b) use ($order){
                
                $valA = array_search($a, $order);
                $valB = array_search($b, $order);

                
                if ($valA === false)
                    return -1;
                if ($valB === false)
                    return 0;

                if ($valA > $valB)
                    return 1;
                if ($valA < $valB)
                    return -1;
                return 0;
            });

            $session->set('main', $randcarte);
            $session->set('category', $category);
            $session->set('value', $values);
            
            $jsonData = json_encode(array(
                            'cards' => $randcarte,
                            'categoryOrder' => $category,
                            'valueOrder' => $values,
                            'player' => $JoueurID
                            
                    ));
            

            $session->set('jsonData', $jsonData);
            
            
        }else{
            $randcarte = $session->get('main');
            $jsonData = $session->get('jsonData');
        }
        
        return $this->render("AppBundle:Default:main.html.twig",array('main'=>$randcarte, 'jsonData'=>[
                        'cards' => $randcarte,
                        'categoryOrder' => $category,
                        'valueOrder' => $values                          
                        ]));
    }
    
    public function getHandJsonAction(Request $request)
    {
        
        
        

        $session = $request->getSession();

            $main_carte = $session->get('main');
            $JoueurID =  $session->get('JoueurID');
            $categoryOrder =  $session->get('category');
            $valueOrder =  $session->get('value');
            
            $response = new JsonResponse(array(
                            'cards' => $main_carte,
                            'categoryOrder' => $categoryOrder,
                            'valueOrder' => $valueOrder
                            
                    ));

        return $response;
          
    }
}
