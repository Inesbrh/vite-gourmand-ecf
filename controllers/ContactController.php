<?php

class ContactController {

    public function index() {

        $success = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $nom =
                $_POST['nom'];

            $email =
                $_POST['email'];

            $messageUser =
                $_POST['message'];

            $to =
                "vitegourmand@gmail.com";

            $subject =
                "Nouveau message contact";

            $message = "

Nom : " . $nom . "

Email : " . $email . "

Message :

" . $messageUser;

            $headers =
                "From: " . $email;

            mail(

                $to,
                $subject,
                $message,
                $headers
            );

            $success =
                "Message envoyé avec succès.";
        }

        require_once
            __DIR__
            . '/../views/contact.php';
    }
}