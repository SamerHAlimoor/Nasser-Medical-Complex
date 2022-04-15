<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al shifa </title>
    <link rel="stylesheet" href="css/style.css">
    
     <style>
           @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
    </style>
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2>مجمع ناصر الطبي</h2>
        </div>
        <div class="book">
            <p>أهلاً بك/ي في مجمع ناصر الطبي .. للحجز قم بتعبئة الإستمارة الآتية</p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="email" placeholder="أدخل البريد الالكتروني" name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="احجز الان" name="send"/>
                
                <a href="login.php">  <input type="button" value="عرض كافة الحجوزات" name=""/></a>
            </form>

            <?php

            # الاتصال بقاعدة البيانات 
            $host               = "localhost";
            $user               = "root";
            $password      = "";
            $dbName       = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            # إرسال البيانات التي أدخلها المريض لقاعدة البيانات
            // $pSend            = $_POST['send'];

             
            
                if(isset( $_POST['send'])){
                    $pName = mysqli_real_escape_string($conn, $_POST['name']);
                    $pEmail = mysqli_real_escape_string($conn, $_POST['email']);
                    $pDate = mysqli_real_escape_string($conn, $_POST['date']);
                   
                    // التأكد من ملئ الحقول بشكل صحيح  
                    if (empty($pName)||empty($pEmail)||empty($pDate)) {
                        echo "<p style='color:red'>" . "عفواً تأكد من تعبئة جميع الحقول .. " . "</p>";

                     }else{

                    $query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
                    $result = mysqli_query($conn,$query);
                        if (!$result){
                        echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";      

                }
                else{
                    echo "<p style='color:green'>" . "تم الحجز" . "</p>";

                }    
            }
            
            }





            ?>



        </div>
    </div>
</body>
</html>