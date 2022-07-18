<?php
    $file = "storeData.txt";
    $name = $_GET["name"];
    $request = $_GET["request"];
    file_put_contents($file, $name, FILE_APPEND | FILE_USE_INCLUDE_PATH);
    file_put_contents($file, "\n", FILE_APPEND | FILE_USE_INCLUDE_PATH);  
    file_put_contents($file, $request, FILE_APPEND | FILE_USE_INCLUDE_PATH);
?>

<html>
    <h1 style="color:red;font-weight:bold">FORM SUBMITTED SUCCESSFULLY!</h1>
    <b style="font-size:18px"><?php 
    echo "Identity: ".$name.PHP_EOL."<br>";
    echo "Request: ".$request;
    ?></b>
    <br>
    <code>You can close this tab for now, ehe...</code>
</html>
