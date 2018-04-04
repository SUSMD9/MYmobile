<?php


session_start();

if ($_SESSION['userid']) 
{
echo "";
}
else{
 echo "string";
}




?>


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


.item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
 
}
h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 2px solid #e3e3e3; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   color:#616161;
} 

h2 span { 
     background-color: #ffffff;
    padding:0 10px; 
}
</style>
</style>

</head>
<body  style="padding:0px;margin:0px;">


<div style="width:100%;height:54px;background-color: black;">
  <ul style="margin: 0;padding: 0;list-style-type: none;">
        <li><a href="signout.php">Sign Out</a></li>
    
    
    <li id="li1"><a href="">Search Mobiles</a></li>
    
  </ul>

</div>

<div style="width:100%;height:61px;background: #eae66b;">
<form action="#" method="post" >
	
	<input style="width:201px;height:24px;border-radius: 11px;margin-top: 15px;margin-left: 15px;border: 2px solid #5F5454 ;" type="text" name="brand" placeholder="  Search by Brand">
	<select style="width:201px;height:31px;border-radius: 11px;border: 2px solid #5F5454 ;margin-top: 15px;margin-left: 45px;"  name="price">
  <option value="null"> Search by Price</option>
  <option value="a">5,000 to 10,000</option>
  <option value="b">10,000 to 15,000</option>
  <option value="c">above 15,0000</option>
</select>

<select style="width:201px;height:31px;border-radius: 11px;margin-top: 15px;margin-left: 45px;border: 2px solid #5F5454 ;" name="rating">
  <option value="null"> Search by Rating</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
 
</select>

	<button style="float:right;margin-top: 15px;height: 31px;width: 121px;border-radius: 0px;margin-right:15px;border:2px solid #1b3051; ;background: #ffffff;cursor: pointer;" type="submit" name="search">Search</button>

</form>
</div>
</body>
</html>



<?php 


if (isset($_POST['search'])) {
	

include('dbcon.php');

$search=$_POST['search'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$rating=$_POST['rating'];

$db = mysqli_connect("localhost","root","","mobile_shoping"); //database connection    
                                                              // mobile_shoping  = database name


$sql = "SELECT * FROM `mobiles` WHERE (`brand`='$brand')";

if($price!=null)
{
    
    if($price=='a')
	$sql = "SELECT * FROM `mobiles` WHERE (`price`>=5000 and `price` <=10000)";

    if($price=='b')
	$sql = "SELECT * FROM `mobiles` WHERE (`price`>=10000 and `price` <=15000)";

    if($price=='c')
	$sql = "SELECT * FROM `mobiles` WHERE (`price`>15000)";
}

if($rating!=null)
{
    
    if($rating=='1')
	$sql = "SELECT * FROM `mobiles` WHERE (`rating`>=1)";

    if($rating=='2')
	$sql = "SELECT * FROM `mobiles` WHERE (`rating`>=2)";

    if($rating=='3')
	$sql = "SELECT * FROM `mobiles` WHERE (`rating`>=3)";

    
    if($rating=='4')
	$sql = "SELECT * FROM `mobiles` WHERE (`rating`>=4)";


    if($rating=='5')
	$sql = "SELECT * FROM `mobiles` WHERE (`rating`>=5)";    

}


$sth = $db->query($sql);
$st1=$db->query($sql);


$row=mysqli_num_rows($st1);


?>
<br><br><br><br>


	<h2><span><?php echo "Total Items Found : ".$row; ?></span></h2>


<br><br><br><br>


<?php

while($result=mysqli_fetch_array($sth))
{

?>



<div style="width: 79%;height:451px;margin-left: 151px;background:#fafafa;margin-right: 151px;border: 2px solid #eeeeee;border: 1px solid #9ebded;">
<div class="item" style="width:351px;height: 351px;border: 2px solid #f3f3f3;float: left;margin-left: 41px;margin-top: 45px;">
<table >
	
	<tr>
		
		<td style="border: 2px solid #eeeeee"><?php echo '<img height="351" width=351"" src="data:image/jpeg;base64,'.base64_encode( $result['images'] ).'"/>'; ?></td>
		
	</tr>
</table>
</div>
<div  style="width:551px;height: 351px;border: 2px solid #eeeeee;float: left;margin-left:51px;border-left: 5px solid #eeeeee;margin-top: 45px;">

<table>
	<tr>
		<td style="font-size:29px;margin-left: 11px;color:#1b3051"><b><?php echo " {$result[1]} $result[2] <br> "; ?></b></td>   
		
    </tr>
    
    <tr >
        <td style="font-size:24px;color:#26426d;"><br><?php echo " Price : Rs.{$result[4]}  "; ?> </td>
    </tr>
    <tr>
        <td style="font-size:24px; margin-left: 11px;color:#26426d"><br>Rating :&nbsp<?php echo " {$result[5]} "; ?><img style="width: 21px;height: 21px" src="star.png"> </td>
    </tr>
    <tr>
        <td style="font-size:21px; margin-left: 11px;color:#26426d"><br>Specifications: <br><br><?php echo " {$result[6]} "; ?> </td>
    </tr>

</table>
</div>
</div>
<br><br>
<?php
}
}
 ?>