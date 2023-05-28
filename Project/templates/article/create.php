<form action="/PHP/Project/www/comments/store/" method="post">
    <input tupe="text" name="title" id="">
    <input tupe="text" name="text" id="">
    <select name="authorId" id="">
            <?php foreach($users as $user):?>
                <option value="<?=$user->getId();?>"><?=$user->getNickname();?></option>
            <?php endforeach;?>
        </select>
    <button type="submit">Добавить</button>
</form>