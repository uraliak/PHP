<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переверзев Иван 221-321</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header__container container">
            <a href="index.html" class="header__logo">
                <img src="../../logo.svg" alt="" class="image">
            </a>
            <h1>1.2. Домашняя работа: Solve the equation</h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            
            <?php
            function correct_expression($expression) {
                return True;
            }

            $expression = $_GET['expression'];
            if (correct_expression)
                echo $item . '   ==>   X = ';
                $item = explode(' ', $item);
                $operator = $item[1];
                $operand1 = $item[0];
                $operand2 = $item[2];
                $answer = $item[count($item) - 1];
                // echo '$$$' . $operand1 . ' ' . $operator . ' ' . $operand2 . ' = ' . $answer . '<br>';
                if ($operator === '+') {
                    if ($operand1 === 'X') {
                        echo (int)$answer - (int)$operand2 . '<br>';
                    }
                    else {
                        echo (int)$answer - (int)$operand1 . '<br>';
                    }
                }
                elseif ($operator === '-') {
                    if ($operand1 === 'X') {
                        echo (int)$answer + (int)$operand2 . '<br>';
                    }
                    else {
                        echo (int)$operand1 - (int)$answer . '<br>';
                    }
                }
                elseif ($operator === '*') {
                    if ($operand1 === 'X') {
                        echo (int)$answer / (int)$operand2 . '<br>';
                    }
                    else {
                        echo (int)$answer / (int)$operand1 . '<br>';
                    }
                }
                elseif ($operator === '/') {
                    if ($operand1 === 'X') {
                        echo (int)$answer * (int)$operand2 . '<br>';
                    }
                    else {
                        echo (int)$operand1 / (int)$answer . '<br>';
                    }
                }
            ?>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__container container">
            <a href="#/" class="header__logo">
                <img src="../../logo.svg" alt="" class="image">
            </a>
            <h2>Переверзев Иван Дмитриевич 221-321</h2>
        </div>
    </footer>
</body>
</html>