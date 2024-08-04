<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>This my first php project</div>
    <?php
    echo " hello world"; ?>
    <?php
    $variable= 34;
    $var2=10;
    echo $variable*$var2;
    $new=$var2;
    echo "<br>";
    echo $new; 
    echo "<br>";

    echo "The value of 1==5 is ";
    echo var_dump(1==5) ;

    echo var_dump(1!=5) ;
    $var= "this is string";
    echo $var;
    echo var_dump($var);

?>
</body>
</html>
