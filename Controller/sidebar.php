<?php
    switch ($_GET['page']) {
        case "MainPage":
           include './View/MainPage.php';
        break;

    default :
    include './View/Empty.php';

}



