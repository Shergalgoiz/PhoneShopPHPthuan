<?php

$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($conn, $sql_sua_danhmucsp); //ket noi csdl

?>
<p>Sửa danh mục sản phẩm</p>
<div class="warpper__them">
    <table class="table" width="50%">
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
            <thead>
                <tr>
                    <h1>Sửa sản phẩm</h1>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
                ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tên danh mục</td>
                        <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Thứ tự</td>
                        <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </form>
    </table>
</div>