<?php
    $msg ='hello world';
    echo $msg;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world from html</h1>
    <?php
    $author='afroj';
    ?>
    <h1>hello world from 
        <?php echo $author;?>
    </h1>

    <?php
    //string basic
    $str="helooo world from mist ";
    echo $str;
    echo strlen($str).'<br/>';
    echo str_word_count($str).'<br/>';
    //arrays
    $students = [
    'afroj' => 22,
    'aziz' => 23,
    'tamim' => 24 
    ];
    foreach( $students as $name =>$roll)
    {
        echo "name :".$name .'  ,  '.'roll: '.$roll. '<br/>';
    }
    ?>

</body>
</html>