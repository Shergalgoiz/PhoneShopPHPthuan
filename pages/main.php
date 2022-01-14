<div id="main">
    <!-- sidebar-->
    <div class="sidebar">
        <?php
        include('pages/left/sidebar.php')
        ?>
    </div>
    <!-- end sidebar-->
    <!-- main__content-->
    <div class="main__content">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }
        if ($tam == 'danhmucsanpham') {
            include('right/danhmuc.php');
        } elseif ($tam == 'giohang') {
            include('right/giohang.php');
        } elseif ($tam == 'lienhe') {
            include('right/lienhe.php');
        } elseif ($tam == 'tintuc') {
            include('right/tintuc.php');
        } else {
            include('right/index.php');
        }
        ?>
    </div>
    <!-- end main__content-->
</div>