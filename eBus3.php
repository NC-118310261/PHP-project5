<!DOCTYPE html>
<html>
<body>
<!--     //Starting the session to get the session variable from last page-->
<?php  

session_Start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ", $fullNameValue.".";
echo "<br></br>";
echo "the total value is  ".$totalValue.".";
?>

</body>
</Head>