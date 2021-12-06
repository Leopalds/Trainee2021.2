<?php

    namespace App\Controllers;
    use App\Core\App;
    use Exception;

    class PagesController {

        public function admProdutos(){
            $produtosadm = App::get('database')->selectAll('produtosAdm');
        
            return view('admin/produtosADM', compact("produtosAdm")); 
        }
        public function produtos(){
            return view('site/produtos');
        }

        public function home(){
            return view('site/home');
        }

        public function delete(){
            app::get('database')->delete('produtosAdm', $_POST['id']);
            header('location: /produtosADM');
        }
        public function create(){
            $parameters = [
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'img'=>$_POST['img'],
                'descpt'=>$_POST['descpt'],
                'category'=>$_POST['category']
            ];

            app::get('database')->insert('produtosAdm', $parameters);
            header('location: /produtosADM');
        }

    }

?>