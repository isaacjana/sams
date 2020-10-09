<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table th{
			border: 1px black solid;
		}
		table td{
			border: 1px black solid;
		}
		.rotate {
			/* FF3.5+ */
			-moz-transform: rotate(-90.0deg);
			/* Opera 10.5 */
			-o-transform: rotate(-90.0deg);
			/* Saf3.1+, Chrome */
			-webkit-transform: rotate(-90.0deg);
			/* IE6,IE7 */
			filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
			/* IE8 */
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
			/* Standard */
			transform: rotate(-90.0deg);
		}
		th.vertical{
			max-width: 5px;
			height: 100px;
		}
		h3{
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>
<h3>AUDIT TRAIL</h3>
<table>
	<thead>
		<tr>
			<td>Date</td>
			<td>Time</td>
			<td>User</td>
			<td>Module</td>
			<td>Action</td>
			<td>Reference</td>
		</tr>
	</thead>
	<tbody>
		<tr></tr>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$('.rotate').css('height', $('.rotate').width());
	});
</script>
</body>
</html>