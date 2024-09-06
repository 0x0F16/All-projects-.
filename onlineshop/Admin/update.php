<?php
include('config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update | تعديل المنتج </title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    include('config.php');
    $ID =$_GET['id'];
    $up = mysqli_query($con , " SELECT * FROM prod where id=$ID ");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>  تعديل المنتجات   </h2>
                    <input type="text" name='id' placeholder="ادخل الرقم التعريفي للمنتج" value='<?php echo $data['id'] ?>' >
                <br>
                    <input type="text" name='name' placeholder="ادخل اسم المنتج"  value='<?php echo $data['name'] ?>' >
                <br>
                    <input type="text" id="price" name="price" placeholder="0.00"  value='<?php echo $data['price'] ?>' required>
                <br>
                    <input type="file" name="image" id="file" style="display:none">
                <label for="file">تحديث صوره المنتج</label>
                <button name="Update" type='submit'> تعديل المنتج </button>
                <br>
                <a href="products.php"> عرض المنتجات </a>
            </form>
        </div>
    </center>

</body>

</html>