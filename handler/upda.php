<?php
 /**
 * @var $CDataBase;
 */
    require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/CDataBase.php');
    $CDataBase->Upd('links', $_SESSION['user']['nickname'], $_POST['link_user'],  $_POST['id'], $_POST['comm']);
    header('Location: ../pages/mn_page.php');
?>