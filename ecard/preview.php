<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2016/9/13
 * Time: 14:20
 */
$card_id=$_POST['card_id'];
$subject=$_POST['subject'];
$from_name=$_POST['from_name'];
$from_email=$_POST['from_email'];
$to_name=$_POST['to_name'];
$to_email=$_POST['to_email'];
$music=$_POST['music'];
$style=$_POST['style'];
$size=$_POST['size'];
$color=$_POST['color'];
$message=$_POST['message'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>预览卡片</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .kongkong{
            height:50px;
        }
    </style>
    <embed src="<?php echo $music; ?>" hidden loop="true"></embed>
</head>
<body>
<div class="container">
    <h1 align="center">预览卡片</h1>
    <div align="center">
        <img src="images/<?php echo $card_id; ?>.jpg" alt="">
    </div>
    <div class="kongkong"></div>
    <h3 align="center">标题：<?php echo $subject; ?></h3>
    <div class="kongkong"></div>
    <div class="col-md-2"><p>发送日期：</p></div>
    <div class="col-md-10">
        <?php echo date('Y-m-d H:i:s'); ?>
    </div>
    <div class="kongkong"></div>
    <div class="col-md-2">
        <p>发件人：</p>
    </div>
    <div class="col-md-10">
        <a href="MAILTO:<?php echo $from_emali; ?>"><?php echo $from_name; ?></a>
    </div>
    <div class="kongkong"></div>
    <div class="col-md-2">
        <p>收件人：</p>
    </div>
    <div class="col-md-10">
        <a href="MAILTO:<?php echo $to_emali; ?>"><?php echo $to_name; ?></a>
    </div>
    <div class="kongkong"></div>
    <p style="font-style: <?php echo $style; ?>; color: <?php echo $color; ?>;font-size: <?php echo $size; ?>">
        <?php echo $message; ?>
    </p>
    <div class="kongkong"></div>
    <form action="ecard.php" method="post">
        <input type="hidden" name="card_id" value="<?php echo $card_id; ?>">
        <input type="hidden" name="from_name" value="<?php echo $from_name; ?>">
        <input type="hidden" name="from_email" value="<?php echo $from_email; ?>">
        <input type="hidden" name="to_name" value="<?php echo $to_name; ?>">
        <input type="hidden" name="to_email" value="<?php echo $to_email; ?>">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
        <input type="hidden" name="music" value="<?php echo $music; ?>">
        <input type="hidden" name="style" value="<?php echo $style; ?>">
        <input type="hidden" name="color" value="<?php echo $color; ?>">
        <input type="hidden" name="size" value="<?php echo $size; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
        <a href="javascript:history.back()" class="btn btn-danger">返回修改</a>
        <input type="submit" value="发送" class="btn btn-primary">
    </form>
</div>
</body>
</html>
