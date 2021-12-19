<?php 

if(isset($_GET['categoria'])){
    echo '&categoria=' . $_GET['categoria'];
};

if(isset($_GET['search'])){
    echo '&search=' . $_GET['search'];
};