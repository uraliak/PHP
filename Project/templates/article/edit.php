<?php include __DIR__ . "/../header.php";
?>
    <form action="/PHP/Project/www/article/update/<?= $article->getId(); ?>" method="post">
        <div class="container">
            <input type="text" name="title" id="" value =<?=$article->getTitle();?> >
            <input type="text" name="text" id="" value =<?=$article->getText();?> >
            <input type="text" name="authorId" id="" value =<?=$article->getAuthorId()->getNickname();?>>
            <input type="hidden" name="author_id" value=<?=$article->getAuthorId()->getId();?>>
            <button type="submit">Добавить</button>
        </div>
    </form>

<?php include __DIR__ . "/../footer.html"; ?>


