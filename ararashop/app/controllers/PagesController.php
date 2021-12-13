<?php

namespace App\Controllers;



use App\Core\App;

class PagesController
{

    public function admProdutos()
    {
        $categorias = App::get('database')->selectAll('categorias');
        $tableProdutos = App::get('database')->selectAll('produtos');

        return view('admin/produtosADM', compact("tableProdutos", "categorias"));
    }
    public function produtos()
    {
        $tableProdutos = App::get('database')->selectAll('produtos');

        return view('site/produtos', compact("tableProdutos"));
    }
    public function admDashboard()
    {
        $tableProdutos = App::get('database')->selectAll('produtos');


        return view('admin/dashboard', compact("tableProdutos"));
    }
    public function home()
    {
        return view('site/home');
    }

    public function contato()
    {
        return view('site/contato');
    }

    public function delete()
    {

        app::get('database')->delete('produtos', $_POST['id']);

        header('location: /admin/produtos');
    }
    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'imagem' => $_POST['imagem'],
            'descricao' => $_POST['descricao'],
            'categoria' => $_POST['categoria']
        ];

        app::get('database')->create('produtos', $parameters);
        header('location: /admin/produtos');
    }

    public function update()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'imagem' => $_POST['imagem'],
            'descricao' => $_POST['descricao'],
            'categoria' => $_POST['categoria']
        ];

        if ($parameters['imagem'] == "") {
            $parameters['imagem'] = $_POST['imagem-antiga'];
        }

        if ($parameters['descricao'] == "") {
            $parameters['descricao'] = $_POST['descricao-antiga'];
        }




        app::get('database')->updateProd('produtos', $parameters, $_POST['id']);
        header('location: /admin/produtos');
    }


    public function sendEmail()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'assunto' => $_POST['assunto'],
            'mensagem' => $_POST['mensagem']
        ];

        require 'mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer;
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
            header('Location: /user/contato');
        }
    }
}
