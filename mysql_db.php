<?php
/*mysql connection by php */
/**
 *语法
 *mysql_connect(servername,username,password);
 *参数	描述
 *servername	可选。规定要连接的服务器。默认是 "localhost:3306"。127.0.0.1
 *username	可选。规定登录所使用的用户名。默认值是拥有服务器进程的用户的名称。
 *password	可选。规定登录所用的密码。默认是 ""。
 *
 */

$conn = mysql_connect('localhost:3306','root','123456');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

// some code

mysql_close($con);