<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['number'];
    function phone($str)
    {
        $pattern = "/^\([0-9]{2}\)-\(0[0-9]{8}\)$/";
        if (preg_match($pattern, $str)) {
            echo "Dinh dang so dien thoai dung";
        } else {
            echo "Dinh dang so dien thoai khong dung";
        }
    }

    phone($str);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap so dien thoai:
    <input type="text" name="number"/>
    <button type="submit">Tim Kiem</button>
</form>

</body>
</html>
