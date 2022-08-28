<?php
    /**
 * @var $CDataBase;
 */
    require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/CDataBase.php');
    $CDataBase->addTOBDLinks('links', $_POST['link_user'], $_SESSION['user']['nickname'], $_POST['comm']);
    header('Location: ../pages/mn_page.php');
?>