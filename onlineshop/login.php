<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0  ) {
      if( $email==='admin@gmail.com' AND $pass==='81dc9bdb52d04dc20036dbd8313ed055'){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         header('location: admin/index.php');
      }else{
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         header('location: index.php');
      }
   } else {
      $message[] = 'incorrect password or email!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
      input {
         text-align: center;
      }
   </style>
</head>

<body>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
      }
   }
   ?>

   <div class="form-container">

      <form action="" method="post">
         <h3>تسجيل الدخول</h3>
         <input type="email" name="email" required placeholder="البريد الالكتروني" class="box">
         <input type="password" name="password" required placeholder="كلمة المرور" class="box">
         <input type="submit" name="submit" class="btn" value="تسجيل الدخول">
         <p>هل تملك حساب بالفعل؟ <a href="register.php"> حساب جديد</a></p>
      </form>

   </div>

</body>

</html>