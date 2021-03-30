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
        '/candidate' => [[['_route' => 'candidate_index', '_controller' => 'App\\Controller\\CandidateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidate/new' => [[['_route' => 'candidate_new', '_controller' => 'App\\Controller\\CandidateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature' => [[['_route' => 'candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/new' => [[['_route' => 'candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events/type' => [[['_route' => 'event_type_index', '_controller' => 'App\\Controller\\EventTypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/events/type/new' => [[['_route' => 'event_type_new', '_controller' => 'App\\Controller\\EventTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/field' => [[['_route' => 'field_index', '_controller' => 'App\\Controller\\FieldController::index'], null, ['GET' => 0], null, true, false, null]],
        '/field/new' => [[['_route' => 'field_new', '_controller' => 'App\\Controller\\FieldController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum' => [[['_route' => 'forum_index', '_controller' => 'App\\Controller\\ForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/forum/new' => [[['_route' => 'forum_new', '_controller' => 'App\\Controller\\ForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelance' => [[['_route' => 'freelance_index', '_controller' => 'App\\Controller\\FreelanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/freelance/new' => [[['_route' => 'freelance_new', '_controller' => 'App\\Controller\\FreelanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/home/projects' => [[['_route' => 'front_project_index', '_controller' => 'App\\Controller\\FrontController::projects'], null, null, null, false, false, null]],
        '/job' => [[['_route' => 'job_index', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, true, false, null]],
        '/job/new' => [[['_route' => 'job_new', '_controller' => 'App\\Controller\\JobController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/project' => [[['_route' => 'project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/project/new' => [[['_route' => 'project_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recruiter' => [[['_route' => 'recruiter_index', '_controller' => 'App\\Controller\\RecruiterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recruiter/new' => [[['_route' => 'recruiter_new', '_controller' => 'App\\Controller\\RecruiterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SigninController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SigninController::logout'], null, null, null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/categorie' => [[['_route' => 'test_categorie_index', '_controller' => 'App\\Controller\\TestCategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test/categorie/new' => [[['_route' => 'test_categorie_new', '_controller' => 'App\\Controller\\TestCategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test/new' => [[['_route' => 'test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|andidat(?'
                        .'|e/([^/]++)(?'
                            .'|(*:197)'
                            .'|/edit(*:210)'
                            .'|(*:218)'
                        .')'
                        .'|ure/([^/]++)(?'
                            .'|(*:242)'
                            .'|/edit(*:255)'
                            .'|(*:263)'
                        .')'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:291)'
                        .'|/edit(*:304)'
                        .'|(*:312)'
                    .')'
                .')'
                .'|/event(?'
                    .'|/([^/]++)(?'
                        .'|(*:343)'
                        .'|/edit(*:356)'
                        .'|(*:364)'
                    .')'
                    .'|s/type/([^/]++)(?'
                        .'|(*:391)'
                        .'|/edit(*:404)'
                        .'|(*:412)'
                    .')'
                .')'
                .'|/f(?'
                    .'|ield/([^/]++)(?'
                        .'|(*:443)'
                        .'|/edit(*:456)'
                        .'|(*:464)'
                    .')'
                    .'|orum/([^/]++)(?'
                        .'|(*:489)'
                        .'|/edit(*:502)'
                        .'|(*:510)'
                    .')'
                    .'|reelance/([^/]++)(?'
                        .'|(*:539)'
                        .'|/edit(*:552)'
                        .'|(*:560)'
                    .')'
                .')'
                .'|/home/test/([^/]++)/([^/]++)(*:598)'
                .'|/job/([^/]++)(?'
                    .'|(*:622)'
                    .'|/edit(*:635)'
                    .'|(*:643)'
                .')'
                .'|/p(?'
                    .'|ost/([^/]++)(?'
                        .'|(*:672)'
                        .'|/edit(*:685)'
                        .'|(*:693)'
                    .')'
                    .'|roject/([^/]++)(?'
                        .'|(*:720)'
                        .'|/edit(*:733)'
                        .'|(*:741)'
                    .')'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:772)'
                    .'|/edit(*:785)'
                    .'|(*:793)'
                .')'
                .'|/recruiter/([^/]++)(?'
                    .'|(*:824)'
                    .'|/edit(*:837)'
                    .'|(*:845)'
                .')'
                .'|/t(?'
                    .'|ag/([^/]++)(?'
                        .'|(*:873)'
                        .'|/edit(*:886)'
                        .'|(*:894)'
                    .')'
                    .'|est/(?'
                        .'|categorie/([^/]++)(?'
                            .'|(*:931)'
                            .'|/edit(*:944)'
                            .'|(*:952)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:972)'
                            .'|/edit(*:985)'
                            .'|(*:993)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CandidateController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'candidature_show', '_controller' => 'App\\Controller\\CandidatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        291 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        343 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        391 => [[['_route' => 'event_type_show', '_controller' => 'App\\Controller\\EventTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'event_type_edit', '_controller' => 'App\\Controller\\EventTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'event_type_delete', '_controller' => 'App\\Controller\\EventTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        443 => [[['_route' => 'field_show', '_controller' => 'App\\Controller\\FieldController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        456 => [[['_route' => 'field_edit', '_controller' => 'App\\Controller\\FieldController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        464 => [[['_route' => 'field_delete', '_controller' => 'App\\Controller\\FieldController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        489 => [[['_route' => 'forum_show', '_controller' => 'App\\Controller\\ForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'forum_edit', '_controller' => 'App\\Controller\\ForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        510 => [[['_route' => 'forum_delete', '_controller' => 'App\\Controller\\ForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        539 => [[['_route' => 'freelance_show', '_controller' => 'App\\Controller\\FreelanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        552 => [[['_route' => 'freelance_edit', '_controller' => 'App\\Controller\\FreelanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        560 => [[['_route' => 'freelance_delete', '_controller' => 'App\\Controller\\FreelanceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        598 => [[['_route' => 'pass_test', '_controller' => 'App\\Controller\\FrontController::passTest'], ['id', 'Tid'], null, null, false, true, null]],
        622 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        635 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        672 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        685 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        693 => [[['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        720 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        733 => [[['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        741 => [[['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        772 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        785 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        793 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        824 => [[['_route' => 'recruiter_show', '_controller' => 'App\\Controller\\RecruiterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        837 => [[['_route' => 'recruiter_edit', '_controller' => 'App\\Controller\\RecruiterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        845 => [[['_route' => 'recruiter_delete', '_controller' => 'App\\Controller\\RecruiterController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        873 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        886 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        894 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        931 => [[['_route' => 'test_categorie_show', '_controller' => 'App\\Controller\\TestCategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'test_categorie_edit', '_controller' => 'App\\Controller\\TestCategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        952 => [[['_route' => 'test_categorie_delete', '_controller' => 'App\\Controller\\TestCategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        972 => [[['_route' => 'test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        985 => [[['_route' => 'test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        993 => [
            [['_route' => 'test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
