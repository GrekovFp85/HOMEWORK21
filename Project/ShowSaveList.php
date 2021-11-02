<?php

$st = $_GET['filename'];
if (strlen($st) > 0) {
    $arrayStudents = file_get_contents($st);
}
$f = explode("\n", $arrayStudents);

$allUsers = [];

foreach ($f as $v){
    if(strlen($v) > 0){
        $per = explode(";", $v);
        $allUsers[] = $per;
    }
}

echo '<br/>';

echo '<table border="2"  style="background-color:bisque; text-align: center; font-size: larger; padding: 3px;">';
for ($i = 0; $i < count($allUsers); $i++){
    echo '<tr>';
    if (strlen($allUsers[$i][0]) != 0) {
        echo '<td>' . $allUsers[$i][0] . '</td>';
    }else {
        echo '<td style="color: red">' . 'N\A' . '</td>';}
    if (strlen($allUsers[$i][1]) > 0) {
        echo '<td>' . $allUsers[$i][1] . '</td>';
    }else {
        echo '<td style="color: red">' . 'N\A' . '</td>';}
    if (strlen($allUsers[$i][2]) > 0) {
        echo '<td>' . $allUsers[$i][2] . '</td>';
    }else {
        echo '<td style="color: red">' . 'N\A' . '</td>';}
    if (strlen($allUsers[$i][3]) > 0) {
        echo '<td>' . $allUsers[$i][3] . '</td>';
    }else {
        echo '<td style="color: red">' . 'N\A' . '</td>';}
    echo '</tr>';
}
echo '</table>';

echo '<br/><br/> <a href="index.html"><strong style="color: darkred">BACK TO SAVE LIST</strong></a>';