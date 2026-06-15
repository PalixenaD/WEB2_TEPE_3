<?php
require_once 'libs/router/router.php';
require_once 'app/controllers/issues-api.controller.php';


$router = new Router();

// ALBUMES
$router->addRoute('issues', 'GET', 'IssuesApiController', 'getIssues');
$router->addRoute('issues/:id', 'GET', 'IssuesApiController', 'getIssueById');
$router->addRoute('issues/:id', 'DELETE', 'IssuesApiController', 'removeIssue');
$router->addRoute('issues', 'POST', 'IssuesApiController', 'insertIssue');
$router->addRoute('issues/:id', 'PUT', 'IssuesApiController', 'updateIssue');
$router->addRoute('issues/:id', 'PATCH', 'IssuesApiController', 'patchIssue');


//ARTISTA
$router->addRoute('issues', 'GET', 'IssuesApiController', 'getIssues');
$router->addRoute('issues/:id', 'GET', 'IssuesApiController', 'getIssueById');
$router->addRoute('issues/:id', 'DELETE', 'IssuesApiController', 'removeIssue');
$router->addRoute('issues', 'POST', 'IssuesApiController', 'insertIssue');
$router->addRoute('issues/:id', 'PUT', 'IssuesApiController', 'updateIssue');
$router->addRoute('issues/:id', 'PATCH', 'IssuesApiController', 'patchIssue');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


