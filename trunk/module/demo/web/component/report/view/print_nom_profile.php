<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.page {
		   	width: 210mm;
		    min-height: 297mm;
		    padding: 10mm;
		    margin: auto;
		    background: white;
		    padding-top:10px;
		    page-break-after: always;
		    clear:both;
		    overflow: auto;
		}


		/*.subpage {
		    padding: 1cm;
		    margin: 5mm auto;
		    height: 257mm;
		    font-size: 18px;
		}*/
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
			<table style="border: 1px solid #000; width: 100%">
				<tr>
					<td colspan="2" rowspan="2">
						<?php echo \E::get( 'obj_system_module')->get_image_tag('jata_negeri.png');?>
					</td>
					<td colspan="2" style="text-align: center;">
						JABATAN KETUA MENTERI SARAWAK<br>
						PROFIL PENCALONAN ANUGERAH KEBESARAN NEGERI SARAWAK TAHUN <?php echo $getYear; ?><br>
						(KATEGORI PENCALONAN)<br>
						(NAMA AGENSI)<br>
					</td>
				</tr>
				<tr>
					<td>PINGAT YANG DICADANG: (ACRONYM)</td>
					<td>PINGAT YANG DISOKONG: (ACRONYM)</td>
				</tr>
			</table>
		</div>
		<table style="border: 1px solid #000; width: 100%; border-collapse: collapse;">
			<tr>
				<td rowspan="7" style="border: 1px solid #000;">hello</td>
				<td colspan="9" style="border: 1px solid #000; background-color: #B2C7E3">Butiran Peribadi</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000;">Nama</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="7" style="border-bottom: 1px solid #000;">input</td>
			</tr>			
			<tr>
				<td style="border-bottom: 1px solid #000;">No. Kad Pengenalan</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="7" style="border-bottom: 1px solid #000;">input</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000;">Tarikh Lahir</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="7" style="border-bottom: 1px solid #000;">input</td>
			</tr>			
			<tr>
				<td style="border-bottom: 1px solid #000;">Umur</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="7" style="border-bottom: 1px solid #000;">input</td>
			</tr>
			<tr>
				<td colspan="9" style="border-bottom: 1px solid #000; background-color: #B2C7E3">Butiran Perkhidmatan</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000;">Jawatan</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="3" style="border-bottom: 1px solid #000;">input</td>				
				<td style="border-bottom: 1px solid #000;">Tempoh Perkhidmatan</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="2" style="border-bottom: 1px solid #000;">input</td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; background-color: #B2C7E3"><center>Folio No</center></td>
				<td style="border-bottom: 1px solid #000;">Gred</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="3" style="border-bottom: 1px solid #000;">input</td>				
				<td style="border-bottom: 1px solid #000;">Tempoh Berkhidmat di Sarawak</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="2" style="border-bottom: 1px solid #000;">input</td>
			</tr>
			<tr>
				<td style="border: 1px solid #000;">test</td>
				<td style="border-bottom: 1px solid #000;">Stesen Sekarang</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="3" style="border-bottom: 1px solid #000;">input</td>				
				<td style="border-bottom: 1px solid #000;">Tempoh Berkhidmat di Stesen</td>
				<td style="border-bottom: 1px solid #000;">:</td>
				<td colspan="2" style="border-bottom: 1px solid #000;">inputinput</td>
			</tr>
			<tr>
				<td colspan="5" style="border: 1px solid #000; background-color: #F3B17F"><center>PENCADANG</center></td>
				<td colspan="5" style="border: 1px solid #000; background-color: #F3B17F"><center>PENYOKONG</center></td>
			</tr>	
			<tr>
				<td colspan="5" style="border: 1px solid #000;">&nbsp;</td>
				<td colspan="5" style="border: 1px solid #000;"></td>
			</tr>
			<tr>
				<td colspan="2" style="border: 1px solid #000; background-color: #FFFF00"><center>Anugerah Dimiliki</center></td>
				<td style="border: 1px solid #000; background-color: #FFFF00"><center>Tahun</center></td>
				<td colspan="2" style="border: 1px solid #000; background-color: #FFFF00"><center>Anugerah Dicalon<br>(Tidak Berjaya)</center></td>
				<td style="border: 1px solid #000; background-color: #FFFF00"><center>Tahun</center></td>
				<td colspan="2" style="border: 1px solid #000; background-color: #FFFF00"><center>APC (Tahun)</center></td>
				<td style="border: 1px solid #000; background-color: #FFFF00"><center>Markah Prestasi (%)</center></td>
				<td style="border: 1px solid #000; background-color: #FFFF00"><center>Tahun</center></td>
			</tr>
			<tr>
				<td colspan="2" style="border: 1px solid #000;">&nbsp;</td>
				<td style="border: 1px solid #000;"></td>
				<td colspan="2" style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td colspan="2" style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
			</tr>	
			<tr>
				<td colspan="10" style="border: 1px solid #000; background-color: #B2C7E3">Butiran Kegiatan Luar</td>
			</tr>
			<tr>
				<td colspan="4" style="border: 1px solid #000; background-color: #FED966">(i) Persatuan</td>
				<td colspan="3" style="border: 1px solid #000; background-color: #FFFF00">(ii) Sukarelawan</td>
				<td colspan="3" style="border: 1px solid #000; background-color: #C5E0B3">(iii) Sukan</td>
			</tr>
			<tr>
				<td style="border: 1px solid #000; background-color: #FED966">Nama</td>
				<td style="border: 1px solid #000; background-color: #FED966">Jawatan</td>
				<td style="border: 1px solid #000; background-color: #FED966">Peringkat</td>
				<td style="border: 1px solid #000; background-color: #FED966">Tahun</td>
				<td style="border: 1px solid #000; background-color: #FFFF00">Kegiatan</td>
				<td style="border: 1px solid #000; background-color: #FFFF00">Peringkat</td>
				<td style="border: 1px solid #000; background-color: #FFFF00">Tahun</td>
				<td style="border: 1px solid #000; background-color: #C5E0B3">Jenis</td>
				<td style="border: 1px solid #000; background-color: #C5E0B3">Peringkat</td>
				<td style="border: 1px solid #000; background-color: #C5E0B3">Tahun</td>
			</tr>	
			<tr>
				<td style="border: 1px solid #000;">&nbsp;</td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
				<td style="border: 1px solid #000;"></td>
			</tr>	
			<tr>
				<td colspan="10" style="border: 1px solid #000; background-color: #B2C7E3">Ulasan Penyokong</td>
			</tr>
			<tr>
				<td colspan="10">&nbsp;</td>
			</tr>			
			<tr>
				<td colspan="10" style="text-align: right">
					Nama (Penyokong)<br>
					Jawatan<br>
					Gred<br>
					Tarikh<br>
				</td>
			</tr>
			<tr>
				<td colspan="5" style="border-top: 1px solid #000; background-color: #B2C7E3; border-right: 1px solid #B2C7E3;">Date Printed: dd/mm/yy</td>
				<td colspan="5" style="text-align: right; background-color: #B2C7E3">Page 1 of 99</td>
			</tr>					
		</table>
		<br>
	</div>	
</body>