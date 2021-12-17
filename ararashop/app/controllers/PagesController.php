<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{

    public function enviarEmail(){
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'assunto' => $_POST['assunto'],
            'mensagem' => $_POST['mensagem']
        ];

        require 'mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        die(var_dump("lool"));
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'lojaaraarashop@gmail.com';
        $mail->Password = 'araaralojashop';
        $mail->Port = 587;

        $mail->setFrom('lojaaraarashop@gmail.com');
        $mail->addAddress($parameters['email']);

        $mail->isHTML(true);
        $mail->Subject = $parameters['assunto'];
        $mail->Body    = nl2br($parameters['mensagem']);
        $mail->AltBody = nl2br(strip_tags($parameters['mensagem']));

        if (!$mail->send()) {
            echo 'Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            header('Location: /contato');
        }
    
    }

    public function index()
    {
        
    }

    public function show()
    {

    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }

    
}