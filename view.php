<?php
    $con = mysqli_connect("localhost", "root", "", "banking");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
</head>
  <style>
      table {
        border-collapse: separate;
        border-spacing: 0 15px;
		margin-left: auto;
		margin-right: auto;
      }
      th {
        background-color: #4287f5;
        color: white;
      }
      th,
      td {
        width: 150px;
        text-align: center;
        border: 1px solid black;
        padding: 5px;
	
      }
      h2 {
        color: #4287f5;
      }
	  .btn-default{
        background-color: #4287f5;
        border:2px solid #4287f5;
        color:white;
       font-weight: 300;
      }
	  .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
           border: 2px solid #4287f5;
           color:#800000;
          background-color: transparent;
          font-weight: 300;
            } 
    </style>
	<div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#800000;font-family: 'Courgette', cursive;font-size:2em;">
                Sparks Bank
            </div>
 <body style="background-color: AliceBlue">
 
            
   
        <div class ="nav-links">
           <ul>
              <li><a href="home.php">HOME</a></li>		   
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li><a href="contact.php">CONTACT US</a></li>	
              <li class="active"><a href="view.php">CUSTOMER DETAILS</a></li>
              					  
			
			  
			  
            </ul>
          </div>
       
   
	<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color:#800000;font-family: 'Courgette', cursive;font-size:2.2em;padding:0.1%;">Customers  Details</h3>
    <table id="myTable"  align=center >
          <tr align=center>
            <th>USER_ID</th>
            <th>NAME</th>
            <th>EMAIL_ID</th>
            <th>CURRENT_BALANCE</th>
            
			
          </tr>
		  
          <?php
        $sql = "SELECT * FROM `table_1`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
			
             echo "<form method ='post' action = 'viewcus.php'>";
            echo "<td>". $row['SL_NO'] . "</td>
            <td>".  $row['NAME'] . "</td>
            <td>". $row['EMAIL_ID'] . "</td>
            <td>". $row['CURRENT_BALANCE'] . "</td>";
           
           echo "</tr>";
		    echo "<td> <a href='viewcus.php'><button type='submit' class='btn btn-default' name='user'  id='users1' value= '{$row['NAME']}' >View Customer</button></a></td>";
            echo "</form>";
		    
        }
        ?>
          
    </table>
    
</div>
</body>
</html>