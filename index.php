<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Web Ban Hang</title>
</head>

<body>
    <div class="warpper">
        <!-- header-->
        <?php
        include('pages/header.php')
        ?>
        <!-- end header-->
        <!-- menu-->
        <?php
        @include('pages/menu.php')
        ?>
        <!-- end menu-->
        <!-- MAIN  -->
        <?php
        @include('pages/main.php')
        ?>
        <!-- END MAIN -->
        <div class="clear"></div>
        <!-- footer-->
        <?php
        @include('pages/footer.php')
        ?>
        <!-- end footer-->
    </div>
</body>

</html>