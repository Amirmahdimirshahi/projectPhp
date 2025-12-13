<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>فایل PHP دو</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .content {
            width: 80%;
            margin: 50px auto;
            min-height: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

       
        h1 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        
        p {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

       
        .back-link {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-link:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

    
        .message {
            font-size: 16px;
            color: #7f8c8d;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="content">
       
        <h1>'hello world'</h1>

        
        <p>از اینجا می‌توانید به عقب برگردید.</p>

        
        <a href="/" class="back-link">بازگشت به تمرین یک</a>

       
        <div class="message">
            این صفحه به عنوان تمرین شماره دو برای مشاهده نحوه کار با لینک‌ها و فایل‌های PHP طراحی شده است.
        </div>
    </div>
</body>

</html>
