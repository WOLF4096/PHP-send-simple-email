# 使用 PHP 发送简单的 HTML-Email

使用 PHP 环境运行即可发送

## 项目源码

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
    $header .= "From: <www@furry.vin>";                     //设置发件人
    $subject = "Test Email";                                //设置E-mail主题 不能为中文
    mail($to, $subject, $message, $header);
    ?>

## 效果演示

![效果演示][1]

## 邮件源码

    Received: from furry.vin ([43.128.66.128])
        by newxmmxsza126.qq.com (NewMX) with SMTP id 5918C620
        for <746515005@qq.com>; Sun, 24 Apr 2022 21:22:17 +0800
    X-QQ-mid: xmmxsza126t1650806537t6rywxzvk
    X-QQ-XMAILINFO: OH/oXo99N/TGrY8YZs7pcSJpposO6yF9z2kQBplez2FR0qP/yt463QVB8TSojk
        L+8QEL0jOZhq56LnVQPMv3Z2zLmDt1MsoLL3/RsA7VMnQuST6npU3e1/HxTzn6XfzWasRLRJUwox
        KgF6WaR+L2H2gfYt4yWN+0RCqRV2iu70zxa4eimMd37xyWjQqCsY9rT0qRL3X3W4T74VocZstWMI
        uGg/l2xcqnBIHlQiOSiqGzviM0RpUxSzp078nd3SX7wylFdKfeUBB8+phhsb6hah0QYbKHGCF+P8
        Mr6Stc1SzlmHC2UEj7sKh2tz2+Il4tajYljN1fpQ+h2+KHMx7TLnFuO8pv1XZB4jw9G5l+9nKftC
        WxZSdBhJsu/9B5k5ShIaGEmuPX3v8OK2zxCNQHef6PlJbrtDjN8iyx0QbxxkDyK/9RqqpO2ff72L
        xXWtPfPfjnjV6uHOLExybmFsujupNdgtHqj/JTUd5jygIcLg8qEfkL6CqqrfaHQX2VGS9MLsKnck
        btOdV6Za2jhe1/CHFmAOaOH63pLJgDrVuuHocS38IrcW5MTmv5avAwlj00ivcoBcXfIsPBSIdrdX
        NdFO5PDWl2XlqFq31xNmXfQI/CA7GSPDGhmr9G6+Zwc2esJ85JMln3/RlBqTuDhU6IGf+hGDiaIj
        hDYBWyUk+VyNwTwugvKS227o2vEdtrSihFfr4E5VvjwfKnNVHphza72MD6riCD2dMvG9rWi4iNLc
        IvdssiNivEt71jRcKrIGpvp5d91olhfJ9w5Q+jFvV9JKYAYYCtMcq75FlYKnwlG21+Xmk3qgLX7L
        dU0waR5CW6r/joGHYF/GE3IVF2WEntiEoEdG1pS1zQojEUnNfNO+v04VZALxcZGOYqrL4788ixor
        qTuZ2JbsuPIbrVMDDshNVdBDv1XPFP8WTYs6xE6nyvxOrypmrPvICsr+G1olPFJCZAb7hrY4YVWk
        ykinByx4aTRNzsixH8EQ==
    Received: by furry.vin (Postfix, from userid 1001)
        id AE931141EE6; Sun, 24 Apr 2022 21:22:14 +0800 (CST)
    DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=furry.vin; s=default;
        t=1650806534;
        h=from:from:reply-to:subject:subject:date:date:message-id:message-id:
        to:to:cc:mime-version:mime-version:content-type:content-type;
        bh=XnccVXYXvM181qtRCDudUL29PqqLudpTne0w+bq49bg=;
        b=TCezQL4pozYSyJGDdaFoSXzShaFHXJTGViWCXIIB8/Gs5cBrq1GHdlA/uo0T10QZlwmG36
        o3OH+jDzxLMsPo3sNJ7wVA5H4wq1UavMZUaz/CCyHqJqAh6DISowEjG7ql0BlnWgkW5k3I
        D686MMYasd7kzSmKS6hA+MMWvjx149U=
    To: 746515005@qq.com
    Subject: Test Email
    MIME-Version: 1.0
    Content-type: text/html; charset=UTF-8
    From: <www@furry.vin>
    Message-Id: <20220424132214.AE931141EE6@furry.vin>
    Date: Sun, 24 Apr 2022 21:22:14 +0800 (CST)


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
        <span>发送时间：2022-04-24 21:22:14</span>
    </div>

  [1]: https://s.cdnv1.hanwuss.com/static/upload/wolf4096/20220424/202204241324331375.png
