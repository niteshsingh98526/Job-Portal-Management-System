<html> <?php
$fpointer=fopen("name.txt","r") or exit("Unable to open read file!");
echo "<table align= \"center\" border=10 >"; echo "<tr> <td> Name </td>
<td> Surname </td> <td> Branch </td> <td> Year </td></tr>";
while(!feof($fpointer)) {
$temp=fgets($fpointer); $temp=explode(",",$temp);
if($temp[0]!='')
{ echo "<tr> <td>".$temp[0]. "</td>
<td>".$temp[1]. "</td> <td>".$temp[2]. "</td> <td>".$temp[3]. "</td></tr>";}
}
echo "</table>"; ?>
</html>