<html>
<body>
<h1>Your data has been saved in local directory</h1>
</body>
</html>
<?php              
if(isset($_POST['fname']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];


$fp = fopen('save.txt', 'a');
fwrite($fp, "First Name-- ");
fwrite($fp, $fname );
fwrite($fp, "\n" );
fwrite($fp, "Last Name-- ");
fwrite($fp, $lname );
fwrite($fp, "\n" );
fwrite($fp, "Email-- ");
fwrite($fp, $email );
fwrite($fp, "\n" );
fwrite($fp, "Mobile-- ");
fwrite($fp, $mobile );
fwrite($fp, "\n" );
fwrite($fp, "Password-- ");
fwrite($fp, $password );
fwrite($fp, "\n" );
fwrite($fp, "RePassword-- ");
fwrite($fp, $repassword );
fwrite($fp, "\n" );


// $fp = fopen('save.txt', 'a');
// fwrite($fp, "Name-- ");
// fwrite($fp, $name );
// fwrite($fp, "\n" );
// fwrite($fp, "Email-- ");
// fwrite($fp, $email );
// fwrite($fp, "\n" );
// fwrite($fp, "Mobile-- ");
// fwrite($fp, $mobile );
// fwrite($fp, "\n" );
// fwrite($fp, "Pin Code-- ");
// fwrite($fp, $pincode );
// fwrite($fp, "\n" );
// fwrite($fp, "Address-- ");
// fwrite($fp, $address );
// fwrite($fp, "\n" );
// fwrite($fp, "\n" );


fclose($fp);
}
?>