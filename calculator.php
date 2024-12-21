<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithematic Operations</title>
</head>
<body>
    <form action="" method="post">
        <label>Value1:</label>
        <input type="text" id="value1" name="value1"><br><br>
        <label>Value2:</label>
        <input type="text" id="value2" name="value2"><br><br>

        <button type="submit" name="add" >Addition</button>
        <button type="submit" name="sub" >Subtraction</button>
        <button type="submit" name="mul" >multiplication</button>
        <button type="submit" name="div" >Division</button><br>
    </form>
</body>
</html>
<?php
if(isset($_POST['add']))
{
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    $sum=$a+$b;
    echo'Adddition is'.$sum;
}
if(isset($_POST['sub']))
{
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    $sub=$a-$b;
    echo'Subtraction is'.$sub;
}
if(isset($_POST['mul']))
{
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    $mul=$a*$b;
    echo'Multiply is'.$mul;
}
if(isset($_POST['div']))
{
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    $div=$a/$b;
    echo'Adddition is'.$div;
}
?>