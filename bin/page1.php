<?php
echo '<!DOCTYPE html>';
echo '<html lang="fa" dir="rtl">';

echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>فایل PHP یک</title>';
echo '<link rel="stylesheet" href="styles.css">';
echo '<style>
        
        body {
            font-family: "Tahoma", sans-serif;
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
    </style>';
echo '</head>';

echo '<body>';
echo '<div class="content">';
echo '<h1>hello world</h1>';
echo '<a href="/" class="back-link">بازگشت به تمرین یک</a>';
echo '</div>';
echo '</body>';

echo '</html>';
?>
