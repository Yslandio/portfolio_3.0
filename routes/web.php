<?php

use App\Controllers\ProjectController;
include(ROOT_DIR . '/App/Controllers/ProjectController.php');

use routes\router;
$router = new router\Router();

// Exemplo de rota para listar tarefas
$router->addRoute('listProjects', 'ProjectController/getProjects');

// Exemplo de rota para adicionar tarefa
// $router->addRoute('addProject', 'ProjectController/addProject');
