<!DOCTYPE html>

<?php 
	if (isset($_GET['name'])){
		$name =$_GET['name'];
		$surname=$_GET['surname'];	
		echo "From HTTG GET method : ",$name, " ", $surname;	
	}
	

		


	$conn = mysqli_connect(
  	'localhost',
  	'root',
  	'',
  	'cv');
	$sql = "SELECT * FROM tbleducation";
	$result = mysqli_query($conn, $sql);

	echo "<br>";
	echo "<table border='1'>";
	while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
	    echo "<tr>";
	    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        	echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    	}
    	echo "</tr>";
	}
	echo "</table>";
?>



<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/creative.css">
	<title>Personal CV</title>
	<script src="js/myScript.js"></script>
	<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
  			$(".CL").click(function(){
    			$("#div1").load("coverletter.txt");
  			});
		});
</script>
</head>

<body>
	<button class="CL" type="button">Show Cover Letter</button>
	<p id="div1"></p>
	<br><br>
	<button type="button" onclick="changeCSS('css/Creative.css', 0)" >Creative</button>
	<button type="button" onclick="changeCSS('css/Professional.css', 0)">Professional</button>

	<center>

	<h1>Dain Kim</h1>

	<img src="img/myphoto.jpg" width="150"> 
	
	<h3>Computer Science, Year 3</h3>
	

	<hr>

	<a href="https://www.dit.ie"><img src="img/TU Dublin.png" height="100"></a>

	<h4 id="timer" onmouseover="random_background()"></h4>

	</center>

	<h2>SUMMARY</h2>
	<p>
	I am Dain Kim, currently studying in TU Dublin, Ireland and Hanyang University ERICA, South Korea for double degree. I am majoring Computer Science, Year 3, graduating in 2021. Interested in Web Crawling, Artificial Language, Android App developemnt.
	</p>
	<p>
		I am Eager to apply academic and professional background toward launching a successful career as an IT specialist with an employer offering opportunities for professional development in exchange for demonstrated drive and commitment to superior job performance. 
	</p>

	<p>
		I did several mini projects with team or individual. Did project manager twice, able to lead successfully.
	</p>
	<p>
		I am a quick learner, able to learn new skills fast. 
	</p>

	<!--QnA section-->

	<h2>QnA</h2>

	<p>Q1. What is your hobby?</p>
	<input type="button" id="button1" onclick="shownhideButton('button1', 'Answer1')" value="Click to see the answer!"></input>
	<div id="Answer1" style="display: none;">
		A. I like swimming and reading!
	</div>

	<p>Q2. Why are you studying in Dublin?</p>
	<input type="button" id="button2" onclick="shownhideButton('button2', 'Answer2')" value="Click to see the answer!"></input>
	<div id="Answer2" style="display: none;">
		A. For Double Degree
	</div>

	<p>Q3. How can I contact you?</p>
	<input type="button" id="button3" onclick="shownhideButton('button3', 'Answer3')" value="Click to see the answer!"></input>
	<div id="Answer3" style="display: none;">
		A. My email address is d19123697@mytudublin.ie
	</div>

	<h2>PROGRAMMING LANGUAGES</h2>
	<ul>
		<li>C</li>
		<li>C++</li>
		<li>Java</li>
		<li>Python</li>
		<li>HTML, CSS, Javascript</li>
	</ul>

	<h2>PROJECTS</h2>
	<ol>
		<li>CLCU(2019.08 ~ )</li>
		Cleaning Curator Application, developed by Java, Mysql

		<li><a href="https://github.com/promisemee/Battery-Life-Indicator">Battery Life Indicator </a>(2019.03~2019.06)</li>
		Battery Life Indicator for Linux, developed by Python
		
		<li><a href="https://github.com/promisemee/Shell">Shell making </a>(2019.04 ~ 2019.06)</li>
		Customized Shell for Linux, developed by C
		
		<li><a href="https://github.com/inureyes/Galtron">Galtron</a> (2018.04 ~ 2018.08)</li>
		2D Shooting Game, developed by Python
	</ol>


	<h2>EDUCATION</h2>

	<table border="1" width="500" height="150">
		<tr>
			<th> <a href="https://www.dit.ie">TU Dublin </a></th>
			<th> 2019.09 ~ 2020.05 </th>
		</tr>
		<tr>
			<th> <a href="https://sw.hanyang.ac.kr"> Hanyang University ERICA</a></th>
			<th> 2017 ~ </th>
		</tr>
		<tr>
			<th><a href="https://www.byeongjeom.hs.kr"> Byeongjeom High School</a></th>
			<th> 2014 ~ 2017 </th>
		</tr>
	</table>


	<h2>Photos</h2>

	<center>
	<div id = "image"></div>
	<div id="thumbnails">
	
	<img id="img1" class = "preview" src = "img/IMG_4008.jpg" onclick="upDate(this)">
	<img id="img2" class = "preview" src = "img/IMG_3940.jpg" onclick="upDate(this)">
	<img id="img3" class = "preview" src = "img/IMG_3991.jpg" onclick="upDate(this)">
</div>
</center>
</body>
</html>