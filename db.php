<html>
<body>
    <div class="top">
    <title>RESULT</title>
        <link rel="stylesheet" href="cards.css">
        <nav>
    <link rel="stylesheet" href="style1.css">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
<ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Feedback</a></li>
</ul>
</nav>
<?php
$loc=$_POST['q'];
$con=mysqli_connect("localhost","root","","dfab");
if(mysqli_connect_errno())
{
    echo "Failed to connect";
    exit();

}
$sql="SELECT name,address,location FROM location where location='$loc'&&status='full'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
while ($row =mysqli_fetch_array($result))
{
    ?>
    
        <div class="cards">
        <h3 class="h1">FULLY ACCESSIBLE</h3>
        <div class="names">
    <h4><?php echo $row[0] ?> </h4>
</div>
<div class="Address">
<h4><?php echo $row[1] ?> </h4>
</div>
<div class="location">
<h4><?php echo $row[2] ?> </h4>
<a href="https://www.google.com/maps/search/<?php echo $row[0] ?>+<?php echo $row[2] ?>">
<button class="img">DIRECTION</button>
</a>
</div>
</div>
    <?php
}
?>
<br>
<?php
$loc=$_POST['q'];
$con=mysqli_connect("localhost","root","","dfab");
if(mysqli_connect_errno())
{
    echo "Failed to connect";
    exit();

}
$sql="SELECT name,address,location FROM location where location='$loc'&&status='partial'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
while ($row =mysqli_fetch_array($result))
{
    ?>
    
        <div class="cards1">
        <h3 class="h1">PARTIALLY ACCESSIBLE</h3>
        <div class="names">
    <h4><?php echo $row[0] ?> </h4>
</div>
<div class="Address">
<h4><?php echo $row[1] ?> </h4>
</div>
<div class="location">
<h4><?php echo $row[2] ?> </h4>
<a href="https://www.google.com/maps/search/<?php echo $row[0] ?>+<?php echo $row[2] ?>">
<button class="img">DIRECTION</button>
</a>
</div>
</div>
    <?php
}
?>
<br>
<?php
$loc=$_POST['q'];
$con=mysqli_connect("localhost","root","","dfab");
if(mysqli_connect_errno())
{
    echo "Failed to connect";
    exit();

}
$sql="SELECT name,address,location FROM location where location='$loc'&&status='nil'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
while ($row =mysqli_fetch_array($result))
{
    ?>
    
        <div class="cards2">
        <h3 class="h1">NOT ACCESSIBLE</h3>
        <div class="names">
    <h4><?php echo $row[0] ?> </h4>
</div>
<div class="Address">
<h4><?php echo $row[1] ?> </h4>
</div>
<div class="location">
<h4><?php echo $row[2] ?> </h4>
<a href="https://www.google.com/maps/search/<?php echo $row[0] ?>+<?php echo $row[2] ?>">
<button class="img">DIRECTION</button>
</a>
</div>
</div>

    <?php
}
?>

</body>
</html>
