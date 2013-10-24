<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/78c8ddf')) {
                // _assetic_78c8ddf
                if ($pathinfo === '/js/78c8ddf.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78c8ddf',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_78c8ddf',);
                }

                if (0 === strpos($pathinfo, '/js/78c8ddf_')) {
                    if (0 === strpos($pathinfo, '/js/78c8ddf_jquery')) {
                        // _assetic_78c8ddf_0
                        if ($pathinfo === '/js/78c8ddf_jquery_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78c8ddf',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_78c8ddf_0',);
                        }

                        // _assetic_78c8ddf_1
                        if ($pathinfo === '/js/78c8ddf_jquery.dataTables_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78c8ddf',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_78c8ddf_1',);
                        }

                    }

                    // _assetic_78c8ddf_2
                    if ($pathinfo === '/js/78c8ddf_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78c8ddf',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_78c8ddf_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/c4adca3')) {
                // _assetic_c4adca3
                if ($pathinfo === '/js/c4adca3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4adca3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c4adca3',);
                }

                if (0 === strpos($pathinfo, '/js/c4adca3_jquery')) {
                    // _assetic_c4adca3_0
                    if ($pathinfo === '/js/c4adca3_jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4adca3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c4adca3_0',);
                    }

                    // _assetic_c4adca3_1
                    if ($pathinfo === '/js/c4adca3_jquery.dataTables_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4adca3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c4adca3_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/bff46d8')) {
                // _assetic_bff46d8
                if ($pathinfo === '/js/bff46d8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bff46d8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bff46d8',);
                }

                // _assetic_bff46d8_0
                if ($pathinfo === '/js/bff46d8_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bff46d8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bff46d8_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/5b98941')) {
                // _assetic_5b98941
                if ($pathinfo === '/js/5b98941.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5b98941',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5b98941',);
                }

                if (0 === strpos($pathinfo, '/js/5b98941_')) {
                    // _assetic_5b98941_0
                    if ($pathinfo === '/js/5b98941_jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5b98941',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5b98941_0',);
                    }

                    // _assetic_5b98941_1
                    if ($pathinfo === '/js/5b98941_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5b98941',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5b98941_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/64c4bf4')) {
                // _assetic_64c4bf4
                if ($pathinfo === '/js/64c4bf4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64c4bf4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_64c4bf4',);
                }

                // _assetic_64c4bf4_0
                if ($pathinfo === '/js/64c4bf4_jquery.dataTables_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64c4bf4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_64c4bf4_0',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/story')) {
            // story_view_front_end_homepage
            if (0 === strpos($pathinfo, '/story/hello') && preg_match('#^/story/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'story_view_front_end_homepage')), array (  '_controller' => 'StoryView\\FrontEndBundle\\Controller\\DefaultController::indexAction',));
            }

            // story_welcome
            if (rtrim($pathinfo, '/') === '/story') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'story_welcome');
                }

                return array (  '_controller' => 'StoryView\\FrontEndBundle\\Controller\\StoryRouterController::indexAction',  '_route' => 'story_welcome',);
            }

        }

        // story_security_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'story_security_homepage')), array (  '_controller' => 'Story\\SecurityBundle\\Controller\\DefaultController::indexAction',));
        }

        // default_security_target
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Story\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'default_security_target',);
        }

        // test_security_page
        if ($pathinfo === '/test/login') {
            return array (  '_controller' => 'Story\\SecurityBundle\\Controller\\SecurityController::testAction',  '_route' => 'test_security_page',);
        }

        if (0 === strpos($pathinfo, '/story-admin')) {
            // story_admin_story_homepage
            if (rtrim($pathinfo, '/') === '/story-admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'story_admin_story_homepage');
                }

                return array (  '_controller' => 'Story\\AdminBundle\\Controller\\StoryController::indexAction',  '_route' => 'story_admin_story_homepage',);
            }

            // story_admin_story_create
            if ($pathinfo === '/story-admin/create') {
                return array (  '_controller' => 'Story\\AdminBundle\\Controller\\StoryController::createAction',  '_route' => 'story_admin_story_create',);
            }

            // story_admin_story_update
            if (0 === strpos($pathinfo, '/story-admin/update') && preg_match('#^/story\\-admin/update/(?P<storyId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'story_admin_story_update')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\StoryController::updateAction',));
            }

            // story_admin_story_delete
            if (0 === strpos($pathinfo, '/story-admin/delete') && preg_match('#^/story\\-admin/delete/(?P<storyId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'story_admin_story_delete')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\StoryController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/story-admin/page')) {
                // page_admin_story_index
                if (0 === strpos($pathinfo, '/story-admin/pages') && preg_match('#^/story\\-admin/pages/(?P<storyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_admin_story_index')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\PageController::indexAction',));
                }

                // page_admin_story_create
                if (0 === strpos($pathinfo, '/story-admin/page/create') && preg_match('#^/story\\-admin/page/create/(?P<storyId>[^/]++)/(?P<newPageNumber>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_admin_story_create')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\PageController::createAction',));
                }

                // page_admin_story_update
                if (0 === strpos($pathinfo, '/story-admin/page/update') && preg_match('#^/story\\-admin/page/update/(?P<storyId>[^/]++)/(?P<pageNumber>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_admin_story_update')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\PageController::updateAction',));
                }

                // page_admin_story_delete
                if (0 === strpos($pathinfo, '/story-admin/page/delete') && preg_match('#^/story\\-admin/page/delete/(?P<storyId>[^/]++)/(?P<pageNumber>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_admin_story_delete')), array (  '_controller' => 'Story\\AdminBundle\\Controller\\PageController::deleteAction',));
                }

            }

        }

        // web_forms_test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_forms_test_homepage')), array (  '_controller' => 'WebForms\\TestBundle\\Controller\\DefaultController::indexAction',));
        }

        // web_forms_test_form
        if ($pathinfo === '/test-form') {
            return array (  '_controller' => 'WebForms\\TestBundle\\Controller\\DefaultController::newAction',  '_route' => 'web_forms_test_form',);
        }

        // web_forms_task_success
        if ($pathinfo === '/success') {
            return array (  '_controller' => 'WebForms\\TestBundle\\Controller\\DefaultController::successAction',  '_route' => 'web_forms_task_success',);
        }

        // mongo_test
        if ($pathinfo === '/mongo') {
            return array (  '_controller' => 'WebForms\\TestBundle\\Controller\\DefaultController::mongoAction',  '_route' => 'mongo_test',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
