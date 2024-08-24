
<?php 
    $list_number = array(5, 2, 9, 1, 7, 3);

    function solonnhat($list_number){
        return max($list_number);
    }

    function sonhonhat($list_number){
        return min($list_number);
    }

    function Tong($list_number){
        return array_sum($list_number);
    }

    function sapxep($list_number){
        sort($list_number);
        return $list_number;
    }
    function timso($list_number,$a){
        if (in_array($a,$list_number)){
            return "so da ton tai";
        }else {
            return "so khong ton tai" ;
        }
    }
    $sapxep = sapxep($list_number);
    $timso = timso($list_number,5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <label for="max(list_number)">Gia tri lon nhat trong mang la: </label>
        <a><?php echo max($list_number) ?></a> <br>
        <label for="min(list_number)">Gia tri nho nhat trong mang la: </label>
        <a><?php echo min($list_number) ?></a> <br>
        <label for="tong(list_number)">tong cua mang la: </label>
        <a><?php echo array_sum($list_number) ?></a><br>
        <label for="sapxep(list_number)">Mang sau khi sap xep: </label>
        <a><?php echo implode(", ", $sapxep); ?></a><br>
        <label for="timso(list_number)">So sau khi kiem tra </label>
        <a><?php echo $timso; ?></a><br>
</body>
</html>
