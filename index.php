<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum. Lorem ipsum dolor.';
        $censura = $_GET['censura'];
    ?>

    <p><?php echo $testo;?></p>
    <div><?php echo strlen($testo); ?></div>
    <p><?php echo str_replace($censura, '***', $testo); ?></p>
    <div><?php echo strlen($testo); ?></div>
</body>
</html>