<?php
require_once __DIR__ . '/../models/feedback.php';

class FeedbackController {
    // Exibe o formulário de cadastro de feedback
    public function showForm() {
        include __DIR__ . '/../views/feedback_form.php';
    }

    // Salva um novo feedback
    public function saveFeedback() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $feedback = new Feedback();
            $feedback->feedback = $_POST['feedback'];
            $feedback->estrelas = $_POST['estrelas'];
            $feedback->quantidade_feedbacks = $_POST['quantidade_feedbacks'];

            if ($feedback->save()) {
                header('Location: /bella_back/list-feedback');
                exit;
            } else {
                echo "Erro ao salvar feedback!";
            }
        }
    }

    // Lista todos os feedbacks
    public function listFeedback() {
        $feedback = new Feedback();
        $feedbacks = $feedback->getAll();
        include __DIR__ . '/../views/feedback_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $feedback = new Feedback();
        $feedbackInfo = $feedback->getById($id);
        include __DIR__ . '/../views/update_feedback_form.php';
    }

    // Atualiza um feedback
    public function updateFeedback() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $feedback = new Feedback();
            $feedback->id_feedback = $_POST['id_feedback'];
            $feedback->feedback = $_POST['feedback'];
            $feedback->estrelas = $_POST['estrelas'];
            $feedback->quantidade_feedbacks = $_POST['quantidade_feedbacks'];

            if ($feedback->update()) {
                header('Location: /bella_back/list-feedback');
                exit;
            } else {
                echo "Erro ao atualizar feedback!";
            }
        }
    }

    // Exclui um feedback
    public function deleteFeedback() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $feedback = new Feedback();
            $feedback->id_feedback = $_POST['id_feedback'];

            if ($feedback->delete()) {
                header('Location: /bella_back/list-feedback');
                exit;
            } else {
                echo "Erro ao excluir feedback!";
            }
        }
    }
}