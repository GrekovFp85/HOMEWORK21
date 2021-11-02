<?php

$newString = file_get_contents('user.txt');
$newArray = explode("\n", $newString);

$a = $_POST['name'];
$b = $_POST['surname'];
$c = $_POST['sex'];
$d = $_POST['city'];

$newArray[] = sprintf('%s;%s;%s;%s' . "\n", $a, $b, $c, $d);
file_put_contents('user.txt', implode("\n", $newArray));

if (array_key_exists('file', $_FILES) && $_FILES['file']['errors'] == 0) {

    if ($_FILES['file']['type'] == 'text/plain') {
        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }
    echo '<p style="color: green"><strong>OK!!!</strong></p>';

} else {
    echo '<p style="color: red"><strong>ERROR!!!</strong></p>';
}

echo '<br/><br/> <a href="index.html"><strong style="color: darkred">BACK TO SAVE LIST</strong></a>';
