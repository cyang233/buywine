<?php header("Access-Control-Allow-Origin:*");
session_start();
        $user = $_GET["user"];
        $pwd = $_GET["pwd"];
        $sjk = @mysql_connect("localhost","root","root");
        if(!$sjk){
            die("数据库连接失败".mysql_error());
        }
        mysql_select_db("web",$sjk);
        $r1 = mysql_query("select * from tb_admin where name= '$user'");
        $row1 = mysql_fetch_assoc($r1);
        if(empty($row1)){
            echo "用户名已存在";
             exit;
    }elseif{
        $result = mysql_query("insert into tb_admin (name,pwd) values('$user','$pwd')");
    }
    if($result){
         echo '注册成功';
           exit;
    }else{
       echo '注册失败';
         exit;
    }

    ?>
