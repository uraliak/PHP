<?php
  require('db.php');
  $mysqli = connect();
  $product_id = $_GET['id'];
  $product = mysqli_query($mysqli, "SELECT * FROM `field` WHERE `id`='$product_id'");
  $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Просмотр товара</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <a href="index.php">Главная</a>
  <hr>

  <h2><?= $product['field'] ?></h2>
  <p><?= $product['description'] ?></p>

  <hr>
  <h3>Добавить хэштег: </h3>
  <form action="create_word.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <textarea name="word" placeholder="название #"></textarea>
    <button type="submit">Отправить</button>
  </form>

  <hr>
  <h3>Хэштеги: </h3>
  <ul>
    <?php
      $hashtag = mysqli_query($mysqli, "SELECT * FROM `hashtag` WHERE `product_id`='$product_id'");
      $hashtag = mysqli_fetch_all($hashtag);
      foreach($hashtag as $word) {
        ?>
          <li><?= '# '.$word[2] ?></li>
        <?php
      }
    ?>
  </ul>

</body>
</html>