<?php


session_start();
if (isset($_SESSION['userid'])) {
	# code...
header('location:search_more.php');


}

?>

<?php

$db = mysqli_connect("localhost","root","","mobile_shoping");
if (isset($_POST['login'])) {
	# code...
 
	 
	$username=$_POST['un'];
    $password=$_POST['ps'];

    $qry="SELECT * FROM `user` WHERE `userid`='$username' and `password` = '$password' ";

    $run=mysqli_query($db,$qry);

    $row=mysqli_num_rows($run);


    if($row<1)
   {
   	?>
       
     <script type="text/javascript">
     	
     alert('! User name or Password not matched !!\n\nTry Again!!');
     window.open('login.php');

     </script>

   	<?php
   }



   else
 {
 	$data=mysqli_fetch_assoc($run);
 	$id=$data['id'];
 	
 	$_SESSION['userid']=$id;


 	header('location:search_more.php');
   

 }











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





/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
      text-decoration: none;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


.container {
    padding: 26px;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #ededea;
    border-top:0px solid white;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #a5a59f;
    border-top:1px solid white;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}







</style>
</head>
<body  style="padding:0px;margin:0px;">

<div style="width:100%;height:54px;background-color: black;">
  <ul style="margin: 0;padding: 0;list-style-type: none;">
        <li><a href="signup.php">Signup</a></li>
    <li id="li1"><a href="login.php">Login</a></li>
    
    <li><a href="about.php">About us</a></li>
    <li ><a href="login.php">Search Mobiles</a></li>
    <li  style="margin-right: 64%;"><a href="index.php">Home</a></li>
  </ul>

</div>




	<form class="modal-content animate" action="" method="post">
    

    <div class="container" style="border-top:5px solid #eae66b">
      <label style="color: #616161"><b>Username</b></label>
      <input style="border-radius: 6px;color:#616161" type="text" placeholder="Enter Username" name="un" required>
      <br><br>
      <label style="color: #616161"><b>Password</b></label>
      <input style="border-radius: 6px;color: #616161" type="password" placeholder="Enter Password" name="ps" required>
       <br><br> 
      <button style="border-radius: 6px;background-color: #f3f780;color:#616161;border-color:1px solid #616161" name="login" type="submit">Login</button><br>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button  type="button"  class="cancelbtn"><a style="text-decoration: none;color:white" href="index.php">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>