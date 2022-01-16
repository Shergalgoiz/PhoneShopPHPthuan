<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp); //ket noi csdl
?>

<div class="warpper__them" style="margin-top:10px;">
    <table class="table" width="50%">
        <thead>
            <tr>
                <h1>Liệt Kê danh mục sản phẩm</h1>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">stt</th>
                <td>Tên danh mục</td>
                <td>thứ tự thêm vào</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
                $i++;
            ?>
                <tr>
                    <th><?php echo $i ?></th>
                    <td><?php echo $row['tendanhmuc'] ?></td>
                    <td><?php echo $row['thutu'] ?></td>
                    <td><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>