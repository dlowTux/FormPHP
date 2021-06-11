<?php
$fullname=$_POST["txtname"];
$email=$_POST['txtemail'];
$phone=$_POST['txtnumber'];
$birthday=$_POST['txtbirthday'];
$facebook=$_POST['txtscand'];
$gener=$_POST['txtgender'];
$vaccine=$_POST['txtvaccine'];
$date_vaccine=$_POST['txtdatevaccine'];
$color=$_POST['txtcard'];
$id=$_POST['txtscan'];
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Vacuna covid</title>
    <link href="main.css" rel="stylesheet" />
</head>

<body>
<div class="tarjeta2">
<h1> Your registration  has been completed satisfactorily</h1>
  Hello <span class="bold">'.$fullname.'</span>, your registration for the vaccination against covid 2021-2022
 has been completed satisfactorily, your email address is <span class="bold"> '.$email. '</span>
 and your phone number is <span class="bold"> '.$phone.'</span>. We also register your facebook account <span class="bold">'
.$facebook.'</span>.
your gender <span class="bold">'.$gener.'</span>, and the color of your card 
<span class="bold">'.$color.'</span>. The vaccine you receive will be 
<span class="bold">'.$vaccine.'</span> on the date <span class="bold"
>'.$date_vaccine.'</span> <br>  your id '.$id.'
</div>
</body>

</html>
';
?>
