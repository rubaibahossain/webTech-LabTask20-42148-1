<?php include ("../View/Header.php"); ?>

<?php
session_start();


if(!isset($_SESSION["uname"]))
{
    header("location:../View/login.php");
}
?>

<html>
<body>
   <H1> Hi, <?php echo $_SESSION["uname"]; ?> <br> </H1>
   <H2> Click here to logout <a href="../Control/logout.php"> Logout </a> </H2> <br> <br> <br>
</body>
</html>

<?php
include ("../View/Footer.php");
?>

