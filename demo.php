<?php
use Zend\Http\Header\From;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>DEMO</title>



</head>

<body>

    <?php
        error_reporting(E_ALL ^ E_DEPRECATED);

        $mysql_server_name = "localhost"; //数据库服务器名称
        $mysql_username = "root"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
        $mysql_password = ""; // 连接数据库密码
        $mysql_database = "coc_rock"; // 数据库的名字
        $conn = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);

        if (!$conn)
          {
          die('Could not connect: ' . mysql_error());
          }

        mysql_query("SET NAMES 'utf8'");

        mysql_select_db("coc_rock", $conn);

        $result_order_no = mysql_query("SELECT MAX(order_no) FROM rock_reservation WHERE DELETE_MARK = '1'");

        $row_order_no = mysql_fetch_array($result_order_no);

        $num_order_no = $row_order_no['MAX(order_no)'];

        $true_order_no = $num_order_no + 15;

        for ($num_order_no = $num_order_no + 1; $num_order_no <= $true_order_no; $num_order_no++)
        {
            mysql_query("INSERT INTO `coc_rock`.`rock_reservation` VALUES ('$num_order_no + 1', '', '', NULL, NULL, '', '')");
        }





//         echo "<h1 align='center'>" . $true_order_no . "</h1>";

        mysql_close($conn);
    ?>


</body>
</html>





