<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2016/9/13
 * Time: 15:00
 */
require_once 'dbtools.inc.php';

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
$date=date('Y-m-d H:i:s');

$sql="insert into card_message(card_id,subject,from_name,from_email,to_name,to_email,music,style,size,color,message,date)
      values('$card_id','$subject','$from_name','$from_email','$to_name','$to_email','$music','$style','$size','$color','$message','$date')
      ";
mysqli_query($conn,$sql);

$sql2="select * from card_message where subject='$subject' and date='$date'";

$result=mysqli_query($conn,$sql2);
$arr=mysqli_fetch_array($result);
$id=$arr['id'];

$current_url="http://".$_SERVER['REMOTE_ADDR'].$_SERVER['PHP_SELF'];
$get_ecard_url=str_replace('ecard.php','get_ecard.php',$current_url);
$get_ecard_url.="?id=".$id."&subject=".urlencode($subject);

$messages="<h1 align='center'>电子贺卡</h1>";
$messages.="<p>亲爱的".$to_name."</p>";
$messages.="<p>".$from_name."通过本站寄给您一张电子贺卡</p>";
$messages.="<p>您可以到以下网址观看电子贺卡：</p>";
$messages.="<p align='center'><a href='".$get_ecard_url."'>按此观看</a></p>";
$messages.="<p align='center'>发送日期：".$date."</p>";
$messages=iconv('UTF-8','Gb2312',$messages);

$headers="MIME-Version:1.0\r\n";
$headers.="Content-type:text/html;charset=Gb2312\r\n";
$headers.="From:$from_name<$from_email>\r\n";
$headers.="To:$to_name<$to_email>\r\n";
$headers=iconv('UTF-8','Gb2312',$headers);

mail($to_email,iconv('UTF-8','Gb2312',$subject),$messages,$headers);

