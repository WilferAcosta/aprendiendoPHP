<?php
session_start();
if (isset($_POST['numero'])) {
    if ($_POST['numero'] == "c") {
        $_SESSION['num1'] = null;
    } else if ($_POST['numero'] == "←") {
        $_SESSION['num1'] = substr($_SESSION['num1'], 0, -1);
    } else {
        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['numero'];
        } else {
            $_SESSION['num1'] =  $_POST['numero'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
        .calculator {
            width: 578px;;
            margin: 50px auto;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 5px #ccc;
            padding: 10px;

        }

        .display {
            background-color: #eee;
            padding: 5px;
            text-align: right;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
            margin-top: 10px;
        }

        button {
            background-color: #ccc;
            border: none;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #aaa;
        }

        button:active {
            background-color: #999;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <div class="display">
            <span id="result"><input type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] : 0; ?>"></span>
        </div>
        <form class="buttons" method="POST">
            <button type="submit" name="numero" value="c">c</button>
            <button type="submit" name="numero" value="/">/</button>
            <button type="submit" name="numero" value="*">*</button>
            <button type="submit" name="numero" value="-">-</button>
            <button type="submit" name="numero" value="7">7</button>
            <button type="submit" name="numero" value="8">8</button>
            <button type="submit" name="numero" value="9">9</button>
            <button type="submit" name="numero" value="+">+</button>
            <button type="submit" name="numero" value="4">4</button>
            <button type="submit" name="numero" value="5">5</button>
            <button type="submit" name="numero" value="6">6</button>
            <button type="submit" name="numero" value="1">1</button>
            <button type="submit" name="numero" value="2">2</button>
            <button type="submit" name="numero" value="3">3</button>
            <button type="submit" name="numero" value="0">0</button>
            <button type="submit" name="numero" value="←">←</button>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>