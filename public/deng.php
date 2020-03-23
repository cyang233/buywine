<?php session_start();
header("Access-Control-Allow-Origin:*");
    
    $result = array();
        if(isset($_GET["zx"])){
            if($_GET["zx"]==1){
                unset($_SESSION["user"]);
                echo "<script>alert('注销成功');location.href='./deng.php';</script>";
                exit;
            }
        }
        $sjk = @mysql_connect("localhost","root","root");
        if(!$sjk){
            die("数据库连接失败".mysql_error());
        }
        if(isset($_GET["user"])&&isset($_GET["pwd"])){
            $user = $_GET["user"];
            $pwd = $_GET["pwd"];
            $_SESSION["user"] = $_GET["user"];
        }
    mysql_select_db("web",$sjk);
    $r1 = mysql_query("select * from tb_admin where name= '$user'");
    $r2 = mysql_query("select * from tb_admin where pwd= '$pwd'");
    $row1 = mysql_fetch_assoc($r1);
    $row2 = mysql_fetch_assoc($r2);
        if(empty($row1)){
            echo "用户名不存在";
             exit;
        }elseif(empty($row2)){
               echo "密码错误";
             exit;
        }else{
             echo "登陆成功";
            exit;
        }
    ?>