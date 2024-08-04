
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Opening</title>
    <link rel="icon" href="sbi.ico?v2">
    <link rel="stylesheet" href="/Lab/css/STYLES.css">
</head>
<body>
    <div class="bank-titile">
        <img class="logo" src="sbi-logo.png" alt="sbi-logo">
        <h2 class="sbi">SBI</h2>
        <h1>भारतीय स्टेट बैंक</h1>
        <h3 class="moto">( हर भारतीय का बैंक )</h3>
    </div>
    <div class="buttons">
    <a href="login.html"><h3 class="btn">&nbsp Dashboard &nbsp</h3></a>
        <a href="Account_opening.html"><h3 class="btn"> &nbsp Open A/C &nbsp</h3></a>
        <a href="https://example.com"><h3 class="btn"> &nbsp Deposit &nbsp</h3></a>
        <a href="https://example.com"><h3 class="btn"> &nbsp Loans &nbsp</h3></a>
        

    </div>
    <h2 class="AC">Dashboard</h2>

<?php

$link=mysqli_connect("localhost","root","","21BCS188");

echo "<table class='main-table' cellpadding='100rem' ><tr class='t0'><td class='t0'>
<div class='borrow'>

<table class='t1' cellpadding='5rem' >


    <h2 class='br'>List of Borrower</h2>
<tr>
<th>Name</th>
<th>A/C No.</th>
<th>Balance</th>
<th >Details</th>
</tr>";
// $insert="INSERT INTO CUSTOMERSS(customer_name,customer_street,customer_city) VALUES('HpbfdrFRffdfrt6ch','safana','patna')";
$sql="SELECT customer_name,depositor.account_number,balance FROM depositor INNER JOIN account ON depositor.account_number=account.account_number";
// $sql="SELECT customer_name, depositor.account_no, balance from depositor inner join account on depositor.account_no= account.account_no" ;

$res=mysqli_query($link, $sql);
while($result=mysqli_fetch_assoc($res)) {
echo '<tr><td>'. $result['customer_name'] .'</td><td>'. $result['account_number'] .'</td><td>' . $result['balance'] .'</td><td><a href="Lab/AccountOpening.php?uid=' . $result['customer_name'] .' ">View Details</a></td></tr></div>';
}
$res2=mysqli_query($link, $sql);
echo"<div class='deposit'>
<table class='t2' cellpadding='5rem'>
        <h2 class='dr' >List of depositor</h2>
  <tr>
    <th>Name</th>
    <th>A/C No.</th>
    <th>Balance</th>
    <th>Details</th>
  </tr>";
  while($result2=mysqli_fetch_assoc($res2)) {
    echo '<tr><td>'. $result2['customer_name'] .'</td><td>'. $result2['account_number'] .'</td><td>' . $result2['balance'] .'</td><td><a href="Lab/AccountOpening.php?uid=' . $result2['customer_name'] .' ">View Details</a></td></tr></div>';
    }



?>

</body></html>
