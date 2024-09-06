<?php
    include('config.php');

    // التحقق من وجود المتغير 'id' في الطلب
    if (isset($_GET['id'])) {
        $ID = intval($_GET['id']); // تحويل ID إلى عدد صحيح لتجنب SQL Injection

        // تنفيذ الاستعلام وحفظ نتيجة التنفيذ
        $result = mysqli_query($con, "DELETE FROM addcard WHERE id=$ID");

        // التحقق من نجاح الاستعلام
        if ($result) {
            // إعادة التوجيه إلى الصفحة المطلوبة
            header('Location: card.php');
        } else {
            // عرض رسالة خطأ إذا لم ينجح الاستعلام
            echo "خطأ في تنفيذ الاستعلام: " . mysqli_error($con);
        }
    } else {
        echo "لم يتم توفير معرّف ID.";
    }

    // إغلاق الاتصال بقاعدة البيانات
    mysqli_close($con);
?>
