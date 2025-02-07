<?php
    include './helpers/helper.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?= form_start('./action/register.php', 'post') ?>

        <label for="">Name</label>
        <?= inputField('text', 'name'); ?>

        <label for="">Age</label>
        <?= inputField('number', 'age'); ?>

        <br/>
        <label for="">Gender</label>
        <?= inputField('radio', 'gender', 'male'); ?> Male 
        <?= inputField('radio', 'gender', 'female'); ?> Female 

        <br/>
        <button type="submit">Register</button>

        <?= form_end() ?>
     
    
</body>
</html>