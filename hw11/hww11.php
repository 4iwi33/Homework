<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
}
$arr = scandir("file");
for ($i = 2; $i < count($arr); $i++) {
    switch (explode(".", $arr[$i])[1]) {
        case 'docx':
            $icon = 'docx.png';
            break;
        case 'pdf':
            $icon = 'pdf.png';
            break;
        default:
            $icon = 'sm.png';
            break;
    }
    echo "<a href='file\\$arr[$i]'><img src='$icon' width='16' height='16'>$arr[$i]</a><br>";
}