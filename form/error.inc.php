<style type="text/css">
body {
	background: white;
}
.container {
	max-width: 900px;
	margin: 50px auto 180px;
	text-align: center;
}

header {
	text-align: right;
	background: #F8CCE9;
	padding: 20px 40px;
}
nav ul li {
	display: inline;
}
nav a {
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-size: 18px;
	padding: 5px;
	margin: 50px;
}
footer{
	background: #F8CCE9;
	color: white;
	text-align: center;
	padding: 20px;
	position: fixed;
	bottom: 0;
	width: 100%;
	font-weight: bold;
	font-size: 17px;
}
</style>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p> This Page is designed by Vanessa</P>
</footer>
