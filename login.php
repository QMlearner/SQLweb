/* 将用户名、密码传入本php，并与数据库连接校验 */

<?php
    //防止页面出现乱码
    header("Content-type:text/html;charset=utf-8");

    //接收表单form提交来的数据，首先需要定义变量←表单数据赋值给
    $username = $_post[username]
    $password = $_post[password]

    //打印出来看看
    echo "用户名".$username;
    echo "密码".$password;

?>