<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style6.css">
    
</head>
<body>

<?php



function create_img_tag($url, $alt, $height, $width) {
    $img_tag = "<img src=\"$url\" alt=\"$alt\" height=\"$height\" width=\"$width\" />";
    return $img_tag;
}

function rgb_to_hex($red, $green, $blue) {
    $hex_red = str_pad(dechex($red), 2, '0', STR_PAD_LEFT);
    $hex_green = str_pad(dechex($green), 2, '0', STR_PAD_LEFT);
    $hex_blue = str_pad(dechex($blue), 2, '0', STR_PAD_LEFT);

    $hex_color = "#" . $hex_red . $hex_green . $hex_blue;

    return $hex_color;
}


?>

<div class="container">


    <div class="exercise-box">
        <div class="question">۱. تابع تولید تگ `<img>`</div>

        <pre>
function create_img_tag($url, $alt, $height, $width) {
    $img_tag = "&lt;img src=\"$url\" alt=\"$alt\" height=\"$height\" width=\"$width\" /&gt;";
    return $img_tag;
}
        </pre>
        
        <h3>  خروجی:</h3>
        <div class="answer">
            <?php
            $image_html_output = create_img_tag("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOC_Ddu_9XnkCSYxkUg9Q5N0UBCf1VzR6vzw&s", "تصویر ", 200, 200);
            
            echo "خروجی تگ: **" . htmlspecialchars($image_html_output) . "**";
            echo "<br><br>";
            echo "نمایش تصویر : ";
            echo $image_html_output;
            ?>
        </div>
    </div>

    <div class="exercise-box">
        <div class="question">۲. تابع تبدیل RGB به HEX</div>

        <h3></h3>
        <pre>
function rgb_to_hex($red, $green, $blue) {
    $hex_red = str_pad(dechex($red), 2, '0', STR_PAD_LEFT);
    $hex_green = str_pad(dechex($green), 2, '0', STR_PAD_LEFT);
    $hex_blue = str_pad(dechex($blue), 2, '0', STR_PAD_LEFT);

    $hex_color = "#" . $hex_red . $hex_green . $hex_blue;

    return $hex_color;
}
        </pre>
        
        <h3>  خروجی:</h3>
        <div class="answer">
            <?php
           
            $r = 173;
            $g = 255;
            $b = 47;

           
            $hex_color_output = rgb_to_hex($r, $g, $b);
            
            echo "رنگ RGB: **($r, $g, $b)**";
            echo "<br>";
            echo "کد رنگ HEX: **" . $hex_color_output . "**";
            echo "<div style='width: 50px; height: 10px; background-color: $hex_color_output; border: 1px solid #333; display: inline-block; margin-right: 10px; margin-left: 10px;'></div>";
            ?>
        </div>
    </div>
</div>

</body>
</html>