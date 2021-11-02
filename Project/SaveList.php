<?php

foreach (glob('*.txt') as $v) {
    echo '<a href="http://localhost:9090/SaveList.php?filename=' . $v . '">' . $v . ' </a><br/>';
}

include "ShowSaveList.php";