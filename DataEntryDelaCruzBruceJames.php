<!DOCTYPE html>
<html>
<head>
	<title>Machine Problem #3 | PHP</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<style>
	hr {
		height: 1px;
		background-color: green;
	}
	h1 {
		color: green;
	}
	.input-group {
		padding-top: 10px;
	}
	table {
		width: 100%;
		empty-cells: hide;
	}
	td {
		text-align: left;
	}
	table, td {
		border: 1px solid #000
	}
	th, td {
		padding: 5px;
	}
	#name {
		width: 100%;
	}
	#select {
		width: 100%;
	}

</style>
<body>

<?php

	if(isset($_POST['submit']))
	{
		$name       = $_POST['name'];
		$course     = $_POST['course'];
		$year       = $_POST['year'];
		$section    = $_POST['section'];
		$subject    = $_POST['subject'];
		$term       = $_POST['radio'];
		$q1         = $_POST['q1'];
		$q2         = $_POST['q2'];
		$q3         = $_POST['q3'];
		$le1        = $_POST['le1'];
		$le2        = $_POST['le2'];
		$le3        = $_POST['le3'];
		$le4        = $_POST['le4'];
		$le5        = $_POST['le5'];
		$attendance = $_POST['attendance'];
		$attitude   = $_POST['attitude'];
		$sw         = $_POST['sw'];
		$ass        = $_POST['ass'];
		$majorExam  = $_POST['majorExam'];
		$labExam    = $_POST['labExam'];

	}


?>

	<div>
		<form action="ComputedGradeDelaCruzBruceJames.php" method="post">
			<div class="container-fluid">
				<div class="form-row">
					<div class="col-sm-12">

						<center>
							<h1>RICHARD GWAPO UNIVERSITY</h1>
							<b><p>Forever Gwapo St., Mandaluyong City</p>
							<p>Telephone #: 143-4456</p></b>
						</center>

							<hr>

					</div>

					<div class="col-sm-3"></div>

					<div class="col-sm-6">
						
						<center>
						<h2>ON-LINE GRADE COMPUTATION</h2>
						</center>

						<br>

						<center>
						<table>

							<tr>
								<td>Student Name: </td>
								<td colspan="5"><input class="form-control" type="text" name="name" id="name" placeholder="Format: Juan Dela Cruz" required></td>
							</tr>

							<tr>
								<td>Course: </td>
								<td><select class="	custom-select" id="select" name="course" required>
									<option selected>BSIT</option>
									<option class="1">BSCS</option>
									<option class="2">BSIS</option>
									</select>
								</td>
								<td>Year: </td>
								<td>
									<select class="custom-select" id="select" name="year" required>
									<option selected>1</option>
									<option class="1">2</option>
									<option class="2">3</option>
									<option class="3">4</optgroup>
									</select>
								</td>
								<td>Section: </td>
								<td>
									<select class="custom-select" id="select" name="section" required>
									<option selected>A</option>
									<option class="1">B</option>
									<option class="2">C</option>
									</select>
								</td>					
							</tr>

							<tr>
								<td>Subject: </td>
								<td colspan="5">
									<select class="custom-select" id="select" name="subject" required>
									<option selected>Web Programming</option>
									<option class="1">Object Oriented Programming</option>
									<option class="2">Fundamentals of Programming</option>
									</select>
								</td>	
							</tr>

							<tr>
								<td>Term/Period: </td>
								<td colspan="2">
									<div class="form-check-inline" name="term">
										<input class="form-check-input" type="radio" name="radio" value="Midterm" required>
										<label class="form-check-label">Midterm</label>
									</div>
								</td>
								<td colspan="3">
									<div class="form-check-inline" name="term">
										<input class="form-check-input" type="radio" name="radio" value="Final" required>
										<label class="form-check-label">Final</label>
									</div>
								</td>
							</tr>

						</table>
						</center>

						<br>
						<br>

						<center>
							<table>

								<tr>
									<th class="text-center" colspan="8">GRADE INFORMATION</th>
								</tr>

								<tr>
									<td class="text-center" colspan="2">KNOWLEDGE 30%</td>
									<td style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">SKILLS 50%</td>
									<td style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">VALUES 20%</td>
								</tr>

								<tr>
									<td class="text-center" colspan="2">Quizzes 30%</td>
									<td width="100px" style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">Laboratory Exercises 30%</td>
									<td width="100px" style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">Attendance 10%</td>
								</tr>

								<tr>
									<td>Q1</td>
									<td><input class="form-control" type="text" name="q1" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>LE1</td>
									<td><input class="form-control" type="text" name="le1" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>GRADE</td>
									<td><input class="form-control" type="text" name="attendance" required></td>
								</tr>

								<tr>
									<td>Q2</td>
									<td><input class="form-control" type="text" name="q2" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>LE2</td>
									<td><input class="form-control" type="text" name="le2" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">Attitude 10%</td>
								</tr>

								<tr>
									<td>Q3</td>
									<td><input class="form-control" type="text" name="q3" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>LE3</td>
									<td><input class="form-control" type="text" name="le3" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>GRADE</td>
									<td><input class="form-control" type="text" name="attitude" required></td>
								</tr>

								<tr>
									<td class="text-center" colspan="2">Seatworks/Assignments 10%</td>
									<td style="border-bottom-style: hidden;"></td>
									<td>LE4</td>
									<td><input class="form-control" type="text" name="le4" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td colspan="2" style="border-bottom-style: hidden;"></td>
								</tr>

								<tr>
									<td>SW</td>
									<td><input class="form-control" type="text" name="sw" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td>LE5</td>
									<td><input class="form-control" type="text" name="le5" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td colspan="2" style="border-bottom-style: hidden;"></td>
								</tr>

								<tr>
									<td>ASS</td>
									<td><input class="form-control" type="text" name="ass" required></td>
									<td style="border-bottom-style: hidden;"></td>
									<td colspan="2"></td>
									<td style="border-bottom-style: hidden;"></td>
									<td colspan="2" style="border-bottom-style: hidden;"></td>
								</tr>

								<tr>
									<td class="text-center" colspan="2">Major Examinations 60%</td>
									<td style="border-bottom-style: hidden;"></td>
									<td class="text-center" colspan="2">Laboratory Examinations 70%</td>
									<td style="border-bottom-style: hidden;"></td>
									<td colspan="2" style="border-bottom-style: hidden;"></td>
								</tr>

								<tr>
									<td>GRADE</td>
									<td><input class="form-control" type="text" name="majorExam" required></td>
									<td></td>
									<td>GRADE</td>
									<td><input class="form-control" type="text" name="labExam" required></td>
									<td></td>
									<td colspan="2">
										<center>
										<input class="btn btn-primary" type="submit" name="submit" value="Submit">
										<input class="btn btn-secondary ml-2" type="reset" name="reset" value="Reset">
										</center>
									</td>
								</tr>

								</table>
						</center>

					</div>

					<div class="col-sm-3"></div>

				</div>
			</div>
		</form>
	</div>



</body>
</html>