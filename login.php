<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> login Nasser Complex</title>
    <link rel="stylesheet" href="css/style.css">
    
     <style>
           @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
    </style>
</head>
<body>
    <div class="main">
        <div class="logo2">
            <img src="images/user.png">
            <h2>تسجيل الدخول للمسؤول</h2>
        </div>
        <div class="book">
            <p>أهلاً وسهلاً بك يرجى تسجيل الدخول لتتمكن من عرض البيانات</p>
            <form action="admin.php" method="POST">

                <input type="email" placeholder="أدخل البريد الإلكتروني" name="email"/>
                <input type="password" placeholder="أدخل كلمة المرور" name="password"/>
                
                <input type="submit" value="تسجيل الدخول" name="submit"/>
                
                <a href="http://localhost:1080/mohamed/index.php">  <input type="button" value="العودة لصفحة الحجوزات" name="button"/></a>
            </form>

            <?php
/*
session_start();

$conn = mysql_connect("localhost","root","","hospital");

mysql_select_db("hospital");

$email = mysql_reel_escape_string($_POST['email']);
$pass = mysql_reel_escape_string($_POST['pass']);
if (!empty($email)) {
    if (!empty($pass)) {
        $sql = "SELECT * FROM users where 'email'='$email'  ";
        $quary = mysql_quary($sql);
        while ($row = mysql_fatch_array($quary)) {
            $name = $row ['name'];
            $db_mail = $row['email'];
            $db_pass - $row['password'];
        }

        if ($email === $db_mail && $pass === $db_pass) {
            $_SESSION['name']= $name;
            $_SESSION['mail']= $db_mail;

            header("location : admin.php");
        }
        else {
            echo("هناك خطأ في تسجيل الدخول");
        }
    }
    else {
        echo(" هناك خطأ في كلمة المرور");
    }
}
else {
    echo(" هناك خطأ في الإيميل");
}
*/



           if(isset($_POST['submit'])){


               $email=$_POST['email'];
               $password=$_POST['password'];

                                    if(($username=='asem.alimoor@gmail.com') && ($password=="123456789")){

                                        echo "<p style='color:green'>" . "..تم الدخول بنجاح " . "</p>";
                                    }
                                    else{
                                        echo "<p style='color:red'>" . "عذراً كلمة المرور خاطئة حاول مرة أخرى.." . "</p>";
                                    }
           }





            ?>



        </div>
    </div>
</body>
</html>