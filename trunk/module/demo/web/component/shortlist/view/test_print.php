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
	?>
	<div class="page">
			<div class="col-6">
				<table>
					<tr>
						<td>
							<?php echo \E::get( 'obj_system_module')->get_image_tag('jata_negeri.png');?>
						</td>
						<td>
							<?php echo \U::safe_display_string($v_letter_head[0]['address_1']);?><br>
							<?php echo \U::safe_display_string($v_letter_head[0]['address_2']);?><br>
							<?php echo \U::safe_display_string($v_letter_head[0]['address_3']);?><br>
							<?php echo \U::safe_display_string($v_letter_head[0]['address_4']);?><br>
						</td>
					</tr>
				</table>
				<table style="padding-left: 100px;">
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<i>Telefon Am</i>
						</td>
						<td>
							: <!-- <?php echo \U::safe_display_string($v_letter_head[0]['address_1']);?> -->
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<i>Faks</i>
						</td>
						<td>
							: <?php echo \U::safe_display_string($v_letter_head[0]['fax_no']);?>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<i>HRM Call Centre</i>
						</td>
						<td>
							: <!-- <?php echo \U::safe_display_string($v_letter_head[0]['address_1']);?> -->
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<table>
				<tr>
					<td>Ruj. Kami</td>
					<td>: <?php echo \U::safe_display_string($v_nom_profile['nom_folio_no']);?><br></td>
				</tr>
				<tr>
					<td>Tarikh</td>
					<td>: </td>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<td><b><i><?php echo \U::safe_display_string($v_nom_profile['nom_title_designation']);?> <?php echo \U::safe_display_string($v_nom_profile['nom_name']);?></i></b></td>
				</tr>
				<tr>
					<td><?php echo \U::safe_display_string($v_nom_profile['nom_address_1']);?></td>
				</tr>
				<tr>
					<td><?php echo \U::safe_display_string($v_nom_profile['nom_address_2']);?></td>
				</tr>
				<tr>
					<td><?php echo \U::safe_display_string($v_nom_profile['nom_address_3']);?></td>
				</tr>
				<tr>
					<td><?php echo \U::safe_display_string($v_nom_profile['nom_address_4']);?></td>
				</tr>
			</table>

			<div class="col-12">
				<br>
				<b>Tuan,</b>
			</div>
			<div class="col-12">
				<br>
				<b>ANUGERAH KEBESARAN KERAJAAN NEGERI SARAWAK TAHUN 2020</b>
				<br>
			</div>
			<div class="col-12">
				<table>
					<tr style="text-align: justify;text-justify: auto;">
						<td>
							<span>Sukacita dimaklumkan kepada tuan bahawa Yang Amat Berhormat Ketua Menteri bercadang hendak menasihati Tuan Yang Terutama Yang di-Pertua Negeri Sarawak agar tuan dianugerahi <b>PINGAT PENTADBIRAN AWAM </b> dengan gelaran "<b><?php echo \U::safe_display_string($v_pingat['awd_award']);?></b>" sempena perayaan <b><?php echo \U::safe_display_string($v_nom_profile['nom_peristiwa']);?></b> pada <b> <?php echo \U::safe_display_string($date2);?></b>.</span>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td style="vertical-align:top;">2.</td>
						<td style="text-align: justify; text-justify: inter-word;"><span> Sila nyatakan persetujuan tuan di atas penganugerahan tersebut dengan mengembalikan surat berlampir dengan <span style=" text-decoration: underline;"><b> segera</b></span> ataupun <span style=" text-decoration: underline;"><b>fax</b></span> dengan menyertakan gambar berukuran pasport sebelum tarikh <?php echo \U::safe_display_string($v_nom_profile['nom_peristiwa']);?>. Tuan adalah diminta untuk <span style=" text-decoration: underline;"><b>merahsiakan</b></span> cadangan ini sehingga tarikh tersebut di atas.</span></td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td style="vertical-align:top;">3.</td>
						<td style="text-align: justify; text-justify: inter-word;"><span>Upacara penyampaian anugerah oleh Tuan Yang Terutama Yang di-Pertua Negeri Sarawak akan dimaklumkan kepada tuan oleh Pejabat Astana Negeri apabila tarikhnya ditetapkan nanti.</td></span> 
					</tr>
				</table>
			</div>
			<table>
				<tr style="margin: 0;">
					<td>
						<h4>"BERSATU BERUSAHA BERBAKTI"</h4>
						<h4><i>"AN HONOUR TO SERVE"</i></h4>
					</td>
				</tr>
			</table>
			<table style="width:100%" border="0">
				<tr>
					<td style="padding: 50px;"></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<b>(<?php echo \U::safe_display_string($v_letter_head[0]['nama_setiausaha']);?>)</b>
					</td>
				</tr>
				<tr>
					<td>
						<b>Setiausaha Kerajaan Negeri</b><br>
						<b>Sarawak.</b>
					</td>
				</tr>
			</table>
	</div>
	<div class="page">
		<center><h2>RAHSIA</h2></center>
		<br>
		<table>
				<tr>
					<td>Bil. Tuan</td>
					<td>: <?php echo \U::safe_display_string($v_nom_profile['nom_folio_no']);?></td>
				</tr>
		</table>
		<br>
		<table>
			<tr>
				<td><b><i><?php echo \U::safe_display_string($v_nom_profile['nom_title_designation']);?> <?php echo \U::safe_display_string($v_nom_profile['nom_name']);?></i></b></td>
			</tr>
			<tr>
				<td><?php echo \U::safe_display_string($v_letter_head[0]['address_1']);?></td>
			</tr>
			<tr>
				<td><?php echo \U::safe_display_string($v_letter_head[0]['address_2']);?></td>
			</tr>
			<tr>
				<td><?php echo \U::safe_display_string($v_letter_head[0]['address_3']);?></td>
			</tr>
			<tr>
				<td><?php echo \U::safe_display_string($v_letter_head[0]['address_4']);?></td>
			</tr>
			<tr>
				<td><b>(u.p. <?php echo \U::safe_display_string($v_letter_head[0]['untuk_perhatian']);?>)</b><br></td>
			</tr>
		</table>
		<div class="col-12">
				<br>
				<b>Tuan,</b>
				<br>
		</div>
		<table>
			<tr style="text-align: justify;text-justify: auto;">
				<td>
					<span>Dengan sukacitanya dimaklumkan bahawa saya bersetuju menerima penganugerahan <b>PINGAT PENTADBIRAN AWAM </b> dengan gelaran "<b><?php echo \U::safe_display_string($v_pingat['awd_award']);?></b>"</span>
				</td>
			</tr>
		</table>
		<br>
		<table>
			<tr style="text-align: justify;text-justify: auto;">
				<td>
					<span>Dinyatakan butir-butir seperti di bawah untuk rekod.</span>
				</td>
			</tr>
		</table>
		<table style="border: 1px solid #ddd;text-align: left;border-collapse: collapse;width: 100%;">
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Name Penuh/Gelaran: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Jantina: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">No. Kad Pengenalan: <br>(Baru)<br>(Lama)</td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Tarikh Lahir: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Bangsa: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Warganegara: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Nama dan Alamat Pejabat: <br><br> Poskod: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Telefon Pejabat: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Alamat Rumah: <br><br> Poskod: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Telefon Rumah: </td>
			</tr>
		</table>
		<br>
		<table>
			<tr style="text-align: justify;text-justify: auto;">
				<td>
					<span>Bintang-Bintang Kehormatan Yang Telah Diterima Dari: </span>
				</td>
			</tr>
		</table>

		<table style="border: 1px solid #ddd;text-align: left;border-collapse: collapse;width: 100%;">
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">(a) Kerajaan Negeri Sarawak: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Tarikh: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">(b) Kerajaan Persekutuan: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Tarikh: </td>
			</tr>
			<tr>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">(c) Negeri-Negeri Lain: </td>
				<td style="padding: 15px;border: 1px solid #ddd;text-align: left;">Tarikh: </td>
			</tr>
		</table>
		<table style="width:100%" border="0">
			<tr>
				<td style="padding: 50px;"></td>
				<td></td>
			</tr>
			<tr>
				<td style="width:10%"><b>Tarikh: </b></td>
				<td style="width:40%">
					<hr style="margin-left:0;width:50%;border-top: 1px solid black;">
				</td>
				
				<td style="width:10%"><b>Tandatangan: </td>
				<td style="width:40%">
					<hr style="margin-left:0;width:50%;border-top: 1px solid black;">
				</td>
			</tr>
		</table>
	</div>
</body>
</html>