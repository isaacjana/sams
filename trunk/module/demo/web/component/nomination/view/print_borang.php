	<div class="col-12 mx-0 px-0 mt-4">
		<div id="div_borang_area" class="row col-12 mx-0 px-0 ">
			<?php if($v_user_detail['form_id'] == '1'){ ?>
				<!-- BAHAGIAN A -->
<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI PERKHIDMATAN AWAM NEGERI TAHUN 2020</th>
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

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
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
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?></p></td>
		</tr>	
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>13. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di stesen sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "150" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;vertical-align: top;padding: 10px;"> <b>10. </b> </td>
			<td  height = "150" colspan ="4" width = "40%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;vertical-align: top;"><p style="">Alamat Rumah<b><i> (Yang Terkini)</i></b></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></p></td>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
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
	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	  <thead>
	    <tr>
	      <th scope="col" colspan="5" style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">ANUGERAH PERKHIDMATAN CEMERLANG</th>
	    </tr>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_apc as $v_markah) {
	  	?>
	    <tr>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?></td>
	    </tr>
	    <?php
	    }
	    ?>
	  </tbody>
	</table>
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
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_overmark as $v_markah) {
	  	?>
	    <tr>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN E : PERCOLANAN TERDAHULU</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
			<td style="padding:10px;">Alamat Pejabat</td>
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
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
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
	<br>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN PENYOKONG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja.</i></b></td>
		</tr>
		<tr>
			<td height="600"></td>
		</tr>
	</table>
		<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘A’<br><small><i>(USMN/BP/SCS/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
			<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA JABATAN / PERKIDMATAN:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		<tr><td height="10"></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>

	</table></td></tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_jabatan) {
	  		$count2++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count2.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>

	</table></td></tr>
		<tr><td height="10"></td></tr>
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_jabatan) {
	  		$count3++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count3.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>

	</table></td>
		</tr>
		<tr><td height="10"></td></tr>
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DEANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr><td height="50"></td></tr>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI PERKHIDMATAN AWAM PERSEKUTUAN/<br> BADAN-BADAN BERKANUN PERSEKUTUAN TAHUN 2020</th>
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
			<td height = "150" colspan="2" style="text-align: center;"><p><b>SETIAUSAHA KERAJAAN NEGERI, SARAWAK <br>(UNIT SUMBER ,MANUSIA NEGERI)<br>TINGKAT 10, WISMA BAPA MALAYSIA <br> PETERA JAYA, 93502 KUCHING, SARAWAK <br>(URUS SETIA ANUGERAH KEBESARAN NEGERI)<b></p></td>

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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
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
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?></p></td>
		</tr>	
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>13. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di stesen sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "150" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;vertical-align: top;padding: 10px;"> <b>14. </b> </td>
			<td  height = "150" colspan ="4" width = "40%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;vertical-align: top;"><p style="">Alamat Pejabat Sekarang<b><i> (Yang Terkini)</i></b></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></p></td>
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
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;text-align:center;padding: 10px;" colspan="4">
			<i><b>NOTA  :	Jika TIDAK BERKENAAN, sila tulis TIADA<br>
						** Sila Lampirkan Surat Kelulusan Tapisan Keutuhan SPRM
			</i></b> 
			</td>
		</tr>
	</table>
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
			<td style="padding: 10px; text-align:left; padding-left: 40px;">1. Markah Prestasi :</b></td>
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
	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	  <thead>
	    <tr>
	      <th scope="col" colspan="5" style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">ANUGERAH PERKHIDMATAN CEMERLANG</th>
	    </tr>
	    <tr>
	    	<th style="padding: 10px;text-align: center;border:1px;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_apc as $v_markah) {
	  	?>
	    <tr>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?></td>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?></td>
	    </tr>
	    <?php
	    }
	    ?>
	  </tbody>
	</table>
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
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_overmark as $v_markah) {
	  	?>
	    <tr>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERTUBUHAN / PERSATUAN</th>
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
			<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan daripada Calon</i></b></td>
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
	<tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		

			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Penyokong hendaklah merupakan KETUA JABATAN kepada Calon</i></b></td>
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
<br><br><br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: grey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN PENYOKONG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja.</i></b></td>
		</tr>
		<tr>
			<td height="400"></td>
		</tr>
	</table>
	<tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		

			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J: REKOMENDASI SETIAUSAHA NEGERI SARAWAK (SUPS)</b></td>
		</tr>
		<tr>
			<td  style="padding:10px;"></td>
			<td></td>
			<td height="20" style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20" style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20"style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20"style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>

		<tr>
			<td height="200"></td>
		</tr>
					<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Tarikh</b></td>
			</tr></table>
<br><br><br><br><br><br><br><br><br>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
			<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA JABATAN / PERKIDMATAN:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>

	</table></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di Bawah:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr><td height="50"></td></tr>
	</table>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> Encik Mohd Kamarul Arifin b.Manaf</td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;">K123456/711231-13-4567</td>
			</tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN </b><br><i><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> (Contoh Sumbangan dari segi prestasi dan kecemerlangan serta sumbangan lain dalam perkhidmatan.</i></p><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Panel Penilai Anugerah Kualiti peringkat Jabatan, Negeri dan Kebangsaan.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mengetuai Jawatankuasa Transformasi Jabatan.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Terlibat secara aktif dengan proses penambahaikan seperti Kumpulan Inovasi Kerja (KIV), <I>Key Focus Activity(KFA)</I> dan lain-lain inovatif dan inovasi.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Bahasa Guru peringkat Negeri Sarawak tahun 2014.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ketua Penyelaras untuk kempen derma darah dan Kem Kesihatan Jabatan Kesihatan Negeri Sarawak.</td></tr>
			
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>2. SUMBANGAN KEPADA MASYARAKAT <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Penasihat kepada pembangunan Koperasi kampung dan menggubal pelan pembangunan Kampung Saai dari segi ekonomi (2011-kini).</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Pengerusi JKKK Kawasan-Sukarelawan- bencana peringkat Daerah/Bahagian/Negeri/Negara dari tahun 2010-2020.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembantu dalam meningkatkan kesedaran penyalahgunaan dadah melalui ceramah/aktiviti yang diadakan oleh beliau sendiri khas untuk belia-belia dikampung beliau mulai tahun 2000 hingga sekarang.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembina sebuah pusat internet dan mengadakan aktiviti bagi budak-budak yang kurang kemampuan pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ahli Rukun Tetangga di kawasan kampung beliau selama 10 tahun dan bertanggungjawab menjaga keamanan kampong beliau dari tahun 2000-2010.</td></tr>
			<br></table></th></tr></thead></table>

			<br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘B’<br><small><i>(USMN/BP/PERSEKUTUAN/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
			</tr>
			<tr><td height="1"></td></tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>3. SUMBANGAN KEPADA NEGERI</b><br><i><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Karate-Do bagi pelajar-pelajar sekolah Negeri Sarawak di Kejohanan SUKMA pada tahun 2017-2020.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Negeri Sarawak dalam Kejohanan Badminton Peringkat Nasional pada tahun 2016-2019.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mendapat pingat emas dalam Pertandingan Taekwondo Peringkat Nasional pada tahun 2018.</td>
		</tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>4. SUMBANGAN KEPADA NEGARA <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Membentang kertas kerja berkaitan hak wanita di Persidangan wanita di Persidangan Wanita di Rome pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Jabatan Pertanian Sarawak pada mesyuarat <i>International Pepper Community</i> di Indonesia, Brazil, India dan lain-lain.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggantgotai Misi Badan Keselematan PBB di Somalia pada tahun 2006.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggangotai badan sukarela negara seperti Mercy Malaysia dalam misi-misi kemanusiaan di peringkat antarabangsa</td></tr>

						<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b>5. PENGHARGAAN DIANUGERAH:<br>Jika Ada, JUMLAH Sumbangan Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Belia Kebangsaan tahun 2007</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah Pegawai Intergriti pada tahun 2010</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Maal Hijrah Tahun 2014.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color:white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah <i>Medal of Honours</i> dari PBB tahun 2007</td></tr>
			
			<br></table></th></tr></thead></table>

			<br>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI BADAN BERKANUN NEGERI DAN PIHAK BERKUASA TEMPATAN NEGERI <br>TAHUN 2020</th>
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

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
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

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
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
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?></p></td>
		</tr>	
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>13. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di stesen sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p><?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?></p></td>
		</tr>
		<tr>
			<td height = "150" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;vertical-align: top;padding: 10px;"> <b>10. </b> </td>
			<td  height = "150" colspan ="4" width = "40%" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;vertical-align: top;"><p style="">Alamat Pejabat sekarang</p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?></p><p><?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></p></td>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
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
	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	  <thead>
	    <tr>
	      <th scope="col" colspan="5" style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">ANUGERAH PERKHIDMATAN CEMERLANG</th>
	    </tr>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_apc as $v_markah) {
	  	?>
	    <tr>
	    	<td style="padding: 15px;text-align: center;border:1px solid;"><?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?></td>
	    </tr>
	    <?php
	    }
	    ?>
	  </tbody>
	</table>
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
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_overmark as $v_markah) {
	  	?>
	    <tr>
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
	<tr>
			<td height="10">			
			</td>
		<tr>
		</table>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERTUBUHAN / PERSATUAN</th>
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
			<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

		<br><br><br><br><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

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
			<td style="padding:10px;">Alamat Pejabat</td>
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

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
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
	<BR><BR><BR>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	
				<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN PENYOKONG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja.</i></b></td>
		</tr>
		<tr>
			<td height="400"></td>
		</tr>
	</table>
	<tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		

			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J: REKOMENDASI SETIAUSAHA NEGERI SARAWAK (SUPS)</b></td>
		</tr>
		<tr>
			<td  style="padding:10px;"></td>
			<td></td>
			<td height="20" style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20" style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20"style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td></td>
			<td height="20"style="border-bottom: 1px solid;padding:30px;"></td>
		</tr>

		<tr>
			<td height="200"></td>
		</tr>
					<td height="40" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="text-align:center;padding:10px;"><b>Tarikh</b></td>
			</tr></table>
<br><br><BR><BR><BR><BR>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
			<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA JABATAN / PERKIDMATAN:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>

<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr><td height="50"></td></tr>
	</table>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> Encik Mohd Kamarul Arifin b.Manaf</td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;">K123456/711231-13-4567</td>
			</tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN </b><br><i><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> (Contoh Sumbangan dari segi prestasi dan kecemerlangan serta sumbangan lain dalam perkhidmatan.</i></p><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Panel Penilai Anugerah Kualiti peringkat Jabatan, Negeri dan Kebangsaan.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mengetuai Jawatankuasa Transformasi Jabatan.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Terlibat secara aktif dengan proses penambahaikan seperti Kumpulan Inovasi Kerja (KIV), <I>Key Focus Activity(KFA)</I> dan lain-lain inovatif dan inovasi.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Bahasa Guru peringkat Negeri Sarawak tahun 2014.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ketua Penyelaras untuk kempen derma darah dan Kem Kesihatan Jabatan Kesihatan Negeri Sarawak.</td></tr>
			
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>2. SUMBANGAN KEPADA MASYARAKAT <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Penasihat kepada pembangunan Koperasi kampung dan menggubal pelan pembangunan Kampung Saai dari segi ekonomi (2011-kini).</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Pengerusi JKKK Kawasan-Sukarelawan- bencana peringkat Daerah/Bahagian/Negeri/Negara dari tahun 2010-2020.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembantu dalam meningkatkan kesedaran penyalahgunaan dadah melalui ceramah/aktiviti yang diadakan oleh beliau sendiri khas untuk belia-belia dikampung beliau mulai tahun 2000 hingga sekarang.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembina sebuah pusat internet dan mengadakan aktiviti bagi budak-budak yang kurang kemampuan pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ahli Rukun Tetangga di kawasan kampung beliau selama 10 tahun dan bertanggungjawab menjaga keamanan kampong beliau dari tahun 2000-2010.</td></tr>
			<br></table></th></tr></thead></table>

			<br><br>

			<br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘C’<br><small><i>(USMN/BP/BBN&PBT/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN K : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
			</tr>
			<tr><td height="1"></td></tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>3. SUMBANGAN KEPADA NEGERI</b><br><i><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Karate-Do bagi pelajar-pelajar sekolah Negeri Sarawak di Kejohanan SUKMA pada tahun 2017-2020.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Negeri Sarawak dalam Kejohanan Badminton Peringkat Nasional pada tahun 2016-2019.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mendapat pingat emas dalam Pertandingan Taekwondo Peringkat Nasional pada tahun 2018.</td>
		</tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>4. SUMBANGAN KEPADA NEGARA <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Membentang kertas kerja berkaitan hak wanita di Persidangan wanita di Persidangan Wanita di Rome pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Jabatan Pertanian Sarawak pada mesyuarat <i>International Pepper Community</i> di Indonesia, Brazil, India dan lain-lain.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggantgotai Misi Badan Keselematan PBB di Somalia pada tahun 2006.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggangotai badan sukarela negara seperti Mercy Malaysia dalam misi-misi kemanusiaan di peringkat antarabangsa</td></tr>

						<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b>5. PENGHARGAAN DIANUGERAH:<br>Jika Ada, JUMLAH Sumbangan Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Belia Kebangsaan tahun 2007</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah Pegawai Intergriti pada tahun 2010</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Maal Hijrah Tahun 2014.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color:white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah <i>Medal of Honours</i> dari PBB tahun 2007</td></tr>
			
			<br></table></th></tr></thead></table>

			<tr><td height="50"></td></tr>
	</table>
	<br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI KETUA MASYARAKAT / KETUA KAUM TAHUN 2020</th>
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
			<td height = "150" colspan="2" style="text-align: center;"><p><b>SETIAUSAHA KERAJAAN NEGERI, SARAWAK <br>(UNIT SUMBER ,MANUSIA NEGERI)<br>TINGKAT 10, WISMA BAPA MALAYSIA <br> PETERA JAYA, 93502 KUCHING, SARAWAK <br>(URUS SETIA ANUGERAH KEBESARAN NEGERI)<b></p></td>

	</table>
	<br><br><br><br><br>
<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
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
	<br><br><BR>
	<!-- Bahagian B -->
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
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
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Taraf Pelantikan 
				<i><b> (Tetap / Sementara /<br>Kontrak / Pinjaman / Tambah Sentara)</b></i>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;"> Kawasan dalam Bidang kuasa (Contoh: <br><b><i> Bahagian Kuching / Kampung Astana / <br> Kawasan Tabuan)  <br><i><b></i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Daerah Kecil
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Daerah
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"><p></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Bahagian
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat dengan Kerajaan Negeri
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat sebagai Ketua Masyarakat/ Ketua Kaum
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>11. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Alamat Jabatan Sekarang
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>12. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Nombor Telefon Pejabat
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>	
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>13. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tindakan Disiplin / Undang-Undang / <br> Status Kebrankrapan
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;text-align:center;padding: 10px;" colspan="4">
			<i><b>NOTA  :	Jika TIDAK BERKENAAN, sila tulis TIADA<br>
						** Sila Lampirkan Surat Kelulusan Tapisan Keutuhan SPRM
			</i></b> 
			</td>
		</tr>
	</table>

	<br><br><BR><br><br><br><br><br><br><br><br><br><br><br><br>
	<!-- Bahagian C -->
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		
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
<br><br><br><br><br><br><br><br><BR><BR>
<br><br><br><br><br><br><br><br><BR><BR><br><br><br><br><br><br><br><br><BR><BR><br><br><br><br><br><br><br><br><BR><BR><br><br><br><br><br><br><br><br><BR><BR>


	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERTUBUHAN / PERSATUAN</th>
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
			<tr>
			<td height="10"></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

		<br><br><br><BR><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG (PEGAWAI DAERAH)</b></td>
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
			<td style="padding:10px;">Alamat Pejabat</td>
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

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG (RESIDEN BAHAGIAN)</b></td>
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
	<br><br><br><br><br><br>
	
	
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	
				
					<BR><BR>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN RESIDEN BAHAGIAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh RESIDEN BAHAGIAN selaku penyokong.</i></b></td>
		</tr>
		<tr>
			<td height="800"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	<br><br><br>
	
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
			<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA JABATAN / PERKIDMATAN:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><BR><BR>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr><td height="50"></td></tr>
	</table>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> Encik Mohd Kamarul Arifin b.Manaf</td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;">K123456/711231-13-4567</td>
			</tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN </b><br><i><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> (Contoh Sumbangan dari segi prestasi dan kecemerlangan serta sumbangan lain dalam perkhidmatan.</i></p><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Panel Penilai Anugerah Kualiti peringkat Jabatan, Negeri dan Kebangsaan.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mengetuai Jawatankuasa Transformasi Jabatan.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Terlibat secara aktif dengan proses penambahaikan seperti Kumpulan Inovasi Kerja (KIV), <I>Key Focus Activity(KFA)</I> dan lain-lain inovatif dan inovasi.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Bahasa Guru peringkat Negeri Sarawak tahun 2014.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ketua Penyelaras untuk kempen derma darah dan Kem Kesihatan Jabatan Kesihatan Negeri Sarawak.</td></tr>
			
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>2. SUMBANGAN KEPADA MASYARAKAT <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Penasihat kepada pembangunan Koperasi kampung dan menggubal pelan pembangunan Kampung Saai dari segi ekonomi (2011-kini).</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Pengerusi JKKK Kawasan-Sukarelawan- bencana peringkat Daerah/Bahagian/Negeri/Negara dari tahun 2010-2020.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembantu dalam meningkatkan kesedaran penyalahgunaan dadah melalui ceramah/aktiviti yang diadakan oleh beliau sendiri khas untuk belia-belia dikampung beliau mulai tahun 2000 hingga sekarang.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembina sebuah pusat internet dan mengadakan aktiviti bagi budak-budak yang kurang kemampuan pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ahli Rukun Tetangga di kawasan kampung beliau selama 10 tahun dan bertanggungjawab menjaga keamanan kampong beliau dari tahun 2000-2010.</td></tr>
			<br></table></th></tr></thead></table>

			<br><br>

			<br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘D’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
			</tr>
			<tr><td height="1"></td></tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>3. SUMBANGAN KEPADA NEGERI</b><br><i><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Karate-Do bagi pelajar-pelajar sekolah Negeri Sarawak di Kejohanan SUKMA pada tahun 2017-2020.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Negeri Sarawak dalam Kejohanan Badminton Peringkat Nasional pada tahun 2016-2019.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mendapat pingat emas dalam Pertandingan Taekwondo Peringkat Nasional pada tahun 2018.</td>
		</tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>4. SUMBANGAN KEPADA NEGARA <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Membentang kertas kerja berkaitan hak wanita di Persidangan wanita di Persidangan Wanita di Rome pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Jabatan Pertanian Sarawak pada mesyuarat <i>International Pepper Community</i> di Indonesia, Brazil, India dan lain-lain.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggantgotai Misi Badan Keselematan PBB di Somalia pada tahun 2006.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggangotai badan sukarela negara seperti Mercy Malaysia dalam misi-misi kemanusiaan di peringkat antarabangsa</td></tr>

						<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b>5. PENGHARGAAN DIANUGERAH:<br>Jika Ada, JUMLAH Sumbangan Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Belia Kebangsaan tahun 2007</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah Pegawai Intergriti pada tahun 2010</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Maal Hijrah Tahun 2014.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color:white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah <i>Medal of Honours</i> dari PBB tahun 2007</td></tr>
			
			<br></table></th></tr></thead></table>

	</table>
<br>
<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>

<br><br>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI SWASTA / PERSATUAN/ SUKARELA / SUKAN TAHUN 2020</th>
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

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
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
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN B : MAKLUMAT PERKHIDMATAN</b></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Nama Agensi / Persatuan / Firma<br> sekarang:</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tarikh muula berkhidmat di Agensi / <br> Persatuan / Firma:</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Gelaran Jawatan<br><i><b>
				(Cth. Pengerusi, Pengurus Besar, Pengarah <br> Operasi dsbnya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat dengan Persatuan / <br> Firma:
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Pekerjaan Sekarang: <br><i><b>
				(Cth. Peniaga, Peguam dsbnya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat di Sarawak
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>7. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh menetap di Sarawak: <br><i><b>
				(Isikan jika berkaitan)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>8. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Alamat Agensi / Persatuan / Firma
				<br><p style ="border-bottom:1px solid black;">
				<br><p style ="border-bottom:1px solid black;">
				<br><p style ="border-bottom:1px solid black;">
				<br><p style ="border-bottom:1px solid black;">
				<br><p style ="border-bottom:1px solid black;">
<br>
			</td>
			
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>9. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">No Telefon Pejabat
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tindakan Disiplin / Undang-Undang / Status Kebankrapan
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;text-align: left;padding: 10px;" colspan="4">
			<i><b>NOTA  :	Jika TIDAK BERKENAAN, sila tulis TIADA<br>
						** Sila Lampirkan Surat Kelulusan Tapisan Keutuhan SPRM
			</i></b> 
			</td>
		</tr>
	</table>

	<br><br><BR><BR><BR>
	<br><br><BR><BR><BR>
	<BR><BR><BR><BR><BR>
	<BR><BR><BR>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN C : JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN /<BR>KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN<BR>MENYANDANGNYA</b></td>
		</tr>
<tr><td>
	<br>
		<table>		
		<tr>
			<td style="padding: 10px; padding-left: 40px;"> a) Jika Ahli Persatuan Kebajikan / Sosial / Agama / Professional </b></td>
		</tr>
	</table>

	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 5px;text-align: center;background-color: lightgrey;border:1px solid;">BIL.</th>
	      	<th style="padding: 20px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA PERSATUAN KENAJIKAN / SOSIAL /<BR>AGAMA / PROFESSIONAL</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">JAWATAN</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>
	</thead>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	    </tr>
	    <tr>
	    	 <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      </tr>
	</table>
	<table>
		<tr>
			<td  style="padding: 10px; padding-left: 40px;">
				(b) Sukarelawan (Kegiatan Sukarela yang disertai di Peringkat Negeri, Malaysia, Antarabangsa dan <br> Lain-lain)
			</td>
		</tr>
	</table>
	
	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 5px;text-align: center;background-color: lightgrey;border:1px solid;">BIL.</th>
	      	<th style="padding: 20px;text-align: center;background-color: lightgrey;border:1px solid;">KEGIATAN</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERINGKAT</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>
	</thead>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	    </tr>
	    <tr>
	    	 <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      </tr>
	</table>
		<table>
		<tr>
			<td  style="padding: 10px; padding-left: 40px;">
				(c) Peringkat Sukan Yang Disertai (Contoh: Peringkat Negeri, Malaysia, Antarabangsa dan Lain-lain)
			</td>
		</tr>
	</table>
	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 5px;text-align: center;background-color: lightgrey;border:1px solid;">BIL.</th>
	      	<th style="padding: 20px;text-align: center;background-color: lightgrey;border:1px solid;">KEGIATAN</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">PERINGKAT</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>
	</thead>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	    </tr>
	    <tr>
	    	 <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      </tr>
	</table>
	</td>
	</tr>
		<tr>
			<td height="10">			
			</td>
		<tr>
		</table>
	<tr>
		
		<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
<br><br><BR>

		<tr>
			<td height="10">			
			</td>
		<tr>
		</table>
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
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

		<br><br><br><BR><br><br>
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/KK/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG<br><i>(Pencadang mestilah merupakan pengawai yang lebih kanan daripda calon</i></b></td>
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
			<td style="padding:10px;">Alamat Pejabat</td>
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

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG <br>,<i>Hendaklah diisi sepenuhnya oleh Ketua Organisasi sahaja)</i></td>
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
	<br><br><br><br><br>
	
	
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	
				
					<BR><BR>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN PENCADANG</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA ORGANISI selaku penyokong.</i></b></td>
		</tr>
		<tr>
			<td height="800"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	<br><br>
	
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
			<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
		<tr><td height="10"></td></tr>

		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA AGENSI/ORGANISASI:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	 
	    <tr>
	    	<td height= "50" width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"></td>
	    </tr>
	   
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR>
<BR><BR>
			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><BR>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr><td height="50"></td></tr>
	</table>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> Encik Mohd Kamarul Arifin b.Manaf</td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;">K123456/711231-13-4567</td>
			</tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>1. SUMBANGAN KEPADA AGENSI / ORGANISASI </b><br><i><p style = "font-family:Arial, Helvetica, Sans-Serif;color: red;"> (Contoh Sumbangan dari segi prestasi dan kecemerlangan serta sumbangan lain dalam perkhidmatan.</i></p><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Pengstrukturan semula agensi / organisasi sehingga agensi / organisasi mendapat pengiktirafan daripada pihak Kerjaan Negeri / Peringkat Kebangsaan / Peringkat Antarabangsa pada tahun 2019.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mengetuai misi transformasi Agensi/Organisasi sehingga mendapat pengiktirafan pada tahun 2018.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mengetuai pasukan mengumpul dana bagi operasi Agensi / Organisasi pada tahun 2019.</td>
		</tr>
			
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>2. SUMBANGAN KEPADA MASYARAKAT <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Penasihat kepada pembangunan Koperasi kampung dan menggubal pelan pembangunan Kampung Saai dari segi ekonomi (2011-kini).</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Pengerusi JKKK Kawasan-Sukarelawan- bencana peringkat Daerah/Bahagian/Negeri/Negara dari tahun 2010-2020.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembantu dalam meningkatkan kesedaran penyalahgunaan dadah melalui ceramah/aktiviti yang diadakan oleh beliau sendiri khas untuk belia-belia dikampung beliau mulai tahun 2000 hingga sekarang.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mmembina sebuah pusat internet dan mengadakan aktiviti bagi budak-budak yang kurang kemampuan pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>5. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Ahli Rukun Tetangga di kawasan kampung beliau selama 10 tahun dan bertanggungjawab menjaga keamanan kampong beliau dari tahun 2000-2010.</td></tr>
			<br></table></th></tr></thead></table>

			<br><br>
<BR><BR><BR><BR>
			<br><br>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘E’<br><small><i>(USMN/BP/SWASTA/20)</i></small></b></p></div>
<br><br><BR>
				<div text-align= "center"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: skyblue;font-size:30px; text-align:center;">CONTOH PENGISIAN SUMBANGAN</b></div>

					<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "2" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "10" colspan="3" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1. SUMBANGAN CALON hendaklah ditulis/dicetak dalam bentuk SENARAI.<br>2. Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</i></b></td>
		</tr>
					<tr>
			<td width = "40%" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
			</tr>
			<tr><td height="1"></td></tr>

			<tr><td colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	    <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>3. SUMBANGAN KEPADA NEGERI</b><br><i><br> <b>Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>	
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Jurulatih Karate-Do bagi pelajar-pelajar sekolah Negeri Sarawak di Kejohanan SUKMA pada tahun 2017-2020.</th></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Negeri Sarawak dalam Kejohanan Badminton Peringkat Nasional pada tahun 2016-2019.</th></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mendapat pingat emas dalam Pertandingan Taekwondo Peringkat Nasional pada tahun 2018.</td>
		</tr>
			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: white;text-align: left;padding: 10px;"><b>4. SUMBANGAN KEPADA NEGARA <br><br> Jika Ada, JUMLAH SUMBANGAN, Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Membentang kertas kerja berkaitan hak wanita di Persidangan wanita di Persidangan Wanita di Rome pada tahun 2019.</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Mewakili Jabatan Pertanian Sarawak pada mesyuarat <i>International Pepper Community</i> di Indonesia, Brazil, India dan lain-lain.</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggantgotai Misi Badan Keselematan PBB di Somalia pada tahun 2006.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Menggangotai badan sukarela negara seperti Mercy Malaysia dalam misi-misi kemanusiaan di peringkat antarabangsa</td></tr>

						<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	   <tr>
			<td colspan="2" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b>5. PENGHARGAAN DIANUGERAH:<br>Jika Ada, JUMLAH Sumbangan Sila SENARAIKAN di bawah:</b></td>
		</tr>
	 
				<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>1. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Belia Kebangsaan tahun 2007</td></tr>
			<br>
							<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>2. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah Pegawai Intergriti pada tahun 2010</td></tr>
			<br>
			<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: white;text-align: center;"> <b>3. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Tokoh Maal Hijrah Tahun 2014.</td>
		</tr>
						<tr>
			<td height = "50" width = "10%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color:white;text-align: center;"> <b>4. </b> </td>
			<td  width = "80%" style = "border-bottom:1px solid;padding: Sans-serif;color: red;">Anugerah <i>Medal of Honours</i> dari PBB tahun 2007</td></tr>
			
			<br></table></th></tr></thead></table>

	</table>

	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;"><br><br>
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI PERKHIDMATAN WARGA ASING TAHUN 2020</th>
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

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>

	<table width="100%" align= "center" cellspacing="1"  style="font-family:Arial, Helvetica, Sans-Serif; ">		
		
		<tr>
			<th height = "40" colspan="5" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN A : MAKLUMAT PERIBADI</b></th>
		</tr>
		<tr>
			<td height="10"></td>
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
<br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN B : MAKLUMAT PERKHIDMATAN</b></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Nama Agensi / Firma sekarang:</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tarikh mula berkhidmat di Agensi / Firma;</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Gelaran Jawatan<br><i><b>
				(th. Pengarah, Pengurus Besar, Pengarah Operasi dsbnya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat dengan Agensi / Firma:
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh menetap di Sarawak<br><i><b>
				(Isikan jika berkaitan)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;">></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>6. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Klasifikasi Perkhidmatan  <br><i><b>
				(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</i></b>
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
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN C : MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negera atau Negeri Lain)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
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
		</tr></table>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


	<br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>
	
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height="10"></td>
		</tr>
	<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN D : MAKLUMAT PERCOLANAN TERDAHULU</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr>
			<td height="80"></td>
		</tr>
	</table>

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN F : JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN /<BR>KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN<BR>MENYANDANGNYA</b></td>
		</tr>
<tr><td>
	<br>
		<table>		
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada) </b></td>
		</tr>
	</table>

	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 5px;text-align: center;background-color: lightgrey;border:1px solid;">BIL.</th>
	      	<th style="padding: 20px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA PERSATUAN KENAJIKAN / SOSIAL /<BR>AGAMA / PROFESSIONAL</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">JAWATAN</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>
	</thead>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	    </tr>
	    <tr>
	    	 <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      </tr>
	      
	</table></td>
		</tr>
		<tr>
			<td height="50"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br>
		
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG<br></TR>
				<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Pencadang hendaklah meupakan pengawai yang lebih kanan daripada Calon.</i></b></td>
		
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
			<td style="padding:10px;">Alamat Pejabat</td>
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

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG <br>,</tr>

				<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Penyokong hendaklah merupakan KETUA AGENSI kepada dimana Calon berkhidmat.</i></b></td>
		
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

<br><br><br><br><br>
	
		</table>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	
				
					<BR><BR>
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN PENYOKONG</b></td>
		</tr>
		<tr>
			<td height="800"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR><br><br><br>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA JABATAN / PERKHIDMATAN:<BR> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR>
<BR><BR>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>

<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘F’<br><small><i>(USMN/BP/WA/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
	</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></p></div>

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif; font-size:18px;">
		<tr>
			<th height ="80" colspan="3" style = "border:1px solid; background-color: lightgrey;">BORANG PENCALONAN<br>BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG DAN PINGAT NEGERI SARAWAK <br>KATEGORI POLITIK TAHUN 2020</th>
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

<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
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
<br><br><br><br>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">		
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN B : MAKLUMAT PERKHIDMATAN</b></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>1. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Nama Agensi / Firma sekarang:</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>2. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tarikh mula berkhidmat di Agensi / Firma:</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>3. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Gelaran Jawatan<br><i><b>
				(Cth. Pengerusi, Pengurus Besar, Pengarah <br> Operasi dsbnya)</i></b>
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>4. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat dengan Agensi / <br> Firma:
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>5. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tempoh berkhidmat menetap di Sarawak<br><b><i>(Isikan jika berkaitan)</i></b>
			</td>
			
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;background-color: lightgrey;text-align: center;"> <b>10. </b> </td>
			<td height = "50" width = "50%" style = "border-left:1px solid;border-bottom:1px solid;padding: 10px;">Tindakan Disiplin / Undang-Undang / Status Kebankrapan
			</td>
			<td height = "50" width = "10%" style = "border-bottom:1px solid;border-right: 1px solid;text-align: right;padding: 10px;">:</td>
			<td height = "50" colspan="2" style = "border-bottom:1px solid;border-right: 1px solid;padding: 10px;"></td>
		</tr>
		<tr>
			<td height = "60" width = "5%" style = "border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;text-align: left;padding: 10px;" colspan="4">
			<i><b>NOTA  :	Jika TIDAK BERKENAAN, sila tulis TIADA<br>
						** Sila Lampirkan Surat Kelulusan Tapisan Keutuhan SPRM
			</i></b> 
			</td>
		</tr>
	</table>
<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN C : MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negera atau Negeri Lain)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
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
		</tr></table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><BR><BR><BR>
		<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
	
	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height="10"></td>
		</tr>
	<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN D : MAKLUMAT PERCOLANAN TERDAHULU</b></td>
		</tr>
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya)</b></i></td>
		</tr>
		<tr>
			<td>
		<table width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
	 	<thead>
	    <tr>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA DARJAH KEBESARAN / BINTANG/ PINGAT <br> <small><i>(Sila nyatakan dengan penuh)</i></small></th>
	    	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">NEGARA / NEGERI</th>
	     	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN KURNIAAN</th>
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
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td>
		</tr>
		<tr>
			<td height="80"></td>
		</tr>
	</table>

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="4" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN F : JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN /<BR>KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN<BR>MENYANDANGNYA</b></td>
		</tr>
<tr><td>
	<br>
		<table>		
		<tr>
			<td style="padding: 10px; padding-left: 40px;"><i>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada) </b></td>
		</tr>
	</table>

	<table  width="90%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">
		<thead>
		<tr>
	      	<th style="padding: 5px;text-align: center;background-color: lightgrey;border:1px solid;">BIL.</th>
	      	<th style="padding: 20px;text-align: center;background-color: lightgrey;border:1px solid;">NAMA PERSATUAN KENAJIKAN / SOSIAL /<BR>AGAMA / PROFESSIONAL</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">JAWATAN</th>
	      	<th style="padding: 10px;text-align: center;background-color: lightgrey;border:1px solid;">TAHUN</th>
	    </tr>
	</thead>
	    <tr>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	    </tr>
	    <tr>
	    	 <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	       <td style="padding: 15px;text-align: center;border:1px solid;"></td>
	      </tr>
	      
	</table></td>
		</tr>
		<tr>
			<td height="50"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br>
		<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	

			<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN G : MAKLUMAT PENCADANG<br></TR>
				<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: skyblue;text-align: left;padding: 10px;"><b><i>Nota Penting: Pencadang hendaklah meupakan Ketua Bahagian / Ketua Cawangan.</i></b></td>
		
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
			<td style="padding:10px;">Alamat Pejabat</td>
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

	<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN H : MAKLUMAT PENYOKONG <br>,</tr>
		<tr>
			<td width ="30%" style="padding:10px;" >Nama</td>
			<td width="5%">:</td>
			<td width="50%" style="border-bottom: 1px solid;padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;">Jawatan</td>
			<td>:</td>
			<td style="border-bottom: 1px solid;padding:10px;"><br><b><i><small>MENTERI/MENTERI MUDA/SETIAUSAHA AGUNG/SETIAUSAHA EKSEKUTIF)</small></i></b></td>

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
<BR><BR><BR><BR><BR><BR><BR>
	<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">	
				
					
		<tr>
			<td height = "40" colspan="3" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN I : ULASAN SOKONGAN MENTERI/MENTERI MUDA/SETIAUSAHA AGUNG/<br>SETIAUSAHA EKSEKUTIF</b></td>
		</tr>
		<tr>
			<td height="800"></td>
		</tr>
	</table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR><br><br><br>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">1. SUMBANGAN KEPADA PARTI<BR> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">2. SUMBANGAN KEPADA MASYARAKAT:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><BR>
<BR><BR>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>

<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">3. SUMBANGAN KEPADA NEGERI:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negeri as $v_negeri) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negeri['sumbangan_penghargaan']) ? $v_negeri['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
		
		<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">4. SUMBANGAN KEPADA NEGARA:<br> Jika Ada, JUMLAH Sumbangan, Sila SENARAIKAN di bawah:-</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_sumbangan_negara as $v_negara) {
	  		$count++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_negara['sumbangan_penghargaan']) ? $v_negara['sumbangan_penghargaan'] : "");?></td>
	    </tr>
	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr></table>

	<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br>

			<div style="left:50.25px;top:35.00px;float: left;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>SULIT</b></div>
	<div style="left:50.25px;top:35.00px; float: right;"><p style = "font-family:Arial, Helvetica, Sans-Serif;color: grey;font-size:18px;"><b>BORANG ‘POLITIK’<br><small><i>(USMN/BP/POLITIK/20)</i></small></b></p></div>

		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;border:1px solid;">		
		<tr>
			<td height = "40" colspan="2" style = "border:1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b>BAHAGIAN J : ASAS PENCALONAN</b></td>
		</tr>
			<tr>
			<td height = "40" colspan="2" style = "border:1px solid;text-align: left;padding: 10px;"><b><i>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.<br></i></b></td>
		</tr>
		<tr>
			<td width = "40%" height = "40" style = " border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>Nama:</b></td>
			<td width = "50%" height = "40" style = "border-bottom: 1px solid; background-color: lightgrey;text-align: left;padding: 10px;"><b><i>No. Kad Pengenalan:</b></td>
		</tr>
<tr><td  colspan = "2">
		<table width="100%" align= "center" cellspacing="0" style="font-family:Arial, Helvetica, Sans-Serif;">
	 	<thead>
	    <tr>
	    	<th colspan ="2" style="padding: 10px;text-align: left ;">5. PENGHARGAAN DIANUGERAH:</th>
	    </tr>					    
	  </thead>
	  <tbody>
	  	<?php
	  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
	  		$count1++;
	  	?>
	    <tr>
	    	<td width ="5%" style="padding: 5px;text-align: center;border-top:1px solid;border-bottom: 1px solid;border-right: 1px solid;"><?php echo $count1.'.'?></td>
	    	<td width ="95%" style="padding: 10px;text-align: left;border-top:1px solid;border-bottom: 1px solid;"><?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?></td>
	    </tr>

	    <?php
	  	}
	  	?>
	  </tbody>
	</table></td></tr>
	</table>

				<?php }else if($v_user_detail['form_id'] == '2'){
				?>	
				<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini):</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Gred Jawatan:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di Sarawak:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Jabatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class=" w-25 col-form-label" for="gelaran">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
									<input class="w-75 form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di stesen sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									     <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
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
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>	

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN K: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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
						}else if($v_user_detail['form_id'] == '3'){
					?>		
										<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini):</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Gred Jawatan:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di Sarawak:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Jabatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="gelaran">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
									<input class="w-75 form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di stesen sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
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
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
								  			<tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>
															<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN K: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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
						}else if($v_user_detail['form_id'] == '4'){
					?>	
				<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Temenggong / Pemanca / Penghulu dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kawasan dalam Bidang Kuasa :<br><small><b>(Contoh: Bahagian Kuching / Kampung Astana / Kawasan Tabuan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['jurisdiction_area']) ? $v_user_detail['jurisdiction_area'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Dearah Kecil<br></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['small_district']) ? $v_user_detail['small_district'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Daerah</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['district_id']) ? $v_user_detail['district_id'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Bahagian:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_id']) ? $v_user_detail['division_id'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat sebagai ketua Masyarakat / Ketua Kaum:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
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
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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
						}else if($v_user_detail['form_id'] == '5'){
					?>
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Agensi / Persatuan / Firma sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh mula berkhidmat di Agensi / Persatuan / Firma :</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pengerusi, Pengurus Besar, Pengarah Operasi dsbnya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat dengan Persatuan / Firma :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Pekerjaan Sekarang :<br><small><b>(Contoh: Peniaga, Peguam dsbnya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_now']) ? $v_user_detail['job_now'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat di Sarawak :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Tempoh menetap di Sarawak :<br><small><b>(Isikan jika berkaitan)</b></small></label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['residency_year']) ? $v_user_detail['residency_year'] : "");?>" readonly>
								</div>										
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">(a) Jika Ahli Persatuan Kebajikan / Sosial / Agama / Profesional</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
			      							<th scope="col">NAMA PERSATUAN KEBAJIKAN / SOSIAL / AGAMA / PROFESSIONAL</th>
			     							<th scope="col">JAWATAN</th>
			      							<th scope="col">TAHUN</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
							  	foreach ($v_association as $v_persatuan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_name']) ? $v_persatuan['association_name'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_position']) ? $v_persatuan['association_position'] : "");?>" readonly></td>
									    	<td><input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_year']) ? $v_persatuan['association_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									   <?php
								}
							  	?>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">(b) Sukarelawan (Kegiatan Sukarela yang disertai di Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
										      <th scope="col">KEGIATAN</th>
										      <th scope="col">PERINGKAT</th>
										      <th scope="col">TAHUN</th>
										    </tr>					    
									  </thead>
									  <tbody>
									  		  		<?php
							  	foreach ($v_volunteer as $v_sukarelawan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['activity']) ? $v_sukarelawan['activity'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['peringkat']) ? $v_sukarelawan['peringkat'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['volunteer_year']) ? $v_sukarelawan['volunteer_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									  		   <?php
								}
							  	?>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">(C) Peringkat Sukan Yang Disertai (Contoh: Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">JENIS SUKAN</th>
									      <th scope="col">PERINGKAT</th>
									      <th scope="col">TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
							  	foreach ($v_sport as $v_sukan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['sport_type']) ? $v_sukan['sport_type'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['peringkat']) ? $v_sukan['peringkat'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['sport_year']) ? $v_sukan['sport_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									  		  		   <?php
								}
							  	?>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
										  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN D & E -->				
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">						
						</div>
					</div>

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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
						}else if($v_user_detail['form_id'] == '6'){
					?>
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :</b><br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Paspot / Warna:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">No. Paspot:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_passport_no']) ? $v_user_detail['nom_passport_no'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Warna:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_passport_color']) ? $v_user_detail['nom_passport_color'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tempat Lahir:</label>
									<input class="w-75 form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_pob']) ? $v_user_detail['nom_pob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Kewarganegaraan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['nationality']) ? $v_user_detail['nationality'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Di Malaysia, Jika Ada)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah<small><b>(Di Malaysia, Jika Ada)</b></small>:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Di Negara Asal)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_1']) ? $v_user_detail['nom_address_origin_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_2']) ? $v_user_detail['nom_address_origin_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_3']) ? $v_user_detail['nom_address_origin_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_4']) ? $v_user_detail['nom_address_origin_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat:<br><small><b>(Di Malaysia / Negara Asal)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_1']) ? $v_user_detail['nom_address_office_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_2']) ? $v_user_detail['nom_address_office_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_3']) ? $v_user_detail['nom_address_office_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_4']) ? $v_user_detail['nom_address_office_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Pejabat <small><b>(Di Malaysia / Negara Asal)</b></small>:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact_office']) ? $v_user_detail['nom_contact_office'] : "");?>" readonly>
								</div>	
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Agensi / Firma Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh mula berkhidmat di Agensi / Firma:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pengarah, Pengurus Besar, Pengarah Operasi dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat dengan Agensi / Firma :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh menetap di Sarawak :<br><small><b>(Isikan jika berkaitan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['residency_year']) ? $v_user_detail['residency_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->							
				<!-- BAHAGIAN C & D -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
										<tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
			  								<tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN C & D -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA <br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN</th>
								      <th scope="col">JAWATAN</th>
								      <th scope="col">NEGARA / NEGARI</th>
								      <th scope="col">TAHUN</th>
							    </tr>
							  </thead>
							  <tbody>
							  		<?php
									  	foreach ($v_position as $v_jawatan) {
									  	?>
							    <tr>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['organization']) ? $v_jawatan['organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['position']) ? $v_jawatan['position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['negara_negeri']) ? $v_jawatan['negara_negeri'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['year']) ? $v_jawatan['year'] : "");?>" readonly></td>
							    </tr>
							  </tbody>
							  <?php
									  	}
									  	?>
							</table>						
						</div>
					</div>	

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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
						}else if($v_user_detail['form_id'] == '7'){
					?>	
										<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Parti Politik :<br><small><b>(Cth: PBB / SUPP / PDP / PRS)</b></small></label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
									<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat Parti:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="tarikh_lantikan_sekarang">Jawatan dalam Parti sekarang & Kawasan / Cawangan / Ranting :<br><small><b>(Cth. Bendahari N.11 Batu Lintang, Kuching / Setiausaha N.2 Tasik Biru, Baru / AJK Bahagian N.56 Baleh, Kapit / AJK Ranting N.33 Kalaka dsbnya)</b></small></label>
									<input class="form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat Parti:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tempoh Berkhidmat dengan Parti :</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="col-form-label" for="poskod">Pekerjaan sekarang :<br><small><b>(Cth. Peniaga / Peguam / Petani dsbnya)</b></small></label>
									<input class="form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_now']) ? $v_user_detail['job_now'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PARTI DAN TAHUN-TAHUN MENYANDANGNYA</p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">Jawatan</th>
									      <th scope="col">Tahun</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_politic as $v_jawatan) {
									  	?>
									    <tr>
									    <td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_jawatan['politic_position']) ? $v_jawatan['politic_position'] : "");?>" readonly></td>
									    <td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_jawatan['politic_year']) ? $v_jawatan['politic_year'] : "");?>" readonly></td>
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
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
								  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
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
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">NEGARA / NEGERI</th>
							      <th scope="col">TAHUN</th>
							    </tr>
							  </thead>
							  <tbody>
							  		<?php
									  	foreach ($v_position as $v_jawatan) {
									  	?>
							    <tr>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['organization']) ? $v_jawatan['organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['position']) ? $v_jawatan['position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['negara_negeri']) ? $v_jawatan['negara_negeri'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['year']) ? $v_jawatan['year'] : "");?>" readonly></td>
							    </tr>
							 
							  <?php
									  	}
									  	?>
									  	 </tbody>
							</table>						
						</div>
					</div>	
										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
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