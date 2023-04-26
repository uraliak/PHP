<?php
    include('menu.php');
    require('db.php');
?>

<form action="" class="form-add" method="post">
    <div class="add">
        <label for="field">Название области знаний</label>
        <input type="text" name="field" id="field">
        <label for="description">Описание</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit" class="submit">Добавить</button>
    </div>
</form>
