<?php
 /**
 * @var $CDataBase;
 */
    require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/CDataBase.php');
    $CDataBase->delById('links', $_POST['id']);
    header('Location: ../pages/mn_page.php');
?>