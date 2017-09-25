<?php
//$dateValue = $_GET['date']; //кидаем строку ‘’today’ в переменную dateValue
//$filterValue = $_GET['filter']; //кидаем строку ‘ goods’ в переменную filterValue
//echo "Date: $dateValue , Filter: $filterValue";

require_once './config.php';

$result = mysqli_query($connection, 'SELECT * FROM `post`;');
?>

<?php

while ($record = mysqli_fetch_assoc($result)) {
    echo '<p>' . $record['message'] . ' ' . date('d.m.Y H:i:s', $record['time']) . '</p>';
    echo '<hr>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if(isset($error))
?>
<form action="post.php" method="post">
    <p><textarea name="comment" cols="48" rows="8"></textarea>
    </p>

    <p><input type="submit" value="Отправить"> <input type="reset" value="Очистить"></p>
</form>
</body>
</html>


