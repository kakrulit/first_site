<?php
/**
 * @var $CDataBase;
 */
    require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/CDataBase.php');
    $students = $CDataBase->selectAll('links');

    require_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/header.php');
?>

<link rel="stylesheet" type="text/css" href="../css/table.css" />
<link rel="stylesheet" type="text/css" href="../css/forms.css" />
<table class="table_sort" cellspacing="2">
    <thead>
         <tr>
            <th>ID</th>
            <th>Ссылка</th>
            <th>Имя автора</th>
            <th>Комментарии пользователей</th>
         </tr>
      </thead>
    <tbody>
    <?php foreach ($students as $student){?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['link']; ?></td>
                <td><?php echo $student['author_name']; ?></td>
                <td><?php echo $student['comment']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<br><br>
<script src="../js/table.js"></script>

    <form action="../handler/del.php" method="POST">
    <label>ID</label>
    <input class="input_log" type="text" name="id" placeholder="Введите id">
    <input class="but_log" type="submit" value="Удалить">
    </form>
    
    <form action="../handler/add_db.php" method="POST">
    <label>Создать запись</label>
    <input class="input_log" type="text" name="link_user" placeholder="Ваша ссылка">
    <input class="input_log" type="text" name="comm" placeholder="Ваш комментарий">
    <input class="but_log" type="submit" value="Создать">
    </form>
    
    <form action="../handler/upda.php" method="POST">
    <label>Изменить</label>
    <input class="input_log" type="text" name="id" placeholder="Введите id">
    <input class="input_log" type="text" name="link_user" placeholder="Ваша новая ссылка">
    <input class="input_log" type="text" name="comm" placeholder="Ваш новый комментарий">
    <input class="but_log" type="submit" value="Изменить">
    </form> 
<?php  require_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/footer.php');?>