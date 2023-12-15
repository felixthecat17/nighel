<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Faculty Evaluation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    

    </style>
</head>
<body>

<div class="form-container">
	<form method="post" action="process_form.php">
		
			<div class="time-container">
				<label for="time" class="right-label">Time:</label>&nbsp;&nbsp;
				<span id="timePlaceholder" class="right-label"></span>
			</div>
			
			<h1>SUPPORT STAFF EVALUATION FORM</h1>
		
				<p>
					<label for="name" class="left-label">Name of Evaluator :</label>
					<input type="text" id="Uname" name="Uname" class="semi-small-input">
				
				</p>
				<p>
					<label for="subject" class="left-label">Subject of Instruction:</label>
					<input type="text" id="subjectc" name="subjectc" class="semi-small-input">
					
				</p>
				
				<br>
				<p>Rating Scale:</p>
				<p>4 - HIGHLY EFFECTIVE</p>
				<p>3 - EFFECTIVE</p>
				<p>2 - MINIMALLY EFFECTIVE</p>
				<p>1 - INEFFECTIVE</p>
			
			
				<br>
				<table>
					<tr>
						<th><strong>THE REGISTRAR</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Maintains good public relations with the school publics and sees to it that they are attended to with dispatch.</td>
						<td><input type="checkbox" name="rating1" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 4);"></td>
						<td><input type="checkbox" name="rating1" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 3);"></td>
						<td><input type="checkbox" name="rating1" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 2);"></td>
						<td><input type="checkbox" name="rating1" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 1);"></td>
					</tr>
					<tr>
						<td>Maintains complete records of students, systematically arranged and well secured.</td>
						<td><input type="checkbox" name="rating2" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 4);"></td>
						<td><input type="checkbox" name="rating2" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 3);"></td>
						<td><input type="checkbox" name="rating2" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 2);"></td>
						<td><input type="checkbox" name="rating2" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 1);"></td>
					</tr>
					<tr>
						<td>Maintains confidentiality of all student records.</td>
						<td><input type="checkbox" name="rating3" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 4);"></td>
						<td><input type="checkbox" name="rating3" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 3);"></td>
						<td><input type="checkbox" name="rating3" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 2);"></td>
						<td><input type="checkbox" name="rating3" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 1);"></td>
					</tr>
					<tr>
						<td>Sees to the release of any students or school record to any person or entity subject to the prior consent and approval of the president.</td>
						<td><input type="checkbox" name="rating4" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 4);"></td>
						<td><input type="checkbox" name="rating4" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 3);"></td>
						<td><input type="checkbox" name="rating4" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 2);"></td>
						<td><input type="checkbox" name="rating4" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 1);"></td>
					</tr>
				
					<tr>
						<th><strong>School Plant and Facilities/ Property</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Effective planning and supervising of the maintenance of school facilities.</td>
						<td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(5, 4);"></td>
						<td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(5, 3);"></td>
						<td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(5, 2);"></td>
						<td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(5, 1);"></td>
					</tr>
					<tr>
						<td>Efficient scheduling and use of school facilities.</td>
						<td><input type="checkbox" name="rating6" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(6, 4);"></td>
						<td><input type="checkbox" name="rating6" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(6, 3);"></td>
						<td><input type="checkbox" name="rating6" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(6, 2);"></td>
						<td><input type="checkbox" name="rating6" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(6, 1);"></td>
					</tr>
					<tr>
						<td>The identification, proposal, and planning of construction needs.</td>
						<td><input type="checkbox" name="rating7" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(7, 4);"></td>
						<td><input type="checkbox" name="rating7" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(7, 3);"></td>
						<td><input type="checkbox" name="rating7" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(7, 2);"></td>
						<td><input type="checkbox" name="rating7" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(7, 1);"></td>
					</tr>
					<tr>
						<td>The achievement of effective security and emergency evacuation procedures.</td>
						<td><input type="checkbox" name="rating8" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(8, 4);"></td>
						<td><input type="checkbox" name="rating8" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(8, 3);"></td>
						<td><input type="checkbox" name="rating8" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(8, 2);"></td>
						<td><input type="checkbox" name="rating8" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(8, 1);"></td>
					</tr>
					<tr>
						<td>Effectiveness in planning and implementing transportation procedures and resolving related problems.</td>
						<td><input type="checkbox" name="rating9" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(9, 4);"></td>
						<td><input type="checkbox" name="rating9" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(9, 3);"></td>
						<td><input type="checkbox" name="rating9" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(9, 2);"></td>
						<td><input type="checkbox" name="rating9" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(9, 1);"></td>
					</tr>
						
				
					<tr>
						<th><strong>Student Personnel Services :</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Effectively orients students.</td>
						<td><input type="checkbox" name="rating10" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(10, 4);"></td>
						<td><input type="checkbox" name="rating10" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(10, 3);"></td>
						<td><input type="checkbox" name="rating10" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(10, 2);"></td>
						<td><input type="checkbox" name="rating10" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(10, 1);"></td>
					</tr>
					<tr>
						<td>Maintains desired standards of student behavior.</td>
						<td><input type="checkbox" name="rating11" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(11, 4);"></td>
						<td><input type="checkbox" name="rating11" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(11, 3);"></td>
						<td><input type="checkbox" name="rating11" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(11, 2);"></td>
						<td><input type="checkbox" name="rating11" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(11, 1);"></td>
					</tr>
					<tr>
						<td>Effectively copes with student behavior problems.</td>
						<td><input type="checkbox" name="rating12" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(12, 4);"></td>
						<td><input type="checkbox" name="rating12" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(12, 3);"></td>
						<td><input type="checkbox" name="rating12" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(12, 2);"></td>
						<td><input type="checkbox" name="rating12" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(12, 1);"></td>
					</tr>
					<tr>
						<td>Develop and implement procedures for monitoring and reporting student attendance and tardiness.</td>
						<td><input type="checkbox" name="rating13" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(13, 4);"></td>
						<td><input type="checkbox" name="rating13" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(13, 3);"></td>
						<td><input type="checkbox" name="rating13" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(13, 2);"></td>
						<td><input type="checkbox" name="rating13" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(13, 1);"></td>
					</tr>
					<tr>
						<td>Effectively counsels students and parents.</td>
						<td><input type="checkbox" name="rating14" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(14, 4);"></td>
						<td><input type="checkbox" name="rating14" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(14, 3);"></td>
						<td><input type="checkbox" name="rating14" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(14, 2);"></td>
						<td><input type="checkbox" name="rating14" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(14, 1);"></td>
					</tr>
					<tr>
						<td>Administers school policies to ensure due process to all concerned.</td>
						<td><input type="checkbox" name="rating15" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(15, 4);"></td>
						<td><input type="checkbox" name="rating15" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(15, 3);"></td>
						<td><input type="checkbox" name="rating15" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(15, 2);"></td>
						<td><input type="checkbox" name="rating15" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(15, 1);"></td>
					</tr>
					<tr>
						<td>Maintains a comprehensive program of student services including guidance, health, food, transportation, accounting, and admission/orientation.</td>
						<td><input type="checkbox" name="rating16" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(16, 4);"></td>
						<td><input type="checkbox" name="rating16" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(16, 3);"></td>
						<td><input type="checkbox" name="rating16" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(16, 2);"></td>
						<td><input type="checkbox" name="rating16" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(16, 1);"></td>
					</tr>


					<tr>
						<th><strong>Student Activity Program:</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>The effective day-to-day supervision of the extracurricular activity program.</td>
						<td><input type="checkbox" name="rating17" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(17, 4);"></td>
						<td><input type="checkbox" name="rating17" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(17, 3);"></td>
						<td><input type="checkbox" name="rating17" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(17, 2);"></td>
						<td><input type="checkbox" name="rating17" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(17, 1);"></td>
					</tr>
					<tr>
						<td>The enforcement of the regulations of the state activity association.</td>
						<td><input type="checkbox" name="rating18" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(18, 4);"></td>
						<td><input type="checkbox" name="rating18" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(18, 3);"></td>
						<td><input type="checkbox" name="rating18" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(18, 2);"></td>
						<td><input type="checkbox" name="rating18" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(18, 1);"></td>
					</tr>
					<tr>
						<td>The preparation and monitoring of the school activity calendar.</td>
						<td><input type="checkbox" name="rating19" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(19, 4);"></td>
						<td><input type="checkbox" name="rating19" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(19, 3);"></td>
						<td><input type="checkbox" name="rating19" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(19, 2);"></td>
						<td><input type="checkbox" name="rating19" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(19, 1);"></td>
					</tr>
					<tr>
						<td>The satisfactory resolution of the problems that arise from the activity program.</td>
						<td><input type="checkbox" name="rating20" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(20, 4);"></td>
						<td><input type="checkbox" name="rating20" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(20, 3);"></td>
						<td><input type="checkbox" name="rating20" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(20, 2);"></td>
						<td><input type="checkbox" name="rating20" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(20, 1);"></td>
					</tr>
					<tr>
						<td>The effective maintenance of approved budgeting/accounting procedures for student activity funds.</td>
						<td><input type="checkbox" name="rating21" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(21, 4);"></td>
						<td><input type="checkbox" name="rating21" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(21, 3);"></td>
						<td><input type="checkbox" name="rating21" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(21, 2);"></td>
						<td><input type="checkbox" name="rating21" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(21, 1);"></td>
					</tr>
					<tr>
						<td>Leadership in implementing the extracurricular program including attending and sponsoring appropriate student activities.</td>
						<td><input type="checkbox" name="rating22" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(22, 4);"></td>
						<td><input type="checkbox" name="rating22" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(22, 3);"></td>
						<td><input type="checkbox" name="rating22" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(22, 2);"></td>
						<td><input type="checkbox" name="rating22" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(22, 1);"></td>
					</tr>
					<tr>
						<td>The maintenance of a balanced activity program in terms of the breadth of offerings and student participation in the various offerings.</td>
						<td><input type="checkbox" name="rating23" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(23, 4);"></td>
						<td><input type="checkbox" name="rating23" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(23, 3);"></td>
						<td><input type="checkbox" name="rating23" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(23, 2);"></td>
						<td><input type="checkbox" name="rating23" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(23, 1);"></td>
					</tr>

		
					<tr>
						<th><strong>Fiscal Management/Finance Officer:</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Effective direction and monitoring of fiscal/accounting procedures as prescribed by the board, state agencies, and the administrative offices.</td>
						<td><input type="checkbox" name="rating24" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(24, 4);"></td>
						<td><input type="checkbox" name="rating24" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(24, 3);"></td>
						<td><input type="checkbox" name="rating24" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(24, 2);"></td>
						<td><input type="checkbox" name="rating24" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(24, 1);"></td>
					</tr>
					<tr>
						<td>The effective administration of the school budget.</td>
						<td><input type="checkbox" name="rating25" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(25, 4);"></td>
						<td><input type="checkbox" name="rating25" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(25, 3);"></td>
						<td><input type="checkbox" name="rating25" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(25, 2);"></td>
						<td><input type="checkbox" name="rating25" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(25, 1);"></td>
					</tr>
					<tr>
						<td>The efficient preparation, monitoring, and implementation of budget requests.</td>
						<td><input type="checkbox" name="rating26" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(26, 4);"></td>
						<td><input type="checkbox" name="rating26" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(26, 3);"></td>
						<td><input type="checkbox" name="rating26" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(26, 2);"></td>
						<td><input type="checkbox" name="rating26" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(26, 1);"></td>
					</tr>
					<tr>
						<td>An ability to secure adequate financial resources and support.</td>
						<td><input type="checkbox" name="rating27" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(27, 4);"></td>
						<td><input type="checkbox" name="rating27" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(27, 3);"></td>
						<td><input type="checkbox" name="rating27" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(27, 2);"></td>
						<td><input type="checkbox" name="rating27" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(27, 1);"></td>
					</tr>
					<tr>
						<td>Promptness of service (extent to which staff are always available to serve).</td>
						<td><input type="checkbox" name="rating28" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(28, 4);"></td>
						<td><input type="checkbox" name="rating28" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(28, 3);"></td>
						<td><input type="checkbox" name="rating28" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(28, 2);"></td>
						<td><input type="checkbox" name="rating28" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(28, 1);"></td>
					</tr>
					<tr>
						<td>Accuracy and consistency of service (extent to which rules, policies, and procedures are implemented uniformly).</td>
						<td><input type="checkbox" name="rating29" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(29, 4);"></td>
						<td><input type="checkbox" name="rating29" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(29, 3);"></td>
						<td><input type="checkbox" name="rating29" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(29, 2);"></td>
						<td><input type="checkbox" name="rating29" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(29, 1);"></td>
					</tr>
					<tr>
						<td>Information dissemination (extent to which vital information regarding financial matters is made: changes in deadline, etc.)</td>
						<td><input type="checkbox" name="rating30" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(30, 4);"></td>
						<td><input type="checkbox" name="rating30" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(30, 3);"></td>
						<td><input type="checkbox" name="rating30" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(30, 2);"></td>
						<td><input type="checkbox" name="rating30" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(30, 1);"></td>
					</tr>
					<tr>
						<td>Courtesy and helpfulness of staff members.</td>
						<td><input type="checkbox" name="rating31" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(31, 4);"></td>
						<td><input type="checkbox" name="rating31" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(31, 3);"></td>
						<td><input type="checkbox" name="rating31" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(31, 2);"></td>
						<td><input type="checkbox" name="rating31" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(31, 1);"></td>
					</tr>

					<tr>
						<th><strong>Health Services: The personnel</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Overall effectiveness in managing fiscal responsibilities.</td>
						<td><input type="checkbox" name="rating32" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(32, 4);"></td>
						<td><input type="checkbox" name="rating32" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(32, 3);"></td>
						<td><input type="checkbox" name="rating32" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(32, 2);"></td>
						<td><input type="checkbox" name="rating32" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(32, 1);"></td>
					</tr>
					<tr>
						<td>Timeliness and accuracy of financial reports.</td>
						<td><input type="checkbox" name="rating33" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(33, 4);"></td>
						<td><input type="checkbox" name="rating33" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(33, 3);"></td>
						<td><input type="checkbox" name="rating33" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(33, 2);"></td>
						<td><input type="checkbox" name="rating33" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(33, 1);"></td>
					</tr>
					<tr>
						<td>The effective use of financial data for decision-making purposes.</td>
						<td><input type="checkbox" name="rating34" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(34, 4);"></td>
						<td><input type="checkbox" name="rating34" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(34, 3);"></td>
						<td><input type="checkbox" name="rating34" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(34, 2);"></td>
						<td><input type="checkbox" name="rating34" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(34, 1);"></td>
					</tr>
					<tr>
						<td>The establishment and maintenance of an effective system of internal controls.</td>
						<td><input type="checkbox" name="rating35" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(35, 4);"></td>
						<td><input type="checkbox" name="rating35" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(35, 3);"></td>
						<td><input type="checkbox" name="rating35" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(35, 2);"></td>
						<td><input type="checkbox" name="rating35" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(35, 1);"></td>
					</tr>
					<tr>
						<td>The ability to work effectively with auditors.</td>
						<td><input type="checkbox" name="rating36" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(36, 4);"></td>
						<td><input type="checkbox" name="rating36" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(36, 3);"></td>
						<td><input type="checkbox" name="rating36" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(36, 2);"></td>
						<td><input type="checkbox" name="rating36" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(36, 1);"></td>
					</tr>
			
					<tr>
						<th><strong>Library: The personnel</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Schedules and gives orientation to students.</td>
						<td><input type="checkbox" name="rating37" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(37, 4);"></td>
						<td><input type="checkbox" name="rating37" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(37, 3);"></td>
						<td><input type="checkbox" name="rating37" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(37, 2);"></td>
						<td><input type="checkbox" name="rating37" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(37, 1);"></td>d>
					</tr>
					<tr>
						<td>Keeps students informed of new acquisitions of print and non-print materials.</td>
						<td><input type="checkbox" name="rating38" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(38, 4);"></td>
						<td><input type="checkbox" name="rating38" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(38, 3);"></td>
						<td><input type="checkbox" name="rating38" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(38, 2);"></td>
						<td><input type="checkbox" name="rating38" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(38, 1);"></td>
					</tr>
					<tr>
						<td>Guides teacher and students in the selection of references based on their needs, interests, abilities, and maturity.</td>
						<td><input type="checkbox" name="rating39" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(39, 4);"></td>
						<td><input type="checkbox" name="rating39" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(39, 3);"></td>
						<td><input type="checkbox" name="rating39" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(39, 2);"></td>
						<td><input type="checkbox" name="rating39" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(39, 1);"></td>
					</tr>
					<tr>
						<td>Helps students develop desirable attitudes in the care of books, materials, and equipment.</td>
						<td><input type="checkbox" name="rating40" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(40, 4);"></td>
						<td><input type="checkbox" name="rating40" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(40, 3);"></td>
						<td><input type="checkbox" name="rating40" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(40, 2);"></td>
						<td><input type="checkbox" name="rating40" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(40, 1);"></td>
					</tr>
					<tr>
						<td>Maintains accurate library records and statistics on the use of materials.</td>
						<td><input type="checkbox" name="rating41" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(41, 4);"></td>
						<td><input type="checkbox" name="rating41" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(41, 3);"></td>
						<td><input type="checkbox" name="rating41" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(41, 2);"></td>
						<td><input type="checkbox" name="rating41" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(41, 1);"></td>
					</tr>
					<tr>
						<td>Classifies catalogues and organizes materials according to a standard classification system for easy accessibility.</td>
						<td><input type="checkbox" name="rating42" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(42, 4);"></td>
						<td><input type="checkbox" name="rating42" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(42, 3);"></td>
						<td><input type="checkbox" name="rating42" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(42, 2);"></td>
						<td><input type="checkbox" name="rating42" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(42, 1);"></td>
					</tr>
					<tr>
						<td>Determine instructional needs within the library program by consulting with the library advocacy committee.</td>
						<td><input type="checkbox" name="rating43" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(43, 4);"></td>
						<td><input type="checkbox" name="rating43" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(43, 3);"></td>
						<td><input type="checkbox" name="rating43" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(43, 2);"></td>
						<td><input type="checkbox" name="rating43" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(43, 1);"></td>
					</tr>
		
					<tr>
						<th><strong>Guidance Personnel</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Properly documents counselling sessions.</td>
						<td><input type="checkbox" name="rating44" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(44, 4);"></td>
						<td><input type="checkbox" name="rating44" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(44, 3);"></td>
						<td><input type="checkbox" name="rating44" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(44, 2);"></td>
						<td><input type="checkbox" name="rating44" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(44, 1);"></td>
					</tr>
					<tr>
						<td>Uses appropriate counseling processes and techniques for individual and group sessions.</td>
						<td><input type="checkbox" name="rating45" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(45, 4);"></td>
						<td><input type="checkbox" name="rating45" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(45, 3);"></td>
						<td><input type="checkbox" name="rating45" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(45, 2);"></td>
						<td><input type="checkbox" name="rating45" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(45, 1);"></td>
					</tr>
					<tr>
						<td>Assists students in selecting programs of study to enhance career planning.</td>
						<td><input type="checkbox" name="rating46" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(46, 4);"></td>
						<td><input type="checkbox" name="rating46" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(46, 3);"></td>
						<td><input type="checkbox" name="rating46" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(46, 2);"></td>
						<td><input type="checkbox" name="rating46" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(46, 1);"></td>
					</tr>
					<tr>
						<td>Provides interventions and supports in crisis situations.</td>
						<td><input type="checkbox" name="rating47" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(47, 4);"></td>
						<td><input type="checkbox" name="rating47" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(47, 3);"></td>
						<td><input type="checkbox" name="rating47" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(47, 2);"></td>
						<td><input type="checkbox" name="rating47" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(47, 1);"></td>
					</tr>
					<tr>
						<td>Consults and collaborates effectively with parents, staffs, and community resources.</td>
						<td><input type="checkbox" name="rating48" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(48, 4);"></td>
						<td><input type="checkbox" name="rating48" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(48, 3);"></td>
						<td><input type="checkbox" name="rating48" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(48, 2);"></td>
						<td><input type="checkbox" name="rating48" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(48, 1);"></td>
					</tr>
					<tr>
						<td>Interprets achievement and aptitude test data to assist school staff with curriculum planning.</td>
						<td><input type="checkbox" name="rating49" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(49, 4);"></td>
						<td><input type="checkbox" name="rating49" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(49, 3);"></td>
						<td><input type="checkbox" name="rating49" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(49, 2);"></td>
						<td><input type="checkbox" name="rating49" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(49, 1);"></td>
					</tr>
					
					<tr>
						<td>Assists teachers with integration of guidance activities into the curriculum.</td>
						<td><input type="checkbox" name="rating50" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(50, 4);"></td>
						<td><input type="checkbox" name="rating50" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(50, 3);"></td>
						<td><input type="checkbox" name="rating50" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(50, 2);"></td>
						<td><input type="checkbox" name="rating50" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(50, 1);"></td>
					</tr>
					<tr>
						<td>Maintains confidentiality of information.</td>
						<td><input type="checkbox" name="rating51" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(51, 4);"></td>
						<td><input type="checkbox" name="rating51" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(51, 3);"></td>
						<td><input type="checkbox" name="rating51" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(51, 2);"></td>
						<td><input type="checkbox" name="rating51" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(51, 1);"></td>
					</tr>

					<tr>
						<th><strong>Campus Ministry: The officer</strong></th>
						
						<th>4</th>
						<th>3</th>
						<th>2</th>
						<th>1</th>
					</tr>
					<tr>
						<td>Oversees the planning of school liturgies, prayer services.</td>
						<td><input type="checkbox" name="rating52" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(52, 4);"></td>
						<td><input type="checkbox" name="rating52" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(52, 3);"></td>
						<td><input type="checkbox" name="rating52" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(52, 2);"></td>
						<td><input type="checkbox" name="rating52" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(52, 1);"></td>

					</tr>
					<tr>
						<td>Communicates with the chaplain regarding the services of the school.</td>
						<td><input type="checkbox" name="rating53" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(53, 4);"></td>
						<td><input type="checkbox" name="rating53" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(53, 3);"></td>
						<td><input type="checkbox" name="rating53" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(53, 2);"></td>
						<td><input type="checkbox" name="rating53" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(53, 1);"></td>
					</tr>
					<tr>
						<td>Develops and directs recollection and retreat programs.</td>
						<td><input type="checkbox" name="rating54" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(54, 4);"></td>
						<td><input type="checkbox" name="rating54" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(54, 3);"></td>
						<td><input type="checkbox" name="rating54" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(54, 2);"></td>
						<td><input type="checkbox" name="rating54" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(54, 1);"></td>
					</tr>
					<tr>
						<td>Provides pastoral support as requested by staff, teachers, students in cooperation with the Chaplain.</td>
						<td><input type="checkbox" name="rating55" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(55, 4);"></td>
						<td><input type="checkbox" name="rating55" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(55, 3);"></td>
						<td><input type="checkbox" name="rating55" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(55, 2);"></td>
						<td><input type="checkbox" name="rating55" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(55, 1);"></td>
					</tr>
					<tr>
						<td>Collaborates with the local church to provide faith formation activities on campus and in parishes and Diocese.</td>
						<td><input type="checkbox" name="rating56" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(56, 4);"></td>
						<td><input type="checkbox" name="rating56" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(56, 3);"></td>
						<td><input type="checkbox" name="rating56" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(56, 2);"></td>
						<td><input type="checkbox" name="rating56" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(56, 1);"></td>
					</tr>

			</table>
			
					<div class="form-button"><br>
					<button type="submit" name="submit">Submit</button>
					</div>
		</form>
    
</div>

    <script>
        function uncheckOther(checkbox) {
            if (checkbox.checked) {
                const checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        }
		    // JavaScript for automatic time
        const timePlaceholder = document.getElementById("timePlaceholder");

        function updateTime() {
            const now = new Date();
            const time = now.toLocaleTimeString('en-US');
            timePlaceholder.textContent = time;
        }

        updateTime(); // Call the function once to set the initial time
        setInterval(updateTime, 1000); // Update the time every second

		// to save the choice of the user
        
        function updateTotals(category, value) {
            const checkboxes = document.querySelectorAll(`input[name="rating${category}"]`);

            checkboxes.forEach((checkbox) => {
                // Set the value of the selected checkbox to 1, others to 0
                checkbox.value = (checkbox === event.target) ? value : 0;

                // Uncheck other checkboxes
                checkbox.checked = (checkbox === event.target);
            });

            updateTotal(category);
        }
    </script>
</body>
</html>
