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
	

	$quiz = ($_POST['q1'] + $_POST['q2'] + $_POST['q3']) / 300 * 100;
	$finalQuiz = number_format($quiz, 2, '.', '');
	$sw = ($_POST['sw'] + $_POST['ass']) / 200 * 100;
	$majorExam = $_POST['majorExam'];
	$aveKnowledge = ($quiz + $sw + $majorExam) / 3;
	$finalKnowledge = number_format($aveKnowledge, 2, '.', '');

	$labExer = ($_POST['le1'] + $_POST['le2'] + $_POST['le3'] + $_POST['le4'] + $_POST['le5']) / 500 * 100;
	$finalLab = number_format($labExer, 2, '.', '');
	$labExam = $_POST['labExam'];
	$aveSkills = ($labExer + $labExam) / 2;
	$finalSkills = number_format($aveSkills, 2, '.', '');

	$attendance = $_POST['attendance'];
	$attitude = $_POST['attitude'];
	$aveValues = ($attendance + $attitude) / 2;
	$finalValues = number_format($aveValues, 2, '.', '');

	$grade = ($finalKnowledge + $finalSkills + $finalValues) / 3;
	$finalGrade = number_format($grade, 2, '.', '');


	$remarks = " ";

	if($grade >= 76)
	{
		$remarks = "Passed";
	}else {
		$remarks = "Failed";
	}

?>

<div>
	<form>
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
					
					<table>

						<tr>
							<td class="text-center" colspan="14"><b><?php echo $_POST['radio'] . " Period"; ?></b></td>
						</tr>

						<tr>
							<td rowspan="2" class="text-center" width="165px">Name</td>
							<td colspan="3" class="text-center">KNOWLEDGE 30%</td>
							<td rowspan="2" class="text-center" width="70px">AVE</td>
							<td colspan="2" class="text-center">SKILLS 50%</td>
							<td rowspan="2" class="text-center" width="70px">AVE</td>
							<td colspan="2" class="text-center">VALUES 20%</td>
							<td rowspan="2" class="text-center" width="70px">AVE</td>
							<td rowspan="2" class="text-center"><?php echo $_POST['radio'] ?> Grade</td>
							<td rowspan="2" class="text-center" width="70px">Remarks</td>
						</tr>

						<tr>
							<td class="text-center" width="70px">Quiz</td>
							<td class="text-center" width="70px">SW/Ass</td>
							<td class="text-center" width="70px">Major Exam</td>
							<td class="text-center" width="70px">Lab. Exer</td>
							<td class="text-center" width="70px">Lab. Exam</td>
							<td class="text-center" width="70px">Attendance</td>
							<td class="text-center" width="80px" >Attitude</td>
						</tr>

						<tr>
							<td><input class="form-control" type="text" name="name" value="<?php echo $_POST['name']; ?>" readonly></td>
							<td><input class="form-control" type="text" name="finalQuiz" value="<?php echo $finalQuiz; ?>" readonly></td>
							<td><input class="form-control" type="text" name="sw" value="<?php echo $sw; ?>" readonly></td>
							<td><input class="form-control" type="text" name="majorExam" value="<?php echo $majorExam; ?>" readonly></td>
							<td><input  class="form-control" type="text" name="finalKnowledge" value="<?php echo $finalKnowledge; ?>" readonly></td>
							<td><input class="form-control" type="text" name="finalLab" value="<?php echo $finalLab; ?>" readonly></td>
							<td><input class="form-control" type="text" name="labExam" value="<?php echo $labExam; ?>" readonly></td>
							<td><input class="form-control" type="text" name="finalSkills" value="<?php echo $finalSkills; ?>" readonly></td>
							<td><input class="form-control" type="text" name="attendance" value="<?php echo $attendance; ?>" readonly></td>
							<td><input class="form-control" type="text" name="attitude" value="<?php echo $attitude; ?>" readonly></td>
							<td><input class="form-control" type="text" name="finalValues" value="<?php echo $finalValues; ?>" readonly></td>
							<td><input class="form-control" type="text" name="finalGrade" value="<?php echo $finalGrade; ?>" readonly></td>
							<td><input class="form-control" type="text" name="remarks" value="<?php echo $remarks; ?>" readonly></td>
						</tr>

					</table>

					<br>
					

					<p class="text-center"><a href="LoginDelaCruzBruceJames.php">Back to Login</a></p>

				</div>

				<div class="col-sm-3"></div>

			</div>
		</div>
	</form>
</div>

</body>
</html>