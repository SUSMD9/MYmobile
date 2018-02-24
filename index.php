<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
.mySlides {display:none;}


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

.show-case
{
    margin-left:0px;
    float:left;
}


.show-case li
{
    width:25%;
    float:left;
    display:inline-block;
    margin-left:0px;
    overflow:hidden;
    list-style:none;
    padding:20px;
}


.mobilephoto
{
    width:100%;
}


.mobilephoto img
{
    width:250px;;
    height:200px;
    transition: all 0.7s;
   
    padding:10px;
}


.mobilephoto img:hover
{
    transform: scale(1.05);
    box-shadow:6px 6px 6px 6px #888888;
}



.mobile
{
    margin-left:150px;
}
h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 2px solid #e3e3e3; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

h2 span { 
    background:#fff; 
    padding:0 10px; 
}

#item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
#item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  border-bottom: 2px solid grey;
}
</style>

</head>
<body style="margin:0px;">
<div style="width:100%;height:54px;background-color: black;">
	<ul style="margin: 0;padding: 0;list-style-type: none;">
        <li><a href="signup.php">Signup</a></li>
		<li><a href="login.php">Login</a></li>
		
		<li><a href="about.php">About us</a></li>
		<li><a href="login.php">Search Mobiles</a></li>
		<li id="li1" style="margin-right: 64%;"><a href="index.php">Home</a></li>
	</ul>

</div>


<div class="w3-content w3-section" style="max-width:100%">
   <img class="mySlides" src="images/s7.jpg" style="width:100%">
  <img class="mySlides" src="images/s9.jpg" style="width:100%">
  <img class="mySlides" src="images/s3.jpg" style="width:100%">
   <img class="mySlides" src="images/s4.jpg" style="width:100%">
     <img class="mySlides" src="images/s7.jpg" style="width:100%">
    <img class="mySlides" src="images/s1.jpg" style="width:100%">
    <img class="mySlides" src="images/s6.jpg" style="width:100%">
    <img class="mySlides" src="images/s8.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<br><br><br><br>

<div style="width: 100%;height: 1001px;background-color: white">
 <center>
 	
<h2 style="color: #616161"><span>MOST POPULARS</span></h2>
</center>
<br><br>
 <div class="mobile" >
            <ul class="show-case" style="background-color: #ffffff">
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/HtcDesire820s.png">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/HtcOneM8.jpg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/LenovoK6.jpg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/Mi5.jpg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/MiA1.png">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/LenovoK8Note.jpg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/LenovoZ2Plus.jpeg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/MiMaxPrime.jpg">
                    </figure>    
                </li>
                <li id="il">
                    <figure class="mobilephoto">
                        <img src="images/HtcDesire820s.png">
                    </figure>    
                </li>
               
		
            </ul>
        </div>
 </div>
	<br><br><br><br>
	<center>
 	
<h2 style="color: #616161"><span>OUR TEAM</span></h2>
</center>
<br><br>
<div id="item" style="width: 100%;height: 551px;background-color: #333333">

<img  src="images/heem.jpeg" style="width: 221px;height: 221px;margin: 71px 0px 81px;margin-left:81px;border-radius: 101px">
<img  src="images/mehul.jpg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
<img  src="images/akhil.jpeg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
<img  src="images/ratnesh.jpg" style="width: 221px;height: 221px;margin: 81px 0px 81px;margin-left:91px;border-radius: 101px">
 <br>
<table>
	<tr >
		<td style="padding-right: 171px;padding-left: 131px;font-size: 19px;color: #ffffff">HEEM JOSHI</td>
        <td style="padding-right: 121px;font-size: 19px;color: #ffffff">MEHUL.S.DHOLIYA</td>
        <td style="padding-right: 111px;font-size: 19px;color: #ffffff">AKHIL BALAKRISHANAN</td>
        <td style="font-size: 19px;color: #ffffff">RATNESH DUBEY</td>
	</tr>
	
		<tr style="padding: 5px" >
		<td style="padding-right: 201px;padding-left: 131px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:XX</td>
        <td style="padding-right: 141px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:10</td>
        <td style="padding-right: 111px;font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:XX</td>
        <td style="font-size: 14px;color: #ffffff;padding-top: 31px">Roll No:XX</td>
	</tr>

	</tr>
	
		<tr style="padding: 5px" >
		<td style="padding-right: 201px;padding-left: 131px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="padding-right: 141px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="padding-right: 111px;font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
        <td style="font-size: 14px;color: #ffffff;padding-top: 31px">TE-CMPN</td>
	</tr>
</table>

</div>

<br><br><br><br><br>
<div style="width: 100%;height: 41px;background-color: #333333">
<br>
	<center><div style="color: #ffffff;" >&copy; 2017  - All Rights Reserved. [ Mehul.S.Dholiya ]</div>

</div>

</body>
</html>
