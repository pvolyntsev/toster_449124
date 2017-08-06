<?php
/**
 * @var string $errorMessage текст ошибки
 * @var \Exception $exception исключение
 */
?>
<html>
<head>
    <title>Ошибка</title>
    <link rel="stylesheet" href="https://semantic-ui.com/dist/semantic.min.css">
    <style type="text/css">
        .ui.container:first-child {
            margin-top: 3em;
        }
    </style>
</head>
<body>
<div class="ui container">
    <h2 class="ui red header">
        <i class="bug gray icon"></i>
        Произошла ошибка
    </h2>

    <?php if (isset($exception)) { ?>
        <h2><?php echo $exception->getMessage() ?></h2>
        <p><?php echo $exception->getFile() .':' . $exception->getLine() ?></p>
        <pre><?php echo $exception->getTraceAsString() ?></pre>
    <?php } else { ?>
        <h2><?php echo $errorMessage ?></h2>
    <?php } ?>

    <div class="ui bottom fixed menu">
        <div class="ui item"><img class="ui avatar image" src="http://copist.ru/wp-content/uploads/2013/09/19789.jpg"> Pavel Volyntsev</div>

        <div class="ui right menu">
            <a class="ui item" href="http://toster.ru/user/copist">toster.ru</a>
            <a class="ui item" href="http://webmentor.pro/">webmentor.pro</a>
            <a class="ui item" href="http://copist.ru/">copist.ru</a>
            <a class="ui item webmentor" href="https://www.codementor.io/i/nz2q2ocre">codementor.io</a>
        </div>
    </div>
</div>
</body>
</html>
