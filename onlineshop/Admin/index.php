<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | اضافة منتجات </title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2> سوق دوت كوم </h2>
                <img src="logo.png" alt="logo" width="">
                <input type="text" name='name' placeholder="ادخل اسم المنتج">
                <br>
                    <input type="text" id="price" name="price" placeholder="0.00" required>
                <br>
                <input type="file" name="image" id="file" style="display:none">
                <label for="file">اختيار صوره للمنتج</label>
                <button name="upload">رفع المنتج </button>
                <br>
                <a href="products.php"> عرض المنتجات </a>
            </form>
        </div>
    </center>

</body>

</html>