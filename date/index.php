<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>日期函式</title>
</head>
<body>
    <h1>日期基礎函式</h1>
    <h2>date()</h2>
    <h2>時區設定</h2>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("西元Y年m月d日 H:i:s l");
    ?>

    <h2>strtotime</h2>
    <?php
     $now = strtotime('now');
     $now = $now+(60*60*24)*30;
     echo $now;
     echo "<br>";
     echo date("西元Y年m月d日 H:i:s l",$now);
     echo "<hr>";

     $tomorrow=strtotime("-1 year");
    ?>

    <h2>練習</h2>
    <ul>
        <li><a href = "practice01.php">練習一:計算日期間隔</a></li>
        <li><a href = "practice02.php">練習二:計算自己的生日還有幾天</a></li>
        <li><a href = "practice03.php">練習三:date函式的參數練習</a></li>
        <li><a href = "practice04.php">練習四:利用迴圈來計算連續五個周一的日期</a></li>
        <li><a href = "">練習五:</a></li>
    </ul>
</body>
</html>