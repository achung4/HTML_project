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
		<h1>Desktops</h1>
		<form action="" method="POST">
        <table border="1">
        <tr>
        	<td><input type="radio" name="laptop" value="600"/><img src="images/desktop-page2/acer1.jpg" alt="acer1"/></td>
            <td>Acer Aspire AX3400-B2001 20" Desktop PC Athlon II X2 240(2.8GHz) 4GB DDR3 640GB HDD Capacity NVIDIA GeForce 9200 Windows 7 Home Premium 64-bit (English/French)</td>
      	</tr>
        <tr>
        	<td><input type="radio" name="laptop" value="624"/><img src="images/desktop-page2/ibuypower1.jpg" alt="ibuypower1"/></td>
            <td>iBUYPOWER Gamer Power 933SLC Desktop PC Intel Core i3 2120(3.30GHz) 4GB DDR3 1TB HDD Capacity NVIDIA GeForce GT 440 Windows 7 Home Premium 64-bit</td>
        </tr>
        <tr>
        	<td><input type="radio" name="laptop" value="629"/><img src="images/desktop-page2/lenovo1.jpg" alt="lenovo1"/></td>
            <td>ThinkCentre M75e (5041A2U) Desktop PC Phenom II X2 B53(2.80GHz) 3GB DDR3 320GB HDD Capacity ATI Radeon 3000 Windows 7 Professional 32-bit</td>
        </tr>     
        <tr>
        	<td><input type="radio" name="laptop" value="659"/><img src="images/desktop-page2/levono2.jpg" alt="levono2"/></td>
            <td>ThinkCentre M58 (8910B4U) Desktop PC Pentium dual-core E5700(3.00GHz) 2GB DDR3 250GB HDD Capacity Intel GMA 4500 Windows 7 Professional 32-bit</td>
        </tr>       
        </table>
		<table border="1">
        <tr>
        	<td colspan="5"><a href="desktops.php"><input type="submit" value="Previous" /></td>
            <td colspan="5"><input type="submit" value="Next" "disabled"/></td>
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