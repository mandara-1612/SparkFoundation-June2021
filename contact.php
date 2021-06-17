<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
   background-color: AliceBlue;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
h1{
	color: blue;
}
h2{
	color: red;
	
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  
  padding: 20px;
}
</style>
</head>
<body>

<div class ="nav-links">
              
           <ul>
		       
              <li><a href="home.php">HOME</a></li>		   
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li class="active"><a href="contact.php">CONTACT US</a></li>	
			  <li><a href="index.php">LOG OUT</a></li>	
              		  
            </ul>
 </div>
 
<h1>WE ARE HERE FOR YOU!!</h1>
<br>
<h2>NEED HELP?</h2>
<br>
<div>
<img class="id"  src="Images/contact.jpg" style= "width:100%" >
    </div>
	<br>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">NAME</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">EMAIL_ID</label>
    <input type="text" id="email_id" name="email_id" placeholder="Your email_id">

    

    <label for="subject">QUERY</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


</body>