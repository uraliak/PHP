<?php
include('menu.php');
require('db.php');
?>

<form action="" class="form-add" method="post">
    <div class="add">
        <label for="tag">Хэштег</label>
        <input type="text" name="tag" id="tag">
        <label for="field">Область знаний</label>
        <input type="text" name="field" id="field">
        <button type="submit" class="submit">Добавить связь</button>
    </div>
</form>