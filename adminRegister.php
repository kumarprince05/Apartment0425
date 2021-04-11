<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartments_db";
$Uname=$_POST["UserName"];
$mail=$_POST["Email"];
$Pass=$_POST["password"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO member ( UserName, Email, Password, Gender, Phone)
VALUES ('$Uname','$mail','$Pass', '$gender', '$phone')";
if ($conn->query($sql) === TRUE) {
?>
<script type="text/javascript">
alert("Registraion Sucessfull");
window.location.href = "index.php";
</script>
<?php
} else {
    echo"0";
}
$conn->close();
?>