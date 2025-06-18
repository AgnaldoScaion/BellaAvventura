<?php

require_once __DIR__ . '/../models/hotel.php';

class HotelController {
    // Exibe o formulário de cadastro de hotel
    public function showForm() {
        include __DIR__ . '/../views/hotel_form.php';
    }

    // Salva um novo hotel
    public function saveHotel() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hotel = new Hotel();
            $hotel->nome_hotel = $_POST['nome_hotel'];
            $hotel->estado = $_POST['estado'];
            $hotel->cidade = $_POST['cidade'];
            $hotel->bairro = $_POST['bairro'];
            $hotel->rua = $_POST['rua'];
            $hotel->numero = $_POST['numero'];

            if ($hotel->save()) {
                header('Location: /bella_back/list-hotel');
                exit;
            } else {
                echo "Erro ao salvar hotel!";
            }
        }
    }

    // Lista todos os hotéis
    public function listHotel() {
        $hotel = new Hotel();
        $hoteis = $hotel->getAll();
        include __DIR__ . '/../views/hotel_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $hotel = new Hotel();
        $hotelInfo = $hotel->getById($id);
        include __DIR__ . '/../views/hotel_form.php';
    }

    // Atualiza um hotel
    public function updateHotel() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hotel = new Hotel();
            $hotel->id_hotel = $_POST['id_hotel'];
            $hotel->nome_hotel = $_POST['nome_hotel'];
            $hotel->estado = $_POST['estado'];
            $hotel->cidade = $_POST['cidade'];
            $hotel->bairro = $_POST['bairro'];
            $hotel->rua = $_POST['rua'];
            $hotel->numero = $_POST['numero'];

            if ($hotel->update()) {
                header('Location: /bella_back/list-hotel');
                exit;
            } else {
                echo "Erro ao atualizar hotel!";
            }
        }
    }

    // Exclui um hotel
    public function deleteHotel() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hotel = new Hotel();
            $hotel->id_hotel = $_POST['id_hotel'];

            if ($hotel->delete()) {
                header('Location: /bella_back/list-hotel');
                exit;
            } else {
                echo "Erro ao excluir hotel!";
            }
        }
    }
}