@extends('layouts.app') @section('content') @desktop
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<br />
	<br />
	<!--<center><h1>Frequently Asked Questions</h1></center>-->
	<!-- include css -->
	<link rel="stylesheet" href="css/css.css" type="text/css" media="screen">
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
	<div class="container2" style="position:relative;bottom:20px">
		<center>
			<h1><b>Frequently Asked Questions</b></h1>
		</center>
		<center>
			<h2><small class="showhideanswers">&#10086;<!-- this will be hidden when JavaScript is disabled -->
		    <a class="showall" href="#">display</a> or <a class="hideall" href="#">hide</a> all
			</small></h2>
		</center>
		<!-- =Todo: <a href="#" onclick="window.prompt('Press Ctrl+C (Cmd+C for Mac) and then Enter', text);" title="Click, press Ctrl+C and then Enter to copy to clipboard.">#why</a> -->
		<h3 id="first">
		  	<center>
				<a href="#first" title="First Question">How do I change my password? </a>
			</center>
		  </h3>
		<div class="answer">
			<center>
				<p>When you have logged in to your account, click ‘Edit Profile’ and it will prompt you to change and verify your password.</p>
			</center>
		</div>
		<h3 id="second">
				<center>
				<a href="#second" title="Second Question">What happens when I forget my password?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the log in page, click on the ‘Forgot your password’ link which will prompt you to enter your email address. It will then send you an email containing a link to change your password.</p>
			</center>
		</div>
		<h3 id="third">
				<center>
				<a href="#third" title="Third Question">How do I update my account details?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the ‘Edit Profile’ section, select which information you would like to change and make the necessary changes.</p>
			</center>
		</div>
		<h3 id="fourth">
				<center>
				<a href="#fourth" title="Fourth Question">How do I close my account?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the ‘Edit Profile’ there is an option to close your account. Once you have verified to close your account all your data will be erased from the database.</p>
			</center>
		</div>
		<h3 id="fifth">
				<center>
				<a href="#fifth" title="Fifth Question">How can I view a specific list of job advertisements?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>Once you have completed filling out any necessary information in the register page, there are options to choose from such as ‘Location’ and ‘Work type.’ Choosing different options will generate the Recommendations page according to your preferences.</p>
			</center>
		</div>
		<h3 id="sixth">
				<center>
				<a href="#sixth" title="Sixth Question">Where can I see my applied jobs?</a>
				</center>

			</h3>
		<div class="answer">
			<center>
				<p>You can view your applied jobs in your profile page.</p>
			</center>
		</div>
		<h3 id="seventh">
				<center>
				<a href="#seventh" title="Seventh Question">How can I change my email address?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the 'Edit profile' page, under 'Contact info' is where you can change your email address.</p>
			</center>
		</div>
		<h3 id="eighth">
				<center>
				<a href="#eighth" title="Eighth Question">How can I get more information about a job advertisement?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>By clicking the job advertisement, you can see the job description for further information about the job.</p>
			</center>
		</div>
	</div>
</body>

</html>@enddesktop @mobile
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--<center><h1>Frequently Asked Questions</h1></center>-->
	<!-- include css -->
	<link rel="stylesheet" href="css/css.css" type="text/css" media="screen">
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
	<div class="container">
		<center>
			<h2><b>Frequently Asked Questions</b></h2>
		</center>
		<center>
			<h2><small class="showhideanswers">&#10086;<!-- this will be hidden when JavaScript is disabled -->
		    <a class="showall" href="#">display</a> or <a class="hideall" href="#">hide</a> all
			</small></h2>
		</center>
		<!-- =Todo: <a href="#" onclick="window.prompt('Press Ctrl+C (Cmd+C for Mac) and then Enter', text);" title="Click, press Ctrl+C and then Enter to copy to clipboard.">#why</a> -->
		<h3 id="first">
		  	<center>
				<a href="#first" title="First Question">How do I change my password? </a>
			</center>
		  </h3>
		<div class="answer">
			<center>
				<p>When you have logged in to your account, click ‘Edit Profile’ and it will prompt you to change and verify your password.</p>
			</center>
		</div>
		<h3 id="second">
				<center>
				<a href="#second" title="Second Question">What happens when I forget my password?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the log in page, click on the ‘Forgot your password’ link which will prompt you to enter your email address. It will then send you an email containing a link to change your password.</p>
			</center>
		</div>
		<h3 id="third">
				<center>
				<a href="#third" title="Third Question">How do I update my account details?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the ‘Edit Profile’ section, select which information you would like to change and make the necessary changes.</p>
			</center>
		</div>
		<h3 id="fourth">
				<center>
				<a href="#fourth" title="Fourth Question">How do I close my account?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the ‘Edit Profile’ there is an option to close your account. Once you have verified to close your account all your data will be erased from the database.</p>
			</center>
		</div>
		<h3 id="fifth">
				<center>
				<a href="#fifth" title="Fifth Question">How can I view a specific list of job advertisements?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>Once you have completed filling out any necessary information in the register page, there are options to choose from such as ‘Location’ and ‘Work type.’ Choosing different options will generate the Recommendations page according to your preferences.</p>
			</center>
		</div>
		<h3 id="sixth">
				<center>
				<a href="#sixth" title="Sixth Question">Where can I see my applied jobs?</a>
				</center>

			</h3>
		<div class="answer">
			<center>
				<p>You can view your applied jobs in your profile page.</p>
			</center>
		</div>
		<h3 id="seventh">
				<center>
				<a href="#seventh" title="Seventh Question">How can I change my email address?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>In the 'Edit profile' page, under 'Contact info' is where you can change your email address.</p>
			</center>
		</div>
		<h3 id="eighth">
				<center>
				<a href="#eighth" title="Eighth Question">How can I get more information about a job advertisement?</a>
				</center>
			</h3>
		<div class="answer">
			<center>
				<p>By clicking the job advertisement, you can see the job description for further information about the job.</p>
			</center>
		</div>
	</div>
</body>

</html>@endmobile @endsection
