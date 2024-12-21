<html>
    <head>
        <title>Sticky Form</title>
    </head>
<body>
    <?php
    $fn=$_GET["fname"];
    $ln=$_GET["lname"];
    ?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get"><br><br>

 First Name: <input type="text" name="fname" value="<?php echo $fn; ?>"/><br>
 Last Name: <input type="text" name="lname" value="<?php echo $ln; ?>"/>

<br> <input type="submit">

</form>
</body>
</html>

<?php


if (!is_null($fn) && !is_null($ln))
{
    echo $fn." ".$ln;
   
}
?>