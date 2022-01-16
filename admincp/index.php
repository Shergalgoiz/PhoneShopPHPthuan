<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title>Admincp</title>
</head>

<body>
    <h3>Welcome to Admincp</h3>
    <?php
    include('config/config.php'); //khai bao toan cuc file config cho tat ca
    include('modules/header.php');
    include('modules/menu.php');
    include('modules/main.php');
    include('modules/footer.php');
    ?>
</body>

</html>