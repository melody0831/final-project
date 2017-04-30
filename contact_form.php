<? require'site_header.php'; ?>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="contact_style.css" />
</head>

<body>

	<div id="page-wrap">
		
		<!-- It would be wise to peruse the README file included with this example.  -->
		
		<div id="contact-area">
			
			<form method="post" action="contact_engine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
	
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
			  <label for="City">Phone:</label>
				<input type="text" name="Phone" id="Phone" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value=" Contact Me" class="submit-button" />
			</form>
			
			<!-- The submit button is floated right.  This resumes page layout flow. -->
			<div style="clear:right;"></div>
		
		</div>
	
	</div>

</body>

<? require'site_footer.php'; ?>