<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2016/9/12
 * Time: 16:27
 */
@$from_name=$_GET['from_name'];
@$from_email=$_GET['from_email'];
@$to_name=$_GET['to_name'];
@$to_email=$_GET['to_email'];
@$subject=$_GET['subject'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>电子贺卡</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function check_data(){
            if(document.ecard.subject.value.length==0)
                alert('标题不能为空');
            else if(document.ecard.from_name.value.length==0)
                alert('发件人姓名不能为空');
            else if(document.ecard.from_email.value.length==0)
                alert('发件人邮箱不能为空');
            else if(document.ecard.to_name.value.length==0)
                alert('收件人姓名不能为空');
            else if(document.ecard.to_email.value.length==0)
                alert('收件人邮箱不能为空');
            else if(document.ecard.message.value.length==0)
                alert('内容不能为空');
            else
                ecard.submit();
        }
    </script>
    <style>
        .kongkong{
            height:50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 align="center">电子贺卡</h1>
</div>
<div class="form-group">
    <form action="preview.php" method="post" name="ecard">
        <h3 align="center">一、选择卡片样式</h3>
        <table align="center">
            <?php
            $card_id=0;
            for($i=1;$i<=2;$i++){
                for($j=1;$j<=4;$j++){
                    $card_id+=1;
                    echo "<td>";
                    echo "<input type='radio' name='card_id' value='";
                    echo $card_id."' checked>";
                    echo "<a href='images/".$card_id.".jpg' target='_blank'>";
                    echo "<img src='images/".$card_id."s.jpg' border='1'></a>";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <h3 align="center">二、填写卡片内容</h3>
        <br><br>
        <div class="col-md-2">
            <label for="subject">卡片通知标题:</label>
        </div>
        <div class="col-md-10">
            <input type="text" name="subject" class="form-control" id="subject">
        </div>
        <div class="kongkong"></div>
        <div class="col-md-2">
            <label for="from_name">发件人姓名:</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="from_name" class="form-control" id="from_name">
        </div>
        <div class="col-md-2">
            <label for="from_email">电子邮箱:</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="from_email" class="form-control" id="from_email">
        </div>
        <div class="kongkong"></div>
        <div class="col-md-2">
            <label for="to_name">收件人姓名:</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="to_name" class="form-control" id="to_name">
        </div>
        <div class="col-md-2">
            <label for="to_email">电子邮箱:</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="to_email" class="form-control" id="to_email">
        </div>

        <div class="kongkong"></div>
        <div class="col-md-2">
            <label>选择音乐：</label>
        </div>
        <div class="col-md-10">
            <select name="music">
                <option value="mid/1.mid" selected>如果云知道</option>
                <option value="mid/2.mid">往事随风</option>
                <option value="mid/3.mid">流浪的小孩</option>
                <option value="mid/4.mid">棋子</option>
            </select>
        </div>
        <div class="kongkong"></div>
        <div class="col-md-2">
            <label>选择卡片字体：</label>
        </div>
        <div class="col-md-2">
            <select name="style">
                <option value="normal" selected>一般</option>
                <option value="italic">倾斜</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>大小：</label>
        </div>
        <div class="col-md-2">
            <select name="size">
                <option value="8 pt">8 pt</option>
                <option value="10 pt">10 pt</option>
                <option value="12 pt" selected>12 pt</option>
                <option value="14 pt">14 pt</option>
                <option value="16 pt">16 pt</option>
                <option value="20 pt">20 pt</option>
                <option value="24 pt">24 pt</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>颜色：</label>
        </div>
        <div class="col-md-2">
            <select name="color">
                <option value="#000000" selected>黑色</option>
                <option value="#FF0000" selected>红色</option>
                <option value="#FF6633" selected>橙色</option>
                <option value="#339900" selected>绿色</option>
                <option value="#0099FF" selected>蓝色</option>
                <option value="#9933FF" selected>紫色</option>
                <option value="#BB0000" selected>暗红色</option>
                <option value="#005500" selected>深绿色</option>
                <option value="#333399" selected>深蓝色</option>
                <option value="#663399" selected>深紫色</option>
                <option value="#770000" selected>咖啡色</option>
            </select>
        </div>
        <div class="kongkong"></div>
        <label>卡片内容：</label>
        <textarea name="message" cols="72" rows="8" class="form-control"></textarea>
        <div class="kongkong"></div>
        <div align="center">
            <input type="button" value="卡片预览" onclick="check_data()" class="btn btn-primary">
            <input type="reset" value="重新填写" class="btn btn-danger">
        </div>
    </form>
</div>

</body>
</html>
