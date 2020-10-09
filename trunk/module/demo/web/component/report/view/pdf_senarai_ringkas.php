<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>


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
		span { word-spacing: 1px } 
	</style>
</head>
<body>
	<?php
		$date2 = date('d F Y', strtotime($v_nom_profile['nom_tarikh_peristiwa']));
		$getYear = date('Y');
	?>
	<div class="page">
		<div class="col-6">
			<table style="width: 100%; border: 1px solid #000; font-size: 8px">
				<tr>
					<td style="text-align: center;" colspan="9">
						JABATAN KETUA MENTERI
					</td>
				</tr>				
				<tr>
					<td style="text-align: center;" colspan="9">
						Senarai Ringkasan Pencalonan Bagi Tahun <?php echo $getYear; ?>
					</td>
				</tr>				
				<tr>
					<td style="text-align: center;" colspan="9">
						(HARIJADI TYT)
					</td>
				</tr>				
				<tr>
					<td style="text-align: center;" colspan="9">
						<br><br>
					</td>
				</tr>				
				<tr>
					<td style="text-align: center;" colspan="9">
						(Pegawai Perkhidmatan Awam Negeri Sarawak)
					</td>
				</tr>
				<tr>
					<td>Bil</td>
					<td>Nama/Catatan Folio</td>
					<td>Umur<br>Tahun</td>
					<td>Jawatan/Tempoh Khidmat (Sarawak)</td>
					<td>Pencadang/Jawatan</td>
					<td>Penyokong/Jawatan Parti Calon</td>
					<td>Pingat Yang Pernah Diterima</td>
					<td>Pingat Yang Dicadangkan</td>
					<td>Keputusan</td>
				</tr>
				<tr>
					<td colspan="9" style="border-bottom: 1px solid #000">Jabatan Pencadang:</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="5">Date Printed: dd/mm/yyyy</td>
					<td style="text-align: right" colspan="4">Page 1 of 99</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>