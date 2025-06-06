<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/UsuarioController.php';
require_once '../controllers/AdmController.php';
require_once '../controllers/HotelController.php';
require_once '../controllers/ViagemController.php';
require_once '../controllers/RestauranteController.php';
require_once '../controllers/PontoTuristicoController.php';
require_once '../controllers/PontosController.php';
require_once '../controllers/ApiController.php';
require_once '../controllers/FeedbackController.php';

$request = $_SERVER['REQUEST_URI'];
echo $request;

switch ($request) {
    // USUÁRIO
     case '/bella_back/save-usuario':
        $controller = new UsuarioController();
        $controller->saveUsuario();
        break;
    case '/bella_back/list-usuario':
        $controller = new UsuarioController();
        $controller->listUsuario();
        break;
    case '/bella_back/delete-usuario':
        $controller = new UsuarioController();
        $controller->deleteUsuario();
        break;
    case (preg_match('/\/bella_back\/update-usuario\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new UsuarioController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-usuario':
        $controller = new UsuarioController();
        $controller->updateUsuario();
        break;

    // ADM
    case '/bella_back/save-adm':
        $controller = new AdmController();
        $controller->saveAdm();
        break;
    case '/bella_back/list-adm':
        $controller = new AdmController();
        $controller->listAdm();
        break;
    case '/bella_back/delete-adm':
        $controller = new AdmController();
        $controller->deleteAdm();
        break;
    case (preg_match('/\/bella_back\/update-adm\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new AdmController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-adm':
        $controller = new AdmController();
        $controller->updateAdm();
        break;

    // HOTEL
    case '/bella_back/save-hotel':
        $controller = new HotelController();
        $controller->saveHotel();
        break;
    case '/bella_back/list-hotel':
        $controller = new HotelController();
        $controller->listHotel();
        break;
    case '/bella_back/delete-hotel':
        $controller = new HotelController();
        $controller->deleteHotel();
        break;
    case (preg_match('/\/bella_back\/update-hotel\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new HotelController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-hotel':
        $controller = new HotelController();
        $controller->updateHotel();
        break;

    // VIAGEM
    case '/bella_back/save-viagem':
        $controller = new ViagemController();
        $controller->saveViagem();
        break;
    case '/bella_back/list-viagem':
        $controller = new ViagemController();
        $controller->listViagem();
        break;
    case '/bella_back/delete-viagem':
        $controller = new ViagemController();
        $controller->deleteViagem();
        break;
    case (preg_match('/\/bella_back\/update-viagem\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new ViagemController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-viagem':
        $controller = new ViagemController();
        $controller->updateViagem();
        break;

    // RESTAURANTE
    case '/bella_back/save-restaurante':
        $controller = new RestauranteController();
        $controller->saveRestaurante();
        break;
    case '/bella_back/list-restaurante':
        $controller = new RestauranteController();
        $controller->listRestaurante();
        break;
    case '/bella_back/delete-restaurante':
        $controller = new RestauranteController();
        $controller->deleteRestaurante();
        break;
    case (preg_match('/\/bella_back\/update-restaurante\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new RestauranteController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-restaurante':
        $controller = new RestauranteController();
        $controller->updateRestaurante();
        break;

    // PONTO TURÍSTICO
    case '/bella_back/save-pontoturistico':
        $controller = new PontoTuristicoController();
        $controller->savePontoTuristico();
        break;
    case '/bella_back/list-pontoturistico':
        $controller = new PontoTuristicoController();
        $controller->listPontoTuristico();
        break;
    case '/bella_back/delete-pontoturistico':
        $controller = new PontoTuristicoController();
        $controller->deletePontoTuristico();
        break;
    case (preg_match('/\/bella_back\/update-pontoturistico\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new PontoTuristicoController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-pontoturistico':
        $controller = new PontoTuristicoController();
        $controller->updatePontoTuristico();
        break;

    // PONTO
    case '/bella_back/save-ponto':
        $controller = new PontosController();
        $controller->savePonto();
        break;
    case '/bella_back/list-ponto':
        $controller = new PontosController();
        $controller->listPonto();
        break;
    case '/bella_back/delete-ponto':
        $controller = new PontosController();
        $controller->deletePonto();
        break;
    case (preg_match('/\/bella_back\/update-ponto\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new PontosController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-ponto':
        $controller = new PontosController();
        $controller->updatePonto();
        break;

    // API
    case '/bella_back/save-api':
        $controller = new ApiController();
        $controller->saveApi();
        break;
    case '/bella_back/list-api':
        $controller = new ApiController();
        $controller->listApi();
        break;
    case '/bella_back/delete-api':
        $controller = new ApiController();
        $controller->deleteApi();
        break;
    case (preg_match('/\/bella_back\/update-api\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new ApiController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-api':
        $controller = new ApiController();
        $controller->updateApi();
        break;

    // FEEDBACK
    case '/bella_back/save-feedback':
        $controller = new FeedbackController();
        $controller->saveFeedback();
        break;
    case '/bella_back/list-feedback':
        $controller = new FeedbackController();
        $controller->listFeedback();
        break;
    case '/bella_back/delete-feedback':
        $controller = new FeedbackController();
        $controller->deleteFeedback();
        break;
    case (preg_match('/\/bella_back\/update-feedback\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller = new FeedbackController();
        $controller->showUpdateForm($id);
        break;
    case '/bella_back/update-feedback':
        $controller = new FeedbackController();
        $controller->updateFeedback();
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
