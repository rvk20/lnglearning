<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'addwords', '_controller' => 'App\\Controller\\AddwordsController::addwords'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/listeningcomp' => [[['_route' => 'listeningcomp', '_controller' => 'App\\Controller\\ListeningcompController::index'], null, null, null, false, false, null]],
        '/score' => [[['_route' => 'score', '_controller' => 'App\\Controller\\ListeningcompController::finish'], null, ['GET' => 0, 'HEAD' => 1, 'POST' => 2], null, false, false, null]],
        '/orthography' => [[['_route' => 'orthography', '_controller' => 'App\\Controller\\OrthographyController::index'], null, null, null, false, false, null]],
        '/sfvaca!!a587ccw22' => [[['_route' => 'paneladmin', '_controller' => 'App\\Controller\\PaneladminController::index'], null, null, null, false, false, null]],
        '/readingcomp' => [[['_route' => 'readingcomp', '_controller' => 'App\\Controller\\ReadingcompController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'start', '_controller' => 'App\\Controller\\StartController::start'], null, null, null, false, false, null]],
        '/learned' => [[['_route' => 'words_learned', '_controller' => 'App\\Controller\\WordsLearnedController::index'], null, null, null, false, false, null]],
        '/wordtest' => [[['_route' => 'wordtest', '_controller' => 'App\\Controller\\WordsTestController::index'], null, null, null, false, false, null]],
        '/starttest' => [[['_route' => 'wordteststart', '_controller' => 'App\\Controller\\WordteststartController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/listeningcomp/([^/]++)(*:192)'
                .'|/orthography/([^/]++)(*:221)'
                .'|/readingcomp/([^/]++)(*:250)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'listeningtest', '_controller' => 'App\\Controller\\ListeningcompController::test'], ['id'], ['GET' => 0, 'HEAD' => 1, 'POST' => 2], null, false, true, null]],
        221 => [[['_route' => 'ortography', '_controller' => 'App\\Controller\\OrthographyController::test'], ['id'], ['GET' => 0, 'HEAD' => 1, 'POST' => 2], null, false, true, null]],
        250 => [
            [['_route' => 'readingtest', '_controller' => 'App\\Controller\\ReadingcompController::test'], ['id'], ['GET' => 0, 'HEAD' => 1, 'POST' => 2], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
