<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>NSBM-Lerning Management System</title>
	<link rel="icon" type="text/png" href="ic.png">
	<link rel="stylesheet" type="text/css" href="nsbmstyle.css">
	<script type="text/javascript" src="NSBMJS.js"></script>

</head>
<body onLoad="Defaults()">
	<!-- start OF Page Divition -->
	<div id="pageDiv">
	<div class="navbar"><!--Navigation bar-->
		<!-- Top panel 1-->
		<div id="topDiv1"></div>
		<!-- Top panel 2-->
		<div id="topDiv2">
			<div id="topDiv2-1"></div>
			<div id="topDiv2-2">
				<ul id="topDiv2-2list">
					<li><a href="#ComLink">COMPUTING</a></li>
					<li><a href="#MgtLink">MANAGEMENT</a></li>
					<li><a href="#EngLink">ENGINERING</a></li>
					<li><a href="#MedLink">MEDICINE</a></li>
					<li><a href="#PostLink">POSTGRADUATE</a></li>
				</ul>
			</div>
		</div>
	</div>
		<!-- Left panel-->
		<div id="left-rightDive" class="main"> <!--class "main" for scroll navigation bar-->
		<!-- Left panel Div 1-->
		<div id="leftDive1">
			<h4>Main Menu</h4>
			<table id="leftDiv1Tbl" class="link">
				<tr style="height: 50px">
					<td id="border"><a href="#ComLink">Faculty of Computing</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="#MgtLink">Faculty of Management</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="#EngLink">Faculty of Engineering</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="#MedLink">Faculty of Medicine</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="#PostLink">Faculty of Postgraduate</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Contact</td>
				</tr>
			</table>				
							
		</div>
	
		<!-- Left panel Div 2-->
		<div id="leftDive2">
			<form id="logForm" name="Lfrm" method="POST" action="index.php" onsubmit=" return logfm();">
				<table>
					<tr>
						<td style="text-align: center; color: #042D59">Log In</td>
					</tr>
					<tr>
						<td>User Name:</td>
					</tr>
					<tr>
						<td><input type="text" name="uname"></td>
					</tr>
					<tr>
						<td>Password:</td>
					</tr>
					<tr>
						<td><input type="password" name="psw"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Login" name="login">
							<input type="reset" value="Reset"></td>
					</tr>
				</table>
			</form>
		</div>

		<!-- Login Form PHP-->
		<?php


		if (isset($_POST['login'])) {
			$uname=$_POST['uname'];//username
			$password=$_POST['psw'];//password 

			session_start();

			$con=mysqli_connect("localhost","root","","nsbmlms");//mysqli("localhost","username of database","password of database","database name")
			$result=mysqli_query($con,"SELECT * FROM `login` WHERE `username`='$uname' && `password`='$password'");

			
			$count=mysqli_num_rows($result);
			if($count==1)
			{

				if ($uname == "admin") {
					$_SESSION['log']=1;
					header("refresh:0;url=Dashboard.php");
				}else{
				$_SESSION['log']=1;
				header("refresh:0;url=NSBM.htm");
				}
			}
			else
			{
				//echo "Please fill proper details";
				header("refresh:0;index.php");// it takes 2 sec to go index page
			}

			mysqli_free_result($result);
			mysqli_close($con);

		}


		?>

		<!-- Left panel Div 3-->
		<div id="leftDive3">
			<!-- Calender JS code Strat -->
			<div id=NavBar style=" width:202px; top:10px;margin-left: 5px;margin-top: 50px" align="center">
				<form name="when">
					<table>
						<tr>
							<td><input type="button" value="<-Last" onClick="Skip('-')"></td>
							<td> </td>
							<td><select name="month" onChange="On_Month()">

							<script language="JavaScript1.2" src="calander.js">
								if (ie4||ns6){
									for (j=0;j<Month_Label.length;j++) {
										document.writeln('<option value=' + j + '>' + Month_Label[j]);
										   	}
									}
							</script>

								</select>
							</td>
							<td><input type="text" name="year" size=1 maxlength=4 onKeyPress="return Check_Nums()" onKeyUp="On_Year()">
							</td>
							<td> </td>
							<td><input type="button" value="Next->" onClick="Skip('+')"></td>
							</tr></table></form></div>
			<div id=Calendar style="width:202px; top:15px; margin-left: 5px" align="center"></div>
			<!-- Calender JS code End -->
		</div>
		</div>

		<!-- Middle panel-->
		<div id="middleDive" class="main"> <!--class "main" for scroll navigation bar-->
		<!--Slide Image-->
		<div id="middlePic">
			<img class="mySlides" src="pic1.jpg" alt="Nsbm" style="width:100%; height:100%">
			<img class="mySlides" src="pic2.jpg" alt="Nsbm" style="width:100%; height:100%">
			<img class="mySlides" src="pic3.jpg" alt="Nsbm" style="width:100%; height:100%">
			<img class="mySlides" src="pic4.jpg" alt="Nsbm" style="width:100%; height:100%">
			<img class="mySlides" src="pic5.jpg" alt="Nsbm" style="width:100%; height:100%">
		</div>
		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 5000); // Change image every 5 seconds
		}
		</script>


		<div id="middleDive1" class="mD1Color1"><h3>NEWS & EVENT</h3></div>
		<div class="scroll"><!--Scoral Div-->
		<div id="middleDive2"><img src="nws.jpg" alt="Nsbm" style="width:100%; height:80%"></div>
		<div id="middleDive2-1">
			<h4>NSBM Sathkara</h4>
								<p id="p1">
A special programme to fulfill the needs of our fellow Sri Lankans who are affected by floods, is now in operation at the students centre, NSBM Green University Town, Homagama. Please bring all your donations, we accept them until 10 am tomorrow, Tuesday 30th May 2017. We are open 24 Hours.				
								</p>
		</div>
		<div id="middleDive3"><img src="nwf.jpg" alt="Nsbm" style="width:100%; height:80%"></div>
		<div id="middleDive3-1">
			<h4>Saddharmaloka Vesak Kalaapaya Awards Ceremony</h4>
								<p id="p1">
The NSBM Vesak Zone "Saddharmaloka Vesak Kalaapaya" was concluded successfully on May 12th 2017. The awards ceremony of the same, happened today at the Student Center of NSBM. The A 1 group of UGC Business Management 17.1 batch won the first place, whilst A 2 group of UGC Business Management 17.1 batch won the 2nd. 3rd place went to 17.1 UCD/ Victoria Computing batch. The winners donated the money back, to the Green Task Force, to be used in the flood donations, showing the qualities of NSBM Students!
									
								</p>
		</div>
		<div id="middleDive4"><img src="nwt.jpg" alt="Nsbm" style="width:100%; height:80%"></div>
		<div id="middleDive4-1">
			<h4>NSBM Students in China</h4>
								<p id="p1">
As part of the Sri Lanka-Chinese Student exchange Summer camp programme of NSBM Green University Town, a group of students visited the Beijing Foreign Studies University China, last May 7th to 17th. They were welcomed warmly and taken on a tour of China, and participated in Chinese cultural activities and experienced the Chinese life in-situ. The group also met with Dr. Karunasena Kodithuwakku, Sri Lankan Ambassador to China.
									
								</p>
		</div>
			

		</div>

		</div>

		<!-- Right panel-->
		<div id="left-rightDive" class="main"> <!--class "main" for scroll navigation bar-->
		<!-- Right panel Div 1-->
		<div id="righttDive1">
			<h4>Student Help Desk</h4>
			<table id="rightDiv1Tbl">
					<tr style="height: 40px">
						<td id="border"><a href="index.php">Lecture Hall Allocation</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="index.php">Student Socites</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="index.php">Exam Time Tables</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="index.php">Semester Time tables</a></td>
					</tr>
					
					<tr style="height: 40px">
						<td id="border"><a href="index.php">Request Forms</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="index.php">University Publications</a></td>
					</tr>
			</table>
		</div>
		<!-- Right panel Div 2-->
		<div id="righttDive2">

			<h4>Upcoming Events</h4>
			<p>
				<dl >
					<dt id="fnt1">Poson Dhamma sermon</dt>
					<dd>Most Ven Mawarale Bhaddhiya Thero on the 6th of June at 3.30 PM at the University premises</dd>
					<dt id="fnt1">NSBM Padura</dt>
					<dd>Traditional music event on the 10th of July at 6.30 PM at the University premises </dd>
					<dt id="fnt1">NSBM CodeFest</dt>
					<div id="ComLink"></div>
					<dd>Faculty of computing organise hackathon event on the 20th of August at 9.30 AM at the University premises</dd>
					<dt id="fnt1">DramaFest</dt>
					<dd>Drama club organise drama festival on the 20th of September at 10.00 AM at the University premises </dd>
				</dl>
			</p>

		</div>
		</div>

		<!--Faculty Div-->
		<!--Computing Faculty-->
		<div id="fac1">
		<img src="br.png" alt="Nsbm" style="width:100%; height:20px">

		<div id="fac2">
		<img src="cm.jpg" alt="Nsbm" style="width:100%; height:400px">
		</div>	
		
		<div id="fac3">
			<h4>Academic Years</h4>
			<table id="facTbl">
				<tr style="height: 50px">
					<td id="border"><a href="index.php">Academic Year One</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Two</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Three</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Four</td>
				</tr>
			</table>
			<div id="MgtLink"></div>		
			
		</div>
		</div>

		<!--Management Faculty-->
		<div id="fac1">
		<img src="br.png" alt="Nsbm" style="width:100%; height:20px">		
		<div id="fac3">
			<h4>Academic Years</h4>
			<table id="facTbl">
				<tr style="height: 50px">
					<td id="border">Academic Year One</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Two</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Three</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Four</td>
				</tr>
			</table>
			<div id="EngLink"></div>		
		</div>
		<div id="fac2">
		<img src="mgt.jpg" alt="Nsbm" style="width:100%; height:400px">
		</div>

		</div>

		
		<!--Engineering Faculty-->
		<div id="fac1">
		<img src="br.png" alt="Nsbm" style="width:100%; height:20px">
		<div id="fac2">
		<img src="eng.jpg" alt="Nsbm" style="width:100%; height:400px">
		</div>	
		<div id="fac3">
			<h4>Academic Years</h4>
			<table id="facTbl">
				<tr style="height: 50px">
					<td id="border">Academic Year One</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Two</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Three</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Four</td>
				</tr>

			</table>	
			<div id="MedLink"></div>	
			
		</div>
		</div>

		<!--Medicine Faculty-->
		<div id="fac1">
		<img src="br.png" alt="Nsbm" style="width:100%; height:20px">
		<div id="fac3">
			<h4 >Academic Years</h4>
			<table id="facTbl">
				<tr style="height: 50px">
					<td id="border">Academic Year One</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Two</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Three</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Four</td>
				</tr>
			</table>	
			<div id="PostLink"></div>	
		</div>
		<div id="fac2">
		<img src="med.jpg" alt="Nsbm" style="width:100%; height:400px">
		</div>
		</div>


		<!--Postgraduate Faculty-->
		<div id="fac1">
		<img src="br.png" alt="Nsbm" style="width:100%; height:20px">
		<div id="fac2">
		<img src="pg.jpg" alt="Nsbm" style="width:100%; height:400px">
		</div>	
		<div id="fac3">
			<h4>Academic Years</h4>
			<table id="facTbl">
				<tr style="height: 50px">
					<td id="border">Academic Year One</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Two</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Three</td>
				</tr>
				<tr style="height: 50px">
					<td id="border">Academic Year Four</td>
				</tr>
			</table>		
			
		</div>
		</div>

	
		<!-- Botam panel-->
		<div id="botamDive">
			<p>Copyright © All rights reserved, | Design & Developed by Clamax Software Solution</p>
		</div>	
		<!--End of panels-->
	</div>	

</body>
</html>
<?php
session_destroy();
?>