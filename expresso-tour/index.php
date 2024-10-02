<?php

if(isset($_GET['url'])){
    $url = $_GET['url']; 
}else{
    $url = 'inicio';
}






 switch ($url) {
    case 'inicio':
        include('site/index.php');
        break;
    case 'agencia':
        include('site/sobre-nos.php');
        break;
    case 'tours':
        include('site/tours.php');
        break;
    case 'contato':
        include('site/contato.php');
        break;

    case 'pagina-tour':
        include('site/pagina-tour.php');
        break;
}


?>