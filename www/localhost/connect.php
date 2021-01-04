<?php
$serverName = "mysql";
$userName = "root";
$passWord = "123456";

// 创建链接
$conn = new mysqli($serverName, $userName, $passWord);

// 检测链接
if ($conn->connect_error) {
    die("连接失败：" . $conn->connect_error);
}
echo "连接成功";
?>