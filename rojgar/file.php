<html>
<head> <title> FILE EXAMPLE </title> </head>
<body> <?php
$file1=fopen("name.txt", "r") or exit("Unable to open read file!");
$file2=fopen("name_out.txt", "w+") or exit("Unable to open write file!");
//Output a line of the file until the end is reached
while(!feof($file1)) {
$line=fgets($file1);
fputs($file2,$line); }
fclose($file2); fclose($file1);
echo "<center>File written successfully. Now opening hello_out.txt for reading:</center><br/>";
$file2=fopen("hello.txt","r") or exit("Unable to open file!"); while (!feof($file2))
{
echo "<br>"; }
fclose($file2);
?> </body>
</head>
</html>