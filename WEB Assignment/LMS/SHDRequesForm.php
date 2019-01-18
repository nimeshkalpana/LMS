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
		<div id="topDiv1">
			<a href="index.php"><img src="lout.png" alt="doc" class="loutbtn"></a>
		</div>
		<!-- Top panel 2-->
		<div id="topDiv2">
			<a href="NSBM.htm"><div id="topDiv2-1"></div></a>
			<div id="topDiv2-2">
				<ul id="topDiv2-2list">
					<li><a href="NSBM.htm#ComLink">COMPUTING</a></li>
					<li><a href="NSBM.htm#MgtLink">MANAGEMENT</a></li>
					<li><a href="NSBM.htm#EngLink">ENGINERING</a></li>
					<li><a href="NSBM.htm#MedLink">MEDICINE</a></li>
					<li><a href="NSBM.htm#PostLink">POSTGRADUATE</a></li>
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
					<td id="border"><a href="NSBM.htm#ComLink">Faculty of Computing</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="NSBM.htm#MgtLink">Faculty of Management</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="NSBM.htm#EngLink">Faculty of Engineering</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="NSBM.htm#MedLink">Faculty of Medicine</a></td>
				</tr>
				<tr style="height: 50px">
					<td id="border"><a href="NSBM.htm#PostLink">Faculty of Postgraduate</a></td>
				</tr>
				
			</table>				
							
		</div>


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
		<div id="leftDivExtend"></div>
		</div>

		<!-- Middle panel-->
		<div id="middleDive" class="main"> <!--class "main" for scroll navigation bar-->
		<div id="middleDive1" class="mD1Color2"><h3>REQUEST FORMS</h3></div>
		<div id="middleDiveExtend"> 
			<!-- Sign In Form-->
			<div id="middleDiveSignInFrm">
				<p class="frmHead">Sign In Request Form</p>
				<form id="signForm" name="SFrm" method="POST" action="SHDRequesForm.php" onsubmit=" return signfm();">
				<table>
					<tr>
						<td>User ID:</td>
						<td><input type="text" name="uid"></td>
						<td>First Name:</td>
						<td><input type="text" name="fname"></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname"></td>
						<td>Email:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="text" name="gend"></td>
						<td>Birthday:</td>
						<td><input type="text" name="bday"></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="uname"></td>
						<td>Password:</td>
						<td><input type="password" name="psw"></td>
					</tr>		
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td style="text-align: right;"><input type="submit" value="Submit" name="signin">
							<input type="reset" value="Reset"></td>
					</tr>
					
				</table>
			</form>
			</div>
			<!-- Sign In Form php-->
			<?php

				if (isset($_POST['signin'])){

				$id = $_POST["uid"];
				$fname = $_POST["fname"];
				$lname = $_POST["lname"];
				$email = $_POST["email"];
				$gender = $_POST["gend"];
				$bday = $_POST["bday"];
				$uname=$_POST['uname'];//username
				$password=$_POST['psw'];//password 

				$con=mysqli_connect("localhost","root","","nsbmlms");


				$query = "INSERT INTO `login`(`id`, `first_name`, `last_name`, `email`, `gender`, `birthday`, `username`, `password`) VALUES ('$id','$fname','$lname','$email','$gender','$bday','$uname','$password')";

				$resultTwo = mysqli_query($con,$query);

				//mysqli_free_result($resultTwo);
				mysqli_close($con);

				}
			?>

			<div id="middleDive1-1" class="mD1Color2"></div>
			<!-- Socity Form-->
			<div id="middleDiveClubFrm">
				<p class="frmHead">Clubs and Societies Request Form</p>
				<form id="signForm" name="CFrm" method="POST" action="SHDRequesForm.php" onsubmit=" return clubfm();">
				<table>
					<tr>
					    <td>Student ID:</td>
					    <td><input type='text' name='id'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Name:</td>
					    <td><input type='text' name='fname'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Last Name:</td>
					    <td><input type='text' name='lname'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Date Of Birth:</td>
					    <td><input type='text' name='bday'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Phone:</td>
					    <td><input type='text' name='phn'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Email:</td>
					    <td><input type='text' name='email'></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Gender:</td>
					    <td><select name="gen">
					        <option value="Male">Male</option>
					        <option value="Female">Female</option>
					        <option value="Other">Other</option>
					    	</select>
					    </td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					    <td>Select Club or Society:</td>
					    <td><select name="clb">
					        <option value="Buddhist Society">Buddhist Society</option>
					        <option value="Green Task Force">Green Task Force</option>
					        <option value="Media Club">Media Club</option>
					        <option value="Leo Club">Leo Club</option>
					        <option value="Gavel Club">Gavel Club</option>
					        <option value="Cotholic Society">Cotholic Society</option>
					        <option value="AIESEC">AIESEC</option>
					    	</select>
					    </td>
					    <td style="text-align: right;"><input type="submit" value="Apply" name="ClubApply">
							<input type="reset" value="Reset"></td>
					</tr>

				</table>
				</form>
			</div>
			<!-- Socity Form PHP-->
			<?php

				if (isset($_POST['ClubApply'])){

				$id = $_POST["id"];
				$fname = $_POST["fname"];
				$lname = $_POST["lname"];
				$bday = $_POST["bday"];
				$phn = $_POST["phn"];
				$email = $_POST["email"];
				$gender = $_POST["gen"];
				$club = $_POST["clb"]; 

				$con=mysqli_connect("localhost","root","","nsbmlms");


				$query = "INSERT INTO `society`(`sid`, `first_name`, `last_name`, `birthday`, `phone`, `email`, `gender`, `cloub_society`) VALUES ('$id','$fname','$lname','$bday','$phn','$email','$gender','$club')";

				$resultTh = mysqli_query($con,$query);

				//mysqli_free_result($resultTh);
				mysqli_close($con);

				}
			?>


		</div>
		

		</div>

		<!-- Right panel-->
		<div id="left-rightDive" class="main"> <!--class "main" for scroll navigation bar-->
		<!-- Right panel Div 1-->
		<div id="righttDive1">
			<h4>Student Help Desk</h4>
			<table id="rightDiv1Tbl">
					<tr style="height: 40px">
						<td id="border"><a href="SHDLecHall.htm">Lecture Hall Allocation</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="SHDStudentSocites.htm">Student Socites</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="SHDExamTimetable.htm">Exam Time Tables</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="SHDSemesterTimeTable.htm">Semester Time tables</a></td>
					</tr>
					
					<tr style="height: 40px">
						<td id="border"><a href="SHDRequesForm.htm">Request Forms</a></td>
					</tr>
					<tr style="height: 40px">
						<td id="border"><a href="SHDPublications.htm">University Publications</a></td>
					</tr>
			</table>
		</div>
		<!-- Right panel Div 2-->
		<div id="righttDive2"></div>
		</div>


	
		<!-- Botam panel-->
		<div id="botamDive">
			<p>Copyright © All rights reserved, | Design & Developed by Clamax Software Solution</p>
		</div>	
		<!--End of panels-->
	</div>	

</body>
</html>