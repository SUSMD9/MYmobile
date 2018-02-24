<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
			
	ul {
  width: 100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black; /* navigation bar bg color*/
    border-bottom:1px solid #e7e7e7;

}

li {
    float:right; 

   padding:2px 2px;/* leaves space between two links in navigation bar */
}

li a {
    display: block;
    color: #ffffff;
    text-align: center;
    font-size: 15px;
    padding: 15px 20px;
    text-decoration: none;

}

#li1 {
 border: 1px solid white; /* Orange color for ADD on navigation bar*/
}

li a:hover { /* Change the link color  on hover */
    color: #000000;
    background-color: #eae66b;

}
	</style>
</head>
<body style="padding:0px;margin:0px;">
<div style="width:100%;height:54px;background-color: black;">
  <ul style="margin: 0;padding: 0;list-style-type: none;">
        <li id="li1"><a href="">Signup</a></li>
    <li><a href="login.php">Login</a></li>
    
    <li><a href="about.php">About us</a></li>
    <li ><a href="login.php">Search Mobiles</a></li>
    <li  style="margin-right: 64%;"><a href="index.php">Home</a></li>
  </ul>

</div>

<div style="width:41%;height:500px;background-color:#ededea;margin-left: 401px;margin-top: 61px;border:1px solid #a5a59f;border-top: 6px solid #eae66b;">
	<font style="color: #616161;font-size:31px;margin-left: 21px">Sign Up</font>
	<br>
	<hr style="width: 100%;border:1px solid #d8d8d4">
	<form method="post" action="#">
	<input required style="width:301px;height:35px;margin-left: 115px;margin-top: 41px;border-radius: 4px " type="text" name="id" placeholder=" Enter User Id"><br>
	<input required style="width:301px;height:35px;margin-left: 115px;margin-top: 41px;border-radius: 4px " style="width:201px;height:25px " type="Password" name="ps" placeholder=" Enter New Password"><br>
	<input required style="width:301px;height:35px;margin-left: 115px;margin-top: 41px;border-radius: 4px " style="width:201px;height:25px " type="text" name="email" placeholder=" Enter Email"><br>

	<button style="cursor:pointer;width:201px;height:25px;width:301px;height:35px;margin-left: 115px;margin-top: 41px;border-radius: 4px ;background-color: #f3f780;color:#616161" type="submit" name="signup">Sign Up</button>
    </form>
</div>


</body>
</html>


<?php

if (isset($_POST['signup'])) {
	

include('dbcon.php');

$id=$_POST['id'];
$ps=$_POST['ps'];
$email=$_POST['email'];
$rating=$_POST['rating'];

$db = mysqli_connect("localhost","root","","mobile_shoping"); //keep your db name


$qry="INSERT INTO `user`( `userid`, `password`, `email`) VALUES ('$id','$ps','$email')";

$run=mysqli_query($db,$qry);

if($run==true)
{
	?>
        <script type="text/javascript">
        	alert('Welcome \n\n Sign Up Successfull !! ');
        </script>
	<?php
}
else
{
	?>
        <script type="text/javascript">
        	alert('Sign Up Failed !! \n\nPlaese Try Again');
        </script>
	<?php

}
}


?>