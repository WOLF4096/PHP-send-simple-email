<?php

$time = date('Y-m-d H:i:s',time());
$to = "746515005@qq.com";   //设置收件人 
$message = '
<!-- 狼介（WOLF4096）  QQ：746515005    All Platform ID: WOLF4096
._       __   ____     __     ______   __ __   ____    ____    _____
| |     / /  / __ \   / /    / ____/  / // /  / __ \  / __ \  / ___/
| | /| / /  / / / /  / /    / /_     / // /_ / / / / / /_/ / / __ \ 
| |/ |/ /  / /_/ /  / /___ / __/    /__  __// /_/ /  \__, / / /_/ / 
|__/|__/   \____/  /_____//_/         /_/   \____/  /____/  \____/  

-->
<div style="text-align: center;font-size: 32px;height: 54px;">
    <a href="https://blog.wolf4096.top/" style="color: #000; text-decoration: none;">
        <b>WOLF4096</b>
    </a>
</div>
<div style="width: 512px;background: #a0b7d4;margin: auto;padding: 20px;border-radius: 7px;font-size: 24px;">
    <b>测试邮件发送成功！</b><br/>
    <span>发送时间：'.$time.'</span>
</div>
';
$header  = "MIME-Version: 1.0\n";                       //设置MIME版本
$header .= "Content-type: text/html; charset=UTF-8\n";  //设置内容类型和字符集
$header .= "From: <wolf@furry.vin>";                    //设置发件人
$subject = "Test Email";                                //设置E-mail主题 不能为中文
mail($to, $subject, $message, $header);

?>
