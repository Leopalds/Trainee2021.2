<?php

    namespace App\Controllers;
    use App\Core\App;
    use Exception;

    class PagesController {

        public function admProdutos(){
            $tableProdutos = App::get('database')->selectAll('produtos');

            return view('admin/produtosADM', compact("tableProdutos"));
        }
        public function produtos(){
            $tableProdutos = App::get('database')->selectAll('produtos');
            
            return view('site/produtos', compact("tableProdutos"));
        }
        public function admDashboard(){
            $tableProdutos = App::get('database')->selectAll('produtos');


             return view('admin/dashboard', compact("tableProdutos"));
         }
        public function home(){
            return view('site/home');
        }

        public function delete(){
            app::get('database')->delete('produtos', $_POST['id']);
            header('location: /admin/produtos');
        }
        public function create(){
            $parameters = [
                'nome'=>$_POST['nome'],
                'preco'=>$_POST['preco'],
                'imagem'=>$_POST['imagem'],
                'descricao'=>$_POST['descricao'],
                'categoria'=>$_POST['categoria']
            ];

            app::get('database')->insert('produtos', $parameters);
            header('location: /admin/produtos');
        }

    }

?>