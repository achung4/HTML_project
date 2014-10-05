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
        	<td><input type="radio" name="laptop" value="215"/><img src="images/desktop-page1/asus1.jpg" alt="asus1"/></td>
            <td>ASUS Eee Box EB1007-B0410 Nettop Intel Atom D410(1.66GHz) 1GB DDR2 250GB HDD Capacity Intel GMA 3150 Linux Linux with keyboard, mouse, VESA bracket and stand </td>
      	</tr>
        <tr>
        	<td><input type="radio" name="laptop" value="370"/><img src="images/desktop-page1/asus2.jpg" alt="asus2"/></td>
            <td>ASUS Eee Box EB1007-B007F Nettop Intel Atom D410(1.66GHz) 2GB DDR2 250GB HDD Capacity Intel GMA 3150 Windows 7 Professional 32-bit Windows 7 Professional OS loaded </td>
        </tr>
        <tr>
        	<td><input type="radio" name="laptop" value="379"/><img src="images/desktop-page1/asus3.jpg" alt="asus3"/></td>
            <td>ASUS Eee Box EB1012P-B022E Nettop Intel Atom D510(1.66GHz) 2GB DDR2 320GB HDD Capacity Next-generation NVIDIA ION graphics Windows 7 Home Premium 64-bit Dual Core ATOM, ION2, Windows 7 Home Premium OS </td>
        </tr>     
        <tr>
        	<td><input type="radio" name="laptop" value="394"/><img src="images/desktop-page1/asus4.jpg" alt="asus4"/></td>
            <td>ASUS Eee Box EB1012P-B007G Nettop Intel Atom D510(1.66GHz) 2GB DDR2 250GB HDD Capacity Next-generation NVIDIA ION graphics Windows 7 Professional 64-bit Windows 7 Professional OS loaded </td>
        </tr>        
        </table>
		<table border="1">
        <tr>
        	<td colspan="5"><input type="submit" value="Previous" "disabled"/></td>
            <td colspan="5"><a href="desktops2.php"><input type="submit" value="Next" /></td>
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