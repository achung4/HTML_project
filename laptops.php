<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Circuit Dev</title>
    <style type="text/css" media="screen">@import "project.css";</style>
  </head>

  <body>
	<div class="container">
	  <div class="header"><a href="index.html"><img src="images/red-logo.png" alt="Circuit Dev" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background: #C6D580; display:block;" /></a></div>
		
		<div class="sidebar1">
			<ul class="nav">
                <li><a href="index.html">Main Menu</a></li>
                <li><a href="laptops.php">Laptops</a></li>
                <li><a href="desktops.php">Desktops</a></li>
                <li><img src="images/side-filler.png"/></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="careers.html">Careers</a></li>
				<li><a href="about.html">About Us</a></li>

			</ul>
		</div>
		
	<div class="content">
		<h1>Laptops</h1>
		<form action="" method="POST">
        <table border="1">
        <tr>
        	<td><input type="radio" name="laptop" value="700"/><img src="images/laptop-page1/asus1.jpg" alt="asus1"/></td>
            <td>ASUS A53 Series A53E-XN1 Intel Pentium B940(2.00GHz) 15.6" 4GB Memory 320GB HDD Intel HD </td>
      	</tr>
        <tr>
        	<td><input type="radio" name="laptop" value="380"/><img src="images/laptop-page1/dell1.jpg" alt="dell1"/></td>
            <td>DELL Inspiron M5030 (iM5030-2792B3D) NoteBook AMD Athlon II Dual-Core P340(2.20GHz) 15.6" 3GB Memory DDR3 1333 320GB HDD 5400rpm DVD±R/RW ATI Radeon HD 4250</td>
        </tr>
        <tr>
        	<td><input type="radio" name="laptop" value="390"/><img src="images/laptop-page1/asus2.jpg" alt="asus2"/></td>
            <td>ASUS A53 Series A53E-XN1 Notebook Intel Pentium B940(2.00GHz) 15.6" 4GB Memory DDR3 1333 320GB HDD 5400rpm DVD Super Multi Intel HD Graphics</td>
        </tr>     
        <tr>
        	<td><input type="radio" name="laptop" value="390"/><img src="images/laptop-page1/hp1.jpg" alt="hp1"/></td>
            <td>HP 2000-240CA AMD Dual-Core Processor E-350(1.6GHz) 15.6" 4GB Memory 500GB HDD AMD Radeon HD 6310 Notebook</td>
        </tr>        
        </table>
		<table border="1">
        <tr>
        	<td colspan="5"><input type="submit" value="Previous" "disabled"/></td>
            <td colspan="5"><a href="laptops2.php"><input type="submit" value="Next" /></td>
      	</tr>  
        </table>
        <p><input type="submit" value="Add to cart" /></p>
        </form>
        <?php
		
		   if ( isset( $_POST["laptop"] ) ) {
			   	echo "Subtotal: $".$_POST["laptop"]."<br/>";
				echo "Total after taxes: $".$_POST["laptop"]*1.12."<br/>"; //12% tax
			   	echo "Ship to: <br/>";
			   	echo "First Name: <input type=\"text\" name=\"firstName\"/><br/>";
			   	echo "Last Name: <input type=\"text\" name=\"lastName\"/><br/>";
			   	echo "Addres: <input type=\"text\" name=\"adress\"/><br/>";
			    echo "City: <input type=\"text\" name=\"city\"/><br/>";
			 	echo "Province: <input type=\"text\" name=\"province\"/><br/>";
				echo "Country: <input type=\"text\" name=\"country\"/><br/><br/>";
				
			   	echo "Credit Card Number: <input type=\"text\" name=\"credit-card\"/><br/>";
			   	echo "Expiration date: <input type=\"text\" name=\"credit-card\"/><br/><br/>";
				
			   	//echo "<input type=\"submit\" value=\"Confirm\" />";

			    echo "<a href=\"process.html\"><input type=\"submit\" value=\"Check out\" /></a>";

		}

		?>
	</div>
	  <div class="footer">Copyright 2011</div>
	</div>
<body>
</body>
</html>