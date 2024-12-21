<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithematic Operations</title>
</head>
<body>
    <form action=" " method="get">

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
if(isset($_GET['add']))
{
    $a=$_GET['value1'];
    $b=$_GET['value2'];
    $sum=$a+$b;
    echo 'Adddition is' .$sum;
}
if(isset($_GET['sub']))
{
    $a=$_GET['value1'];
    $b=$_GET['value2'];
    $sub=$a-$b;
    echo 'Subtraction is' .$sub;
}
if(isset($_GET['mul']))
{
    $a=$_GET['value1'];
    $b=$_GET['value2'];
    $mul=$a*$b;
    echo 'Multiply is' .$mul;
}
if(isset($_GET['div']))
{
    $a=$_GET['value1'];
    $b=$_GET['value2'];
    $div=$a/$b;
    echo 'Adddition is' .$div;
}
?>