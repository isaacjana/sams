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
<?php
// echo $v_peristiwa;
// echo "test".\E::get( 'obj_curr_module')->report_race_rows(5);
?>
<h3>JABATAN KETUA MENTERI<br>SUMMARY OF NOMINATION SOURCES BY <?php echo strtoupper($v_by) ?></h3>
<table>
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th><?php echo $v_by; ?></th>
			<?php
			if (isset($v_race) && is_array($v_race)) {
				$count=0;
				foreach ($v_race as $row) {
					echo "<th class='vertical'><div class='rotate'>".$row['race_desc']."</div></th>";
					$count++;
					if ($count>10) {
						break;
					}
				}
			}else {
				foreach ($v_award as $row) {
					echo "<th class='vertical'><div class='rotate'>".$row['awd_acronym']."</div></th>";
					$count++;
					if ($count>10) {
						break;
					}
				}
			}
			
			?>
		</tr>
		<tr>
			<th>Nos.</th>
			<th>Jabatan</th>
			<?php
			if (isset($v_race) && is_array($v_race)) {
				// echo 'yes';
				$count=0;
				foreach ($v_race as $row) {
					echo "<th>&nbsp;</th>";
					$count++;
					if ($count>10) {
						break;
					}
				}
			}else {
				$count=0;
				foreach ($v_award as $row) {
					echo "<th>&nbsp;</th>";
					$count++;
					if ($count>10) {
						break;
					}
				}
			}
			
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$nom=1;
		foreach ($v_source as $row) {
			$v_body.= "<tr>";
			$v_body.= "<td>".$nom."</td>";
			$v_body.= "<td>".$row['nom_source']."</td>";

			if (isset($v_race) && is_array($v_race)) {
				$count=0;
				foreach ($v_race as $rows) {
					$v_val['race_id']=$rows['race_id'];
					$v_val['nom_source']=$row['nom_source'];
					$v_body.= "<td>".\E::get( 'obj_curr_module')->report_race_rows($v_val)."</td>";
					unset($v_val);
					$count++;
					if ($count>10) {
						break;
					}
				}
				//echo "test";
			}else{
				$count=0;
				foreach ($v_award as $rows) {
					$v_val['awd_type_id']=$rows['awd_type_id'];
					$v_val['nom_source']=$row['nom_source'];
					$v_body.= "<td>".\E::get( 'obj_curr_module')->report_award_rows($v_val)."</td>";
					unset($v_val);
					$count++;
					if ($count>10) {
						break;
					}
				}
			}

			$v_body.= "</tr>";
			$nom++;
		}
		echo $v_body;
		?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$('.rotate').css('height', $('.rotate').width());
	});
</script>
</body>
</html>