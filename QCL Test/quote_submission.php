<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/testQCL.css" rel="stylesheet" type="text/css">
</head>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$company = $_POST["company"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$city = $_POST["City"];
	$state = $_POST["State"];
	$zip = $_POST["Zip"];
	$material = $_POST["material"];
	$radioTesting = $_POST["radio1"];
	$radioDelivery = $_POST["radio"];
	$txtArea = $_POST["txtArea"];
	$checkBoxValue = join(", ", $_POST['checkBox']);
	$other_test = $_POST["other_test"];
	
	$file = fopen("Quote_Submissions.txt", "a");
	$information = PHP_EOL . $name . " | " . $email . " | " . $company . " | " . $phone . " | " . $address . ", " . 
					$city . " " . $state . " " . $zip . " | " . $radioTesting . " | " .  $radioDelivery . " | " . 
					$material . " | " . $checkBoxValue . " | " . $other_test . " | " . $txtArea;
	fwrite($file, $information);
	fclose($file);
?>

<body>
<div class="container">
<header>
    <div class="primary_header">
     <img src ="../images/header_logo.png">
    </div>
    <nav class="secondary_header">
      <ul>
		<li><a href = "mainQCL.html">HOME</a></li>
        <li><a href = "aboutQCL.html">ABOUT</a></li>
        <li><a href = "instrumentationQCL.html">INSTRUMENTS</a></li>
        <li><a href = "servicesQCL.html">SERVICES</a></li>
        <li><a href = "careersQCL.html"  class = "active">CAREERS</a></li>
        <li><a href = "contactQCL.html">CONTACT</a></li>
      </ul>
    </nav>
    <div class = "low_header">
    	<p><br></p>
    </div>
  </header>

<div class ="main_body">
		<div class = "test_side_bar"> 
			<ul>
				<li style = "padding-top: 20%;"><a href = "submit_sampleQCL.html">Submit a Sample</a></li>
				<li><a href = "servicesQCL.html">View Services</a></li>
				<li><a href = "http://www.pharmareferencestandards.com/">View Reference Standards</a></li>
				<li><a href = "contactQCL.html">Contact Us</a></li>
				<li><a href = "news_and_eventsQCL.html">News and Events</a></li>
				<li style = "padding-bottom: 20%;"><a href = "quoteQCL.html">Request a <br>Quote</a></li>
			</ul>
  		</div>
  		<img src = "../images/main_logo.jpg" style = "float: left;clear: left; margin-top: 5%; margin-left: 0%; margin-right: -5%; margin-bottom: 4%;">
	<div class = "centered_main_body" style = "border: 1px solid black;">
  		<div style = "width: 100%; text-align: center;">
   			<h1>Thank you for your quote request</h1>
   			<p><br>A QCL Representative will contact you within 2 business days.  <br><br></p>
   		</div>
   		<div style = "width: 100%;">
   		</div>
    </div>
</div>

</div> <!-- End main Body Div -->

<div class = "footer">
	<div class = "footer_info">
	<ul>
	  <li>&copy; 2012 - 2013 Quality Chemical Labs</li>
	  <li><strong>Phone:</strong> 910-796-3441</li>
		<li><strong>Fax:</strong> 910-796-3425</li>
		<li>3220 Corporate Drive, Wilmington NC 28405</li>
		<li>3400 Enterprise Drive, Wilmington NC 28405</li>
	</ul>
	</div>
	<div class = "footer_info_links">
	<table class = "footer_table">
		<tr>
			<td class = "row_left"><a href = "mainQCL.html">Home</a></td>
			<td class = "row_right"><a href = "aboutQCL.html">About</a></td>
		</tr>
		<tr>
			<td class = "row_left"><a href = "servicesQCL.html">Services</a></td>
			<td class = "row_right"><a href = "instrumentationQCL.html">Instrumentation</a></td>
		</tr>
		<tr>
			<td class = "row_left"><a href = "careersQCL.html">Careers</a></td>
			<td class = "row_right"><a href = "contactQCL.html">Contact</a></td>
		</tr>
		<tr>
			<td class = "row_left"><a href = "quoteQCL.html">Request a Quote</a></td>
			<td class = "row_right"><a href = "submit_sampleQCL.html">Submit a Sample</a></td>
		</tr>
	</table>
	</div>
	<div class = "footer_logo">
		<img src = "../images/footer_logo.png">
	</div>
	</div>
</body>
</html>
