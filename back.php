<?php

$height = $_REQUEST['height'];

$weight = $_REQUEST['weight'];

$total = $weight / ($height*$height);
$nameAfter = $_REQUEST['name'];

$name = explode(" ", $nameAfter);


header('Location: '."index.php?name=".strtoupper($name[0]) ."&isResp=1&result=".$total);