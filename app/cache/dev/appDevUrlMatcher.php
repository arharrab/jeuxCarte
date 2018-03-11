<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/joueur')) {
            // joueur_index
            if ($pathinfo === '/joueur') {
                return array (  '_controller' => 'AppBundle\\Controller\\JoueurController::indexAction',  '_route' => 'joueur_index',);
            }

            // joueur_show
            if (preg_match('#^/joueur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_show')), array (  '_controller' => 'AppBundle\\Controller\\JoueurController::showAction',));
            }

            // joueur_new
            if ($pathinfo === '/joueur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_joueur_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\JoueurController::newAction',  '_route' => 'joueur_new',);
            }
            not_joueur_new:

            // joueur_edit
            if (preg_match('#^/joueur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_joueur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_edit')), array (  '_controller' => 'AppBundle\\Controller\\JoueurController::editAction',));
            }
            not_joueur_edit:

            // joueur_delete
            if (preg_match('#^/joueur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_joueur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_delete')), array (  '_controller' => 'AppBundle\\Controller\\JoueurController::deleteAction',));
            }
            not_joueur_delete:

        }

        if (0 === strpos($pathinfo, '/party')) {
            // party_home
            if ($pathinfo === '/party') {
                return array (  '_controller' => 'AppBundle\\Controller\\PartyController::indexAction',  '_route' => 'party_home',);
            }

            // party_new_hand
            if (0 === strpos($pathinfo, '/party/new-hand') && preg_match('#^/party/new\\-hand/(?P<joueur>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'party_new_hand')), array (  '_controller' => 'AppBundle\\Controller\\PartyController::getHandAction',));
            }

            // party_send_hand
            if (rtrim($pathinfo, '/') === '/party/send-hand') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'party_send_hand');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PartyController::sendHandAction',  '_route' => 'party_send_hand',);
            }

            // party_get_hand
            if (rtrim($pathinfo, '/') === '/party/get-hand') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'party_get_hand');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PartyController::getHandJsonAction',  '_route' => 'party_get_hand',);
            }

        }

        if (0 === strpos($pathinfo, '/ca')) {
            if (0 === strpos($pathinfo, '/category')) {
                // categorie_index
                if ($pathinfo === '/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ($pathinfo === '/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::editAction',));
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_categorie_delete:

            }

            if (0 === strpos($pathinfo, '/carte')) {
                // carte_index
                if ($pathinfo === '/carte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_carte_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CarteController::indexAction',  '_route' => 'carte_index',);
                }
                not_carte_index:

                // carte_show
                if (preg_match('#^/carte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_carte_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_show')), array (  '_controller' => 'AppBundle\\Controller\\CarteController::showAction',));
                }
                not_carte_show:

                // carte_new
                if ($pathinfo === '/carte/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_carte_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CarteController::newAction',  '_route' => 'carte_new',);
                }
                not_carte_new:

                // carte_edit
                if (preg_match('#^/carte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_carte_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_edit')), array (  '_controller' => 'AppBundle\\Controller\\CarteController::editAction',));
                }
                not_carte_edit:

                // carte_delete
                if (preg_match('#^/carte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_carte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_delete')), array (  '_controller' => 'AppBundle\\Controller\\CarteController::deleteAction',));
                }
                not_carte_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'login_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
