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
		<div id="middleDive1" class="mD1Color2"><h3>LMS DASHBOARD</h3></div>
		<div id="middleDiveExtend"> 
			<!-- File Upload Form-->
			<div id="middleDiveFileUploadFrm">
				<p class="frmHead">Upload File Here</p>
				<form id="uloadForm" name="UFrm" method="POST" action="Dashboard.php" enctype="multipart/form-data" onsubmit=" return uloadfm();">
				<table>
					<tr>
						<td>Select File:</td>
						<td><input type="File" name="myfile" size="50" value="UploadFile"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Upload"></td>	
					</tr>
				</table>
			</form>
			</div>
			<!-- File Upload PHP-->
			<?php

				if (isset($_FILES['myfile'])) {

				$name = $_FILES['myfile']['name'];
				$tmp_name = $_FILES['myfile']['tmp_name'];
									
				$location = 'files/';
				move_uploaded_file($tmp_name,$location.$name);
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