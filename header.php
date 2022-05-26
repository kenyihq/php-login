<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($page_title)) {
            echo $page_title;
        } else {
            echo "Rumbos y Mundos";
        }
        ?>
    </title>
</head>
<body>
    <h1>HELLO WORLD</h1>