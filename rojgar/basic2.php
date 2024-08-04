<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}    
.container{
    max-width:80%;
    background-color: lightpink;
    margin:auto;
    padding:25px;
}
</style>
<body>
    <div class="container">
        This is a container
        <?php
        $age=35;
        if($age>=18)
        {
            echo "<br>You can attend the party";
        }
        else
        {
            echo "you can not go";
        }
        $lang=array("a","b","c");
        echo "<br>";
        echo count($lang);
        echo "<br>";
        $a=0;
        while($a < count($lang))
        {
            echo "value of language is :";
            echo $lang[$a];
            echo "<br>";
            $a++;
        }
            
        ?>
        </div>


</body>
</html>