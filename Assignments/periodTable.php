<html>
	<head>
		<title> Simple Table</title>
	</head>
	<style>
		table tr td { 
			padding: 5;
			text-align: center;
			font-family :Sans-serif;
			font-size: 20px;
		 }
		div table{
		 	margin: auto;
		 	margin-top: 100px;
		}
		.sub1{
	        color: #318CE7;
	    }
	    .sub2{ color:#FEBE10 }
	    .sub3{ color:#B24BF3 }
	    .sub4{ color:#008000 }
	    .sub5{ color:#DC143C }

	</style>
	<body>
		<div>
			<table width="80%" border="1px solid black">
				 <tr>
				 	<td></td>
				 	<td>8:30-9:30</td>
				 	<td>9:30-10:30</td>
				 	<td>10:30-11:30</td>
				 	<td>11:30-12:30</td>
				 	<td>12:30-2:00</td>
				 	<td>2:00-3:00</td>
				 	<td>3:00-4:00</td>
				 	<td colspan="2">4:00-5:00</td>
				 </tr>
				 <tr>
				 	<td>MONDAY</td>
				 	<td>---</td>
				 	<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub3"><b>SUB3</b></td>
				 	<td rowspan="6">
				 		L<br>U<br>N<br>C<br>H
				 	</td>
				 	<td class="sub4"><b>SUB4</b></td>
				 	<td class="sub5"><b>SUB5</b></td>
				 	<td colspan="2">COUNSELLING CLASS</td>
				</tr>
				<tr>
					<td>TUESDAY</td>
					<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub3"><b>SUB3</b></td>
				 	<td>---</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td colspan="2">LIBRARY</td>
				</tr>
				<tr>
					<td>WEDNESDAY</td>
					<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td>SWA</td>
				 	<td>---</td>
				 	<td colspan="4">LAB</td>
				</tr>
				<tr>
					<td>THRUSDAY</td>
					<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub3"><b>SUB3</b></td>
				 	<td>---</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td colspan="2">LIBRARY</td>
				</tr>
				<tr>
					<td>FRIDAY</td>
					<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td class="sub2"><b>SUB2</b></td>
				 	<td class="sub3"><b>SUB3</b></td>
				 	<td>---</td>
				 	<td class="sub4"><b>SUB4</b></td>
				 	<td class="sub5"><b>SUB5</b></td>
				 	<td colspan="2">LIBRARY</td>
				</tr>
				<tr>
					<td>SATURDAY</td>
					<td class="sub1">
				 		<b>SUB1</b>
				 	</td>
				 	<td colspan="3">SUB2</td>
				 	<td class="sub4"><b>SUB4</b></td>
				 	<td class="sub5"><b>SUB5</b></td>
				 	<td colspan="2">LIBRARY</td>
				</tr>
			</table>
		</div>
	</body>
</html>