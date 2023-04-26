<?php
   include('menu.php');
   require('db.php');
?>

Нет хештегов без привязки к области знаний
<h2>Выбрать область знаний:</h2>
<form action="" method="post">
    <label for="field">Область знаний:</label>
    <select name="field" id="field">
        <option value=''></option><option value='cake'>cake</option>
    </select>
    <button type="submit">Выбрать</button>
</form>
