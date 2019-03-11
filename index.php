<?php
	if($_POST['send'] == 'yes')
	{
//		$arrayKey = [];
//		foreach($_POST as $key => $value)
//		{
//			echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
//			$arrayKey = $key;
//			
//		}
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "feedback";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else{
			
			extract($_POST);
			date_default_timezone_set('UTC');
			$timestamp = strtotime($yog);
			$date=date("Y-m-d", $timestamp);
			
			$sql = "INSERT INTO `data`(`sex`, `program`, `email`, `yog`, `grade`, `practise`, `firm`, `course`, `spec`, `exp`, `bal`, `place`, `res`, `tm`, `chal`, `adv`, `enter`, `solve`, `cbp`, `bCon`, `sDesign`, `Com`, `rel`, `omskill`, `mat`) VALUES ('".$sex."','".$program."','".$email_add."','".$date."','".$grade."','".$practicing."','".$firm."','".$course_rem."','".$spec_remember."','".$experience."','".$bal."','".$placement."','".$research."','".$teamwork."','".$chal."','".$adviser."','".$enter."','".$solve."','".$cbp."','".$bCon."','".$sDesign."','".$Com."','".$rel."','".$omskil."','".$mat."')";

			if ($conn->query($sql) === TRUE) {
				echo "Yaay!! Your feedback is successfully logged !!!";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
		
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="file:///C|/Users/CSIS-SOFT-DEV2/Desktop/main.css">
    <script src="file:///C|/Users/CSIS-SOFT-DEV2/Desktop/main.js"></script>
    <style>
    body{
        background-color: aliceblue;
        box-sizing: border-box;
    }
    .container{
        width: 55%;
        margin: 45px;
        margin-left: 22%;
        box-sizing: border-box;
        box-shadow: 2px 2px 4px 4px rgb(221, 221, 221); 

    }
    .header{
        background-color: blueviolet;
        height: 200px;
    }
    .header-content{
        padding-top: 70px;
        padding-left: 50px;
    }
    @import url('https://fonts.googleapis.com/css?family=Lato');
    .host{
       
       font-family:'Lato', sans-serif;
       font-size: 40px;
       color: white;
    }
    .title{
       
       font-family:'Lato', sans-serif;
       font-size: 30px;
       color: white;
    }
    .year{
       font-family:'Lato', sans-serif;
       font-size: 15px;
       color: white;
    }
    .req{
        color: red;
    }
    .form-container{
        background-color: white;
    }
    .form-body{
        padding-top: 40px;
        padding-left: 50px;
        font-family: 'Lato', sans-serif;
        color: gray;
        padding-bottom: 40px;
    }
    .row{
        margin: 20px;
    }
    .row-input{
        padding:10px;
        padding-left: 20px;
    }
    input[type=text], [type=email] {
        display: block;
        width: 80%;
        height: 40px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
        background-image: none;
        border: 1px solid #A6A6A6;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-transition: border-color ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s;
        -moz-transition: border-color ease-in-out .15s;
        transition: border-color ease-in-out .15s;
    }
    .btn{
        
        background-color: blueviolet;
        height: 50px;
        width: 90px;
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
	<script language="javascript">
		window.onload = function() {
			var x = document.getElementById("modal1");
			var y = document.getElementById("modal2");
			y.style.display = "none";
			x.style.display = "none";
		  };
		function toggleBLD212() {
		  var x = document.getElementById("modal1");
		  var y = document.getElementById("modaly");
		  if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";
			
		  } else {
			x.style.display = "none";
		  }
		}
		function toggleBLD222() {
		  var x = document.getElementById("modal2");
		  var y = document.getElementById("modal1");
		  if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";
		  } else {
			x.style.display = "none";
		  }
		}
	</script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <div class="host">Covenant University</div>
                <div class="title">Alumni Feedback Form (College Of Building)</div>
                <div class="year">Academic Year: 2018-19</div> 
            </div>
        </div>
        <div class="form-container">
            <div class="form-body">
				<form method="post" action="index.php">
					<div class="row">
						<div class="intro">
							Dear Eagles,
						<br />
							We are glad to have had you spend some time with us in Covenant University. We would love to have your opinion about our curriculum in Building Technology from your perspective now that you are part of the industry. Your input will help shape Kings and Queens in Hebron. Feel free as your identity would be kept private.
						</div>

						<span class="req">*</span> Required
					</div>
					<div class="row">
						<label for="name" >1. Male:</label> <input type="radio" name="sex" value="male"> 
						<label for="name" > Female:</label> <input type="radio" name="sex" value="female"> <span class="req">*</span>

					</div>
					<div class="row">
							<label for="name" >2. Program: </label><span class="req">*</span>
							<div class="row-input">
								<input type="text" name="program" placeholder="Enter Program">
							</div>
					</div>
					<div class="row">
							<label for="name" >3. Email: </label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email_add" placeholder="Enter Email">
							</div>
					</div>
					<div class="row">
							<label for="name" >4. Year Of Graduation</label><span class="req">*</span>
							<div class="row-input">
								<input type="date" name="yog" placeholder="Enter your email">
							</div>
					</div>
					<div class="row">
							<label for="name" >5.	Grade upon Graduation:  </label> <span class="req">*</span>
					</div>
					<div class="row">
						<input type="radio" name="grade" value="firstClass">First Class ; 
						 <input type="radio" name="grade" value="secClass">Second Class Upper ;<input type="radio" name="grade" value="secClass">Second Class Lower ;<input type="radio" name="grade" value="secClass">Third Class ; 

					</div>
					<div class="row">
							<label for="name" > 6.	Are you presently practicing Building Technology? </label><span class="req">*</span> <label for="name" >Yes</label> <input type="radio" name="practicing" value="yes"> 
						<label for="name" > No</label> <input type="radio" name="practicing" value="no"> 


					</div>
					<div class="row">
							<label for="name" >7. If Yes, What is your role in your firm?</label><span class="req">*</span>
							<div class="row-input">
								<input type="text" name="firm" placeholder="Enter your role">
							</div>
					</div>
					<div class="row">
							<label for="name" >8. Do you recall any course (s) in Building Technology (BLD) that has been useful in construction? </label><span class="req">*</span>
							<div class="row-input">
								<label for="name" >Yes</label> <input type="radio" name="course_rem" value="yes"> 
						<label for="name" > No</label> <input type="radio" name="course_rem" value="no"> 
							</div>
					</div>
					<div class="row">
							<label for="name" >9. If Yes, Please specify?</label><span class="req">*</span>
							<div class="row-input">
								<input type="text" name="spec_remember" placeholder="Specify">
							</div>
					</div>

					<div class="row">
						<div class="intro">
							<br>
							Please kindly indicate the one that applies to courses in Building Technology using 
							<br>
							<strong>5 = Strongly Agree, 4 = Agree, 3 = Neutral, 2 = Disagree, 1 = Strongly Disagree </strong>
						</div>
					</div>
					<div class="row">
						<table border="1">
							<tr>
								<th> S/N
								</th>
								<th> Parameters
								</th>
								<th> 5
								</th>
								<th> 4
								</th>
								<th> 3
								</th>
								<th> 2
								</th>
								<th> 1
								</th>

							</tr>
							<tr>
								<td> 1
								</td>
								<td> Overall Educational Experience was satisfactory
								</td>
								<td> <input type="radio" name="experience" value="5">
								</td>
								<td> <input type="radio" name="experience" value="4">
								</td>
								<td> <input type="radio" name="experience" value="3">
								</td>
								<td> <input type="radio" name="experience" value="2">
								</td>
								<td> <input type="radio" name="experience" value="1">
								</td>

							</tr>
						<tr>
								<td> 2
								</td>
								<td> There was balance between theory and practical
								</td>
								<td> <input type="radio" name="bal" value="5">
								</td>
								<td> <input type="radio" name="bal" value="4">
								</td>
								<td> <input type="radio" name="bal" value="3">
								</td>
								<td> <input type="radio" name="bal" value="2">
								</td>
								<td> <input type="radio" name="bal" value="1">
								</td>

							</tr>
						<tr>
								<td> 3
								</td>
								<td> The program helped to quickly secure a placement in the industry
								</td>
								<td> <input type="radio" name="placement" value="5">
								</td>
								<td> <input type="radio" name="placement" value="4">
								</td>
								<td> <input type="radio" name="placement" value="3">
								</td>
								<td> <input type="radio" name="placement" value="2">
								</td>
								<td> <input type="radio" name="placement" value="1">
								</td>

							</tr>
						<tr>
								<td> 4
								</td>
								<td> Independent research work was adequate
								</td>
								<td> <input type="radio" name="research" value="5">
								</td>
								<td> <input type="radio" name="research" value="4">
								</td>
								<td> <input type="radio" name="research" value="3">
								</td>
								<td> <input type="radio" name="research" value="2">
								</td>
								<td> <input type="radio" name="research" value="1">
								</td>

							</tr>
						<tr>
								<td> 5
								</td>
								<td> Teamwork was encouraged
								</td>
								<td> <input type="radio" name="teamwork" value="5">
								</td>
								<td> <input type="radio" name="teamwork" value="4">
								</td>
								<td> <input type="radio" name="teamwork" value="3">
								</td>
								<td> <input type="radio" name="teamwork" value="2">
								</td>
								<td> <input type="radio" name="teamwork" value="1">
								</td>

							</tr>
						<tr>
								<td> 6
								</td>
								<td> The courses were intellectually challenging
								</td>
								<td> <input type="radio" name="chal" value="5">
								</td>
								<td> <input type="radio" name="chal" value="4">
								</td>
								<td> <input type="radio" name="chal" value="3">
								</td>
								<td> <input type="radio" name="chal" value="2">
								</td>
								<td> <input type="radio" name="chal" value="1">
								</td>

							</tr>
						<tr>
								<td> 7
								</td>
								<td> My level adviser was helpful in the study
								</td>
								<td> <input type="radio" name="adviser" value="5">
								</td>
								<td> <input type="radio" name="adviser" value="4">
								</td>
								<td> <input type="radio" name="adviser" value="3">
								</td>
								<td> <input type="radio" name="adviser" value="2">
								</td>
								<td> <input type="radio" name="adviser" value="1">
								</td>

							</tr>
						<tr>
								<td> 8
								</td>
								<td> Entrepreneurship was encouraged
								</td>
								<td> <input type="radio" name="enter" value="5">
								</td>
								<td> <input type="radio" name="enter" value="4">
								</td>
								<td> <input type="radio" name="enter" value="3">
								</td>
								<td> <input type="radio" name="enter" value="2">
								</td>
								<td> <input type="radio" name="enter" value="1">
								</td>

							</tr>
						<tr>
								<td> 9
								</td>
								<td> The study helped me solve problems faster and better
								</td>
								<td> <input type="radio" name="solve" value="5">
								</td>
								<td> <input type="radio" name="solve" value="4">
								</td>
								<td> <input type="radio" name="solve" value="3">
								</td>
								<td> <input type="radio" name="solve" value="2">
								</td>
								<td> <input type="radio" name="solve" value="1">
								</td>

							</tr>
						<tr>
								<td> 10
								</td>
								<td> Teaching of Computer-based programs are adequate in the courses
								</td>
								<td> <input type="radio" name="cbp" value="5">
								</td>
								<td> <input type="radio" name="cbp" value="4">
								</td>
								<td> <input type="radio" name="cbp" value="3">
								</td>
								<td> <input type="radio" name="cbp" value="2">
								</td>
								<td> <input type="radio" name="cbp" value="1">
								</td>

							</tr>
						<tr>
								<td> 11
								</td>
								<td> The business aspect of construction was well taught
								</td>
								<td> <input type="radio" name="bCon" value="5">
								</td>
								<td> <input type="radio" name="bCon" value="4">
								</td>
								<td> <input type="radio" name="bCon" value="3">
								</td>
								<td> <input type="radio" name="bCon" value="2">
								</td>
								<td> <input type="radio" name="bCon" value="1">
								</td>

							</tr>
						<tr>
								<td> 12
								</td>
								<td> The structural aspect of building design was taught
								</td>
								<td> <input type="radio" name="sDesign" value="5">
								</td>
								<td> <input type="radio" name="sDesign" value="4">
								</td>
								<td> <input type="radio" name="sDesign" value="3">
								</td>
								<td> <input type="radio" name="sDesign" value="2">
								</td>
								<td> <input type="radio" name="sDesign" value="1">
								</td>

							</tr>
						<tr>
								<td> 13
								</td>
								<td> Communication skills were enhanced
								</td>
								<td> <input type="radio" name="Com" value="5">
								</td>
								<td> <input type="radio" name="Com" value="4">
								</td>
								<td> <input type="radio" name="Com" value="3">
								</td>
								<td> <input type="radio" name="Com" value="2">
								</td>
								<td> <input type="radio" name="Com" value="1">
								</td>

							</tr>
						<tr>
								<td> 14
								</td>
								<td>The courses are applicable/relevant to real life situations
								</td>
								<td> <input type="radio" name="rel" value="5">
								</td>
								<td> <input type="radio" name="rel" value="4">
								</td>
								<td> <input type="radio" name="rel" value="3">
								</td>
								<td> <input type="radio" name="rel" value="2">
								</td>
								<td> <input type="radio" name="rel" value="1">
								</td>

							</tr>
						<tr>
								<td> 15
								</td>
								<td> There were enough materials for the courses
								</td>
								<td> <input type="radio" name="mat" value="5">
								</td>
								<td> <input type="radio" name="mat" value="4">
								</td>
								<td> <input type="radio" name="mat" value="3">
								</td>
								<td> <input type="radio" name="mat" value="2">
								</td>
								<td> <input type="radio" name="mat" value="1">
								</td>

							</tr>
						<tr>
								<td> 16
								</td>
								<td> Organizational and managerial skills were developed
								</td>
								<td> <input type="radio" name="omskil" value="5">
								</td>
								<td> <input type="radio" name="omskil" value="4">
								</td>
								<td> <input type="radio" name="omskil" value="3">
								</td>
								<td> <input type="radio" name="omskil" value="2">
								</td>
								<td> <input type="radio" name="omskil" value="1">
								</td>

							</tr>

						</table>

					</div>
					<div class="row">
						<table>
							<tr><td>BLD 111</td><td>BLD 112</td><td>BLD 121</td><td>BLD 122</td><td>BLD 211</td><td><button onclick="toggleBLD212()" >BLD 212</button></td><td>BLD 213</td><td>BLD 214</td><td>BLD 216</td></tr>
							<tr><td>BLD 218</td><td>BLD 221</td><td><button onclick="toggleBLD222()" >BLD 222</button></td><td>BLD 223</td><td>BLD 224</td><td>BLD 228</td><td>BLD 311</td><td>BLD 313</td><td>BLD 314</td></tr>
							<tr><td>BLD 315</td><td>BLD 316</td><td>BLD 317</td><td>BLD 318</td><td>BLD 318</td><td>BLD 321</td><td>BLD 323</td><td>BLD 324</td><td>BLD 325</td></tr>
							<tr><td>BLD 327 </td><td>BLD 328 </td><td>BLD 329 </td><td>BLD 122</td><td>BLD 211</td><td>BLD 212</td><td>BLD 213</td><td>BLD 214</td><td>BLD 216</td></tr>
							<tr><td>BLD 111</td><td>BLD 112</td><td>BLD 121</td><td>BLD 122</td><td>BLD 211</td><td>BLD 212</td><td>BLD 213</td><td>BLD 214</td><td>BLD 216</td></tr>
							<tr><td>BLD 111</td><td>BLD 112</td><td>BLD 121</td><td>BLD 122</td><td>BLD 211</td><td>BLD 212</td><td>BLD 213</td><td>BLD 214</td><td>BLD 216</td></tr>

						</table>

					</div>

					<div class="row" id="modal1">
						<div class="row"> BLD 212 – BUILDING CONSTRUCTION PRACTICE 1
						</div>

						<div class="row"> MODULE 1 – FOUNDATION WORKS/EXCAVATION

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 2 – FLOORS

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 3 – CURRENT TRENDS IN CONSTRUCTION TECHNOLOGY

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 4 – IMPACT OF ICT IN THE CONSTRUCTION INDUSTRY

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>


					</div>
					<div class="row" id="modal2">
						<div class="row"> BLD 222 – BUILDING CONSTRUCTION PRACTICE II
						</div>

						<div class="row"> MODULE 1 – FOUNDATION WORKS/EXCAVATION

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 2 – FLOORS

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 3 – CURRENT TRENDS IN CONSTRUCTION TECHNOLOGY

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>
						<div class="row"> MODULE 4 – IMPACT OF ICT IN THE CONSTRUCTION INDUSTRY

						</div>
						<div class="row">
							<label for="name" >How do you think this module should be best taught from your experience in construction practice?</label><span class="req">*</span>
							<div class="row-input">
								<input type="email" name="email" placeholder="Answer:">
							</div>
						</div>


					</div>
					<div class="row">
							<input type="hidden" name="send" value="yes">
							<input type="Submit" class="btn" name="submit" value="Submit">
					</div>
				</form>
            </div>

        </div>

    </div>
</body>
</html>