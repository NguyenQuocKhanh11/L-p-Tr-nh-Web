<?php
    // Tạo mảng 
$sach = [];
for ($i=1; $i<=100;$i++){
    $sach [] = [
        'stt' => $i,
        'ten_sach' => "Tên Sách $i",
        'noi_dung' => "Nội Dung Sách $i",
    ];
}

    // số sách trong 1 trang
$so_luong_trang = 10;
$tong_sach = count($sach);
$so_sach_1t = ceil($tong_sach / $so_luong_trang);

    //số trang
$so_trang=isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($so_trang < 1) {
    $so_trang = 1;
} elseif ($so_trang > $so_sach_1t) {
    $so_trang = $so_sach_1t;
}

    //chia mang 
$offset=($so_trang-1)*$so_luong_trang;
$cat_mang = array_slice($sach, $offset, $so_luong_trang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            color: #000;
        }
        .pagination a.active {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
    <body>
    <table>
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cat_mang as $sachs): ?>
            <tr>
                <td><?= $sachs['stt'] ?></td>
                <td><?= $sachs['ten_sach'] ?></td>
                <td><?= $sachs['noi_dung'] ?></td>
            </tr>   
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($so_trang > 1): ?>
            <a href="?page=<?= $so_trang - 1 ?>">Trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $so_sach_1t; $i++): ?>
            <a href="?page=<?= $i ?>" class="<?= $i == $so_trang ? 'active' : '' ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($so_trang < $so_sach_1t): ?>
            <a href="?page=<?= $so_trang + 1 ?>">Sau</a>
        <?php endif; ?>
    </div>
    </body>
</html>