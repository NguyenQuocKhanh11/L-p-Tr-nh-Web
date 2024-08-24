
<?php 
    $list_number = array(5, 2, 9, 1, 7, 3);
    function inMang($list_number){
        for ($i = 0; $i < count($list_number); $i++) {
            echo"".$list_number[$i].", ";
        }
    }
    function Tong($list_number){
        return array_sum($list_number);
    }

    function sapxep($list_number){
        sort($list_number);
        return $list_number;
    }
    function timso($list_number, $a){
        if (in_array($a, $list_number)){
            return "Có tồn tại trong mảng";
        }else {
            return "Không nằm trong mảng" ;
        }
    }
    $sapxep = sapxep($list_number);
    $timso = timso($list_number, 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai4.css">
    <title>Document</title>
</head>
<body>
        <div id="tieude">Arrat Function</div>
        <div id="than">
            <label>Mảng ban đầu: </label>
            <a><?php echo inMang($list_number)?></a><br>
            <label>Giá trị lớn nhất trong mảng: </label>
            <a><?php echo max($list_number) ?></a> <br>
            <label>Giá trị nhỏ nhất trong mảng: </label>
            <a><?php echo min($list_number) ?></a> <br>
            <label>Tổng: </label>
            <a><?php echo array_sum($list_number) ?></a><br>
            <label>Mảng sau khi sắp xếp: </label>
            <a><?php echo implode(", ", $sapxep); ?></a><br>
            <label>Số 5 có tồn tại không ? </label><br>
            <a><?php echo $timso; ?></a><br>
        </div>
</body>
</html>
