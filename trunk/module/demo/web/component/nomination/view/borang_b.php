	<div class="col-12 mx-0 px-0 mt-4">
		<div id="div_borang_area" class="row col-12 mx-0 px-0 ">
			<?php if($v_user_detail['form_id'] == '1'){ ?>
				<!-- BAHAGIAN A -->
<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI PERKHIDMATAN AWAM PERSEKUTUAN/<br> BADAN-BADAN BERKANUN PERSEKUTUAN 2020</th>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr> 
			<td height ="100" rowspan = "2" width = "21%" style = "border:1px solid; background-color: lightgrey;text-align:center;"><b>NAMA PENUH CALON</b></td>
			<td rowspan = "2" width = "46%" style = "border-top:1px solid;border-right:1px solid;border-bottom:1px solid;padding: 10px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?></td>
			<td height ="30" width = "35%" style = "border-top:1px solid;border-right:1px solid;border-bottom:1px solid; background-color: lightgrey;text-align:center;"><p><b>GAMBAR BERUKURAN <br>PASPORT</b></p></td>	
		</tr>
		<tr> 
			<td rowspan = "6" colspan = "1" style = "border-right:1px solid; border-bottom: 1px solid;"></td> 	
		</tr>
		<tr> 
			<td height ="100" width = "20%" style = "border-left:1px solid;border-right:1px solid;border-bottom:1px solid; background-color: lightgrey;text-align:center;"><b>NO KAD PENGENALAN</b></td>
			<td  width = "45%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?></td>
		</tr>
		<tr>		
		</tr>
		<tr> 
			<td height ="100" width = "20%" style = "border-left:1px solid;border-right:1px solid;border-bottom:1px solid; background-color: lightgrey;text-align:center;"><b>NO FOLIO</b></td>
			<td  width = "45%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_folio_no']) ? $v_user_detail['nom_folio_no'] : "");?></td>
		</tr>
	</table>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="5" style = "border:1px solid; background-color: lightgrey;text-align: center;"><b>NAMA DARJAH KEBESARAN, BINTANG DAN PINGAT YANG DICADANGKAN</b></td>
		</tr>
		<tr>
			<td height = "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
		</tr>
		<tr>
			<td style = "text-align: center;font-size:15px;"><small><b><i>(Nama Penuh Darjah Kebesaran, Bintang dan Pingat)</i></b></small></td>
			<td colspan="5" style = "text-align: center;font-size:15px;"><small><i><b>(Singkatan)</b></i></small></td>
		</tr>
	</table>
	<br>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;font-size:18px;">		
		<tr>
			<td height = "40" colspan="5" style = "border:1px solid; background-color: lightgrey;text-align: center;"><b>ARAHAN PENCALONAN</b></td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;">1. </td>
			<td width = "90%">Borang Pencalonan hendaklah diisi oleh <b><u>PENCADANG</u></b> dan bukan oleh <b>CALON</b> itu sendiri dan ia hendaklah dirahsiakan daripada calon berkenaan.</td>
		</tr>
			<td  height = "40" width = "5%" style="text-align: center;">2.	</td>
			<td>Sila isikan maklumat sumbangan dengan lengkap seperti <b>LAMPIRAN 1.</b> </td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;">3.	</td>
			<td>Setiap pencalonan hendaklah disertakan dengan <b>sekeping gambar berukuran pasport.</b></td>
		</tr>
		<tr>	
			<td  height = "45" width = "5%" style="text-align: center;">4.	</td>
			<td>Pastikan calon <b><u>tidak dicalonkan</u></b> dengan Darjah Kebesaran, Bintang dan Pingat yang <u>telah <b>dikurniakan</b></u> kepadanya atau yang <b><u>lebih rendah</u></b> daripada yang telah dikurniakan kepadanya sebelum ini.</td>
		</tr>
		<tr>
			<td  height = "45" width = "5%" style="text-align: center;"> 5.	</td>
			<td>Borang yang tidak lengkap, tidak mematuhi peraturan (telah diubahsuai atau ditaip semula) dan diterima selepas tarikh tutup pencalonan <b><u>tidak akan dipertimbangkan untuk diproses.</u></b></td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;"> 6. </td>
			<td>Tarikh tutup pencalonan adalah pada <b><u>29 MEI 2020 (JUMAAT).<u></b></td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;"> 7. </td>
			<td> Pencadang hendaklah merujuk Panduan Pencalonan yang disertakan sebelum mengisi borang ini.</td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;"> 8. </td>
			<td> Sila lampir surat kelulusan Tapisan Keutuhan SPRM.</td>
		</tr>
		<tr>
			<td  height = "40" width = "5%" style="text-align: center;"> 9. </td>
			<td> Borang yang telah lengkap diisi hendaklah dikemukakan menggunakan sampul surat bertanda / bercop <b> ‘SULIT’ </b>kepada:-</td>
		</tr>
		<tr>
			<td height = "150" colspan="2" style="text-align: center;"><p><b>SETIAUSAHA KERAJAAN NEGERI, SARAWAK <br>(UNIT SUMBER MANUSIA NEGERI)<br>TINGKAT 10, WISMA BAPA MALAYSIA <br> PETERA JAYA, 93502 KUCHING, SARAWAK <br>(URUS SETIA ANUGERAH KEBESARAN NEGERI)<b></p></td>

	</table>
	<br><br><br><br><br>
<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="1"  style="font-family:Arial, Helvetica, Sans-Serif; ">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="5" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN A : MAKLUMAT PERIBADI</b></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Nama Penuh <br><b><small><i>(Tulis dengan Huruf Besar seperti dalam Kad Pengenalan)</i></small></b></td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Nyatakan gelaran / jawatan yang telah diterima / disandang <br><b><i>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</i></b> </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"> <?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> No. Kad Pengenalan <b><i>(Lama / Baru)</i></b> </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td width = "15%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><small><b><i>(Lama)</i></b></small><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?></p></td>
			<td width = "15%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><small><b><i>(Baru)</i></b></small><br><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Jantina </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_gender']) ? $v_user_detail['nom_gender'] : "");?></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Tarikh Lahir </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?></td>
			
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Umur </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?></td>
		</tr>
				<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Keturunan </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?></td>
		</tr>
				<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Taraf Perkahwinan </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Alamat Email </td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "150" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;vertical-align: top;padding: 10px;"> <b>10. </b> </td>
			<td  height = "150" colspan ="4" width = "40%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;vertical-align: top;"><p style="">Alamat Rumah<b><i> (Yang Terkini)</i></b></p><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?><br><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?><br><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?><br><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b></b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Poskod</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b></b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Bandar</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b></b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Bahagian</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b></b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Negeri</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>11.</b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Nombor Telefon Rumah</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "70" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>12.</b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"> Nombor Telefon Bimbit</td>
			<td height = "50" width = "5%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 5px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?></p></td>
		</tr>


	</table>
	<br><br>
	<!-- Bahagian B -->
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN B : MAKLUMAT PERKHIDMATAN</b></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tarikh Lantikan Pertama ke Perkhidmatan Awam</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tarikh Lantikan ke Perkhidmatan Sekarang</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Gelaran Jawatan<br><i><b>
				(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Taraf Jawatan <br><i><b>
				(Memangku / Menjalankan Tugas)</i></b>/Tempoh
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Taraf Pelantikan  <br><i><b>
				(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Klasifikasi Perkhidmatan  <br><i><b>
				(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Kumpulan Perkhidmatan  <br><i><b>
				(Contoh: Pengurusan & Profesional / Pelaksana)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Gred Jawatan
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat dengan Kerajaan Negeri
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di Sarawak
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>11. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Jabatan Sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>12. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Stesen tempat bertugas sekarang <br><i><b>
				(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px
border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?></p></td>
		</tr>	
		
	<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>13. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di stesen sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "150" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;vertical-align: top;padding: 10px;"> <b>10. </b> </td>
			<td  height = "150" colspan ="4" width = "40%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;vertical-align: top;"><p style="">Alamat Pejabat sekarang<b><i></i></b></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>15. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Nombor Telefon Pejabat
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>16. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tindakan Disiplin / Undang-Undang / Status Kebankrapan
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;text-align: left;padding: 10px;" colspan="4">
			<i><b>NOTA  :	Jika TIDAK BERKENAAN, sila tulis TIADA<br>
						** Sila Lampirkan Surat Kelulusan Tapisan Keutuhan SPRM
			</i></b> 
			</td>
		</tr>
	</table>
	<!-- Bahagian C -->
	<br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN C : MAKLUMAT PRESTASI</b></td>
		</tr>
<tr><td>
	<br>
		<table>		
		<tr>
			<td style="padding: 10px; padding-left: 40px;">1. Markah Prestasi :</b></td>
		</tr>
	</table>
<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 15px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	      	<th style="padding: 15px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    </tr>
	</thead>
	<tbody>
	    <?php
	  	foreach ($v_markah_prestasi as $v_markah) {
	  	?>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?></td>
	    </tr>
	    <?php
	    }
	    ?>
	</tbody>
	</table>
	<table>
		<tr>
			<td  style="padding: 10px; padding-left: 40px;">
				2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td  style="padding: 10px; padding-left: 40px;">
				3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-
			</td>
		</tr>
	</table>
	<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	      <th scope="col" colspan="10" style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">ANUGERAH PERKHIDMATAN CEMERLANG</th>
	    </tr>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>					    
	  </thead>
	  		<table>
		<tr>
			<td  style="padding: 10px; padding-left: 40px;">
				4.	Markah Prestasi melebihi 85%. Sila nyatakan di bawah:-
			</td>
		</tr>
	</table>
	<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	      <th scope="col" colspan="10" style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">ANUGERAH PERKHIDMATAN CEMERLANG</th>
	    </tr>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">MARKAH</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_overmark as $v_markah) {
	  	?>
	    <tr>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table>
	</td>
	</tr>
		<tr>
			<td height="10">			
			</td>
		<tr>
		</table>
	<br><br>
	<!-- Bahagian D -->
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN D : MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negera atau Negeri Lain)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">BIL</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_history_success as $v_kurniaanberjaya) {
	  	?>
	    <tr>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN E : MAKLUMAT PERCOLANAN TERDAHULU</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">BIL</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>

	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
	  	?>
	    <tr>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN F : MAKLUMAT KEGIATAN LUAR SEMASA</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i> <b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERTUBUHAN / PERSATUAN <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">JAWATAN</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TEMPOH</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_activity as $v_kegiatan) {
	  	?>
	    <tr>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?></td>
	    	<td style="padding: 10px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ? $v_kegiatan['act_year'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan daripada Calon</i></b></td>
		</tr>
		<tr>
			<td width ="30%" style="padding:10px;" >Nama</td>
			<td width="5%">:</td>
			<td width="50%" style="border-bottom: 1px solid;padding:10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?></p></td>
		</tr>
		<tr>
			<td style="padding:10px;">Jawatan</td>
			<td>:</td>
			<td style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;">ALamat Pejabat</td>
			<td>:</td>
			<td style="border-bottom: 1px solid;padding:10px;"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></td>
		</tr>
		<tr>
			<td  style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>

		<tr>
			<td height="80"></td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid;padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Tarikh</b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>Tandatangan & Cop Rasmi Pencadang</b></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>	
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Penyokong hendaklah merupakan KETUA JABATAN kepada Calon</i></b></td>
		</tr>
		<tr>
			<td width ="30%" style="padding:10px;" >Nama</td>
			<td width="5%">:</td>
			<td width="50%" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;">Jawatan</td>
			<td>:</td>
			<td style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;">ALamat Pejabat</td>
			<td>:</td>
			<td style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td  style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>

		<tr>
			<td height="80"></td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid;padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Tarikh</b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>Tandatangan & Cop Rasmi Penyokong</b></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN KETUA JABATAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja</i></b></td>
		</tr>
		<tr>
			<td height="600"></td>
		</tr>
	</table>
		<br><br><br><br><br><br>
		</table>	
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : REKOMENDASI SETIAUSAHA PERSEKUTUAN NEGERI SARAWAK (SUPS)</b></td>
		</tr>

			<td  style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="40"style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nota Penting<br>
				1. SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI. <br> 
			2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
		<tr>
<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Nama:<i></b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>No.Kad Pengenalan:<i></b></td>
		</tr>
 			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				2. SUMBANGAN KEPADA MASYARAKAT:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>

			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nota Penting<br>
				1. SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI. <br> 
			2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
		<tr>
<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Nama:<i></b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>No.Kad Pengenalan:<i></b></td>
		</tr>
 			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				3. SUMBANGAN KEPADA NEGERI
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				4. SUMBANGAN KEPADA NEGARA:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nota Penting<br>
				1. SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI. <br> 
			2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
		<tr>
<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Nama:<i></b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>No.Kad Pengenalan:<i></b></td>
		</tr>
 			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				5. PENGHARGAAN DIANUGERAH
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"></td>
		</tr>

<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
<th height ="100" colspan="3" style = "border:1px solid; background-color: lightblue;">CONTOH PENGISIAN SUMBANGAN</th>
<br>
	<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nota Penting<br>
				1. SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI. <br> 
			2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
		<tr>
<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Nama:<i> Encik Mohd Kamarul Arifin B.Manaf</b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>No.Kad Pengenalan:<i>K123456/711231-13-4567</b></td>
		</tr>
 			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada: /<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;"><i> (Contoh Sumbangan dari segi prestasi dan kecermerlangan serta sumbangan lain dalam perkihdmatan)</i>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;"> Panel Penilai Anugerah Kualiti peringkat Jabatan, Negeri dan Kebangsaan. </td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mengetuai Jawantankuasa Transormasi Jabatan</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Terlibat secara aktif dengan proses penambaihbaikan seperti Kumpulan Inovasi Kerja (KIK> <i>Key Focus Activity (KFA)</i> dan lain-lain inovatif dan inovasi.</td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Jurulatih Bahasa Guru peringkat Negeri Sarawak tahun 2014</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Ketua Penyelaras untuk kempen derma darah dan Kem Kesihatan Negeri Sarawak 2014.</td>
		</tr>

		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				2. SUMBANGAN KEPADA MASYARAKAT:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada: /<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Penasihat kepada pembanguunan Koperasi Kampung dan menggubal pelan pembangunan Kampung Saai dari segi ekonomi(2011-kini)</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Pengurusi JKKK Kawasan-Sukarelawan-bencana peringkat Daerah/Bahagian/Negeri/Negara dari tahun 21020-2020.</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Membantu dalam meningkatkan kesedaran penyalahgunaan dadah melalui ceramah/aktiviti yang diadakan oleh beliau sendiri khas untuk belia-belia dikampung beliau mulai tahun 2000 hingga sekarang.</td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mmembina sebuah pusat internet dan mengadakan aktiviti bagi budak-budak yang kurang kemampuan pada tahun 2019.</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Ahli Rukun Tetangga di kawasan kampung beliau selama 10 tahun dan bertanggungjawab menjaga keamanan kampong beliau dari tahun 2000-2010</td>
		</tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	
<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
<th height ="100" colspan="3" style = "border:1px solid; background-color: lightblue;">CONTOH PENGISIAN SUMBANGAN</th>
<br>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nota Penting<br>
				1. SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI. <br> 
			2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
		<tr>
<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Nama:<i></b></td>
			<td></td>
			<td height="40" style="padding:10px;text-align:center;"><b>No.Kad Pengenalan:<i></b></td>
		</tr>
 			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				3. SUMBANGAN KEPADA NEGERI
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Jurulatih Karate-Do bagi pelajar-pelajar sekolah Negeri Sarawak di Kejohanan SUKMA pada tahun 2017-2020</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mewakili Negeri Sarawak dalam Kejohanan Badminton Peringkat Nasional pada tahun 2016-2019.</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mendapat pingat emas dalam Pertandingan Taekwondo Peringkat Nasional pada tahun 2018</td>
		</tr>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">
				4. SUMBANGAN KEPADA NEGARA:
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"> / </td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;">Membentang kertas kerja berkaitan hal wanita di Persidangan Wanita di Rome pada tahun 2019.</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mewakili Jabatan Pertanian Sarawak pada mesyuarat <i>International Pepper Community</i> di Indonesia, Brazil, India dan lain-lain. </td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Mengganggotai Misi Badan Keselematan PBB di Somalia pada tahun 2006.</td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Menganggotai badan sukarela negara seperti Mercy Malaysia dalam misi-misi kemanusiaan di peringkat antarabangsa. </td>
		</tr>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;">

				5. PENGHARGAAN DIANUGERAH
			</td>
		</tr>
				<tr> 
					<td height= "50" width = "76%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;"></td>
					<tr>
			<td style="text-align:center;padding:10px;"><b>Ada:<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td>
			<tr>
			<td style="text-align:center;padding:10px;"><b>Tiada<i></b></td>
			<td></td>
			<td height = "50" width = "6%" style = "border-bottom:1px solid;border-right: 1px solid;"></td><br>
			Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-
			<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Tokoh Belia Kebangsaan tahun 2007.</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Anugerah Pengwai Intergriti pada tahun 2010</td>
		</tr>
		<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Tokoh Maal Hijrah Tahun 2014.</td>
		</tr>
<tr>
			<td height = "50" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td  width = "40%" style = "border-bottom:1px solid;padding: 10px;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;font-size:18px;">Anugerah <i>Medal of Honours</i> dari PBB tahun 2007</td>
		</tr>
		 <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
			
					<?php
						}
					?>
		</div>
	</div>
</div>
		
