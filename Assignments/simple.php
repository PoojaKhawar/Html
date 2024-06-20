<html>
	<head>
		<title> Simple Table</title>
	</head>
	<style>
		table tr td { 
			padding: 20;
			text-align: center;
			font-family :Sans-serif;
		 }
		 div table{
		 	margin: auto;
		 	margin-top: 100px;
		 }
	</style>
	<body>
		<div>
			<table width="1000px" border=" 1px solid black">
				<tr>
					<td colspan="6">Time Period Table</td>
				</tr>
				<tr>
					<td rowspan="6">
						<b>Hours</b>
					</td>
					<td>
						<b>Monday</b>
					</td>
					<td>
						<b>Tuesday</b>
					</td>
					<td>
						<b>Wednesday</b>
					</td>
					<td>
						<b>Thrusday</b>
					</td>
					<td>
						<b>Friday</b>
					</td>
				</tr>
				<tr>
					<td>Science</td>
					<td>Maths</td>
					<td>Science</td>
					<td>Maths</td>
					<td>Arts</td>
				</tr>
				<tr>
					<td>Science</td>
					<td>Maths</td>
					<td>Science</td>
					<td>Maths</td>
					<td>Arts</td>
				</tr>
				<tr>
					<td colspan="5">
						Lunch
					</td>
				</tr>
				<tr>
					<td>Science</td>
					<td>Maths</td>
					<td>Science</td>
					<td>Maths</td>
					<td rowspan="2">Arts</td>
				</tr>
				<tr>
					<td>Science</td>
					<td>Maths</td>
					<td>Science</td>
					<td>Maths</td>
				</tr>
			</table>
		</div>
	</body>
</html>