<?php
/**
 * @var string $errorMessage текст ошибки
 * @var \Exception $exception исключение
 */
?>
<html>
<head>
    <title>Ошибка</title>
</head>
<body>
<h1>Произошла ошибка</h1>
<?php if (isset($exception)) { ?>
    <h2><?php echo $exception->getMessage() ?></h2>
    <p><?php echo $exception->getFile() .':' . $exception->getLine() ?></p>
    <pre><?php echo $exception->getTraceAsString() ?></pre>
<?php } else { ?>
    <h2><?php echo $errorMessage ?></h2>
<?php } ?>
</body>
</html>
