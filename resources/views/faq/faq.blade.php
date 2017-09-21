@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  
  <title>Frequently Asked Questions</title>

  <!-- include css -->
  <link rel="stylesheet" href="css/app.css" type="text/css" media="screen">
  <!-- disable show/hide all links when javascript is off -->
	<noscript>
	  <style type="text/css" media="screen">
      .showhideanswers {display:none;}
      h3 a {text-decoration:none;}
	  </style>
	</noscript>
  <!-- include jquery -->
  <script type="text/javascript" src="jquery.min.js"></script>
  <!-- include faq.js script -->
  <script type="text/javascript" src="faq.js"></script>

</head>
<body>

  <h1><a href="faq" title="Link to this FAQ page.">Frequently Asked Questions</a>
  <small class="showhideanswers">&#10086;<!-- this will be hidden when JavaScript is disabled -->
    <a class="showall" href="#">display</a> or <a class="hideall" href="#">hide</a> all
	</small>
</h1>

<!-- =Todo: <a href="#" onclick="window.prompt('Press Ctrl+C (Cmd+C for Mac) and then Enter', text);" title="Click, press Ctrl+C and then Enter to copy to clipboard.">#why</a> -->

  <h3 id="first">
		<a href="#first" title="First Question">How do I change my password? </a>
  </h3> 
  
  <div class="answer">
		<p>When you have logged in to your account, click ‘Edit Profile’ and it will prompt you to change and verify your password.</p> 
	</div>

				
	<h3 id="second">
		<a href="#second" title="Second Question">What happens when I forget my password?</a>
	</h3>
				
	<div class="answer">
		<p>In the log in page, click on the ‘Forgot your password’ link which will prompt you to enter your email address. It will then send you an email containing a link to change your password.</p>
	</div>
				
				<h3 id="third">
					<a href="#third" title="Third Question">How do I update my account details?</a>
				</h3>
				
				<div class="answer">
					<p>In the ‘Edit Profile’ section, select which information you would like to change and make the necessary changes.</p>
				</div>
				
				<h3 id="fourth">
					<a href="#fourth" title="Fourth Question">How do I close my account?</a>
				</h3>
				
				<div class="answer">
					<p>In the ‘Edit Profile’ there is an option to close your account. Once you have verified to close your account all your data will be erased from the database.</p>
				</div>
				
				<h3 id="fifth">
					<a href="#fifth" title="Fifth Question">How can I view a specific list of job advertisements?</a>
				</h3>
				
				<div class="answer">
					<p>Once you have completed filling out any necessary information in the register page, there are options to choose from such as ‘Location’ and ‘Work type.’ Choosing different options will generate the Recommendations page according to your preferences.</p>
				</div>
					
				<h3 id="sixth">
					<a href="#sixth" title="Sixth Question">How can I attach documents in my profile?</a>
				</h3>
						
				<div class="answer">
					<p>Go to ‘Edit profile’ where an option to attach documents is located.</p>
				</div>
				
				<h3 id="seventh">
					<a href="#seventh" title="Seventh Question">What type of files can I attach?</a>
				</h3>
						
				<div class="answer">
					<p>Your files should be in a .docx and .pdf format to be uploaded successfully in the website.</p>
				</div>
				
				<h3 id="eighth">
					<a href="#eighth" title="Eighth Question">How can I save jobs?</a>
				</h3>
						
				<div class="answer">
					<p>When you have a specific job advertisement that you would like to view at a later time, you can click on the ‘Save this job.’</p>
				</div>
			

</body>
</html>

@endsection