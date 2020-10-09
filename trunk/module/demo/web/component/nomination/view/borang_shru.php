<div class="p-4">
	<div class="row border-bottom border-dark">
		<div class="col-12 col-md-5">
			<form>
				<div class="form-group row">
					<label class="col-3 col-form-label" for="borang">BORANG</label>
					<select class="col-9 form-control" id="borang" name="borang">
				    	<option value="a">BORANG A - KATEGORI PERKHIDMATAN AWAM NEGERI</option>
						<option value="b">BORANG B - KATEGORI PERKHIDMATAN AWAM PERSEKUTUAN / BADAN-BADAN BERKANUN PERSEKUTUAN</option>
						<option value="c">BORANG C - KATEGORI BADAN BERKANUN NEGERI DAN PIHAK BERKUASA TEMPATAN NEGERI</option>
						<option value="d">BORANG D - KATEGORI KETUA MASYARAKAT / KETUA KAUM </option>
						<option value="e">BORANG E - KATEGORI SWASTA / PERSATUAN / SUKARELA / SUKAN </option>
						<option value="f">BORANG F - KATEGORI WARGA ASING </option>
						<option value="g">BORANG POLITIK - KATEGORI POLITIK</option>
				    </select>
				</div>
				
			</form>
		</div>
		<div class="col-10 col-md-5 mx-0 px-0">
			
		</div>
		<div class="col-2 mx-0 px-0">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div>
	</div>
	<div class="col-12 mx-0 px-0 mt-4">
		<div id="div_borang_area" class="row col-12 mx-0 px-0 ">
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianl" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('l')"><small>PENCALONAN</small></button>
			</div>			
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiana" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('a')"><small>BAHAGIAN A</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianb" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('b')"><small>BAHAGIAN B</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianc" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('c')"><small>BAHAGIAN C</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiand" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('d')"><small>BAHAGIAN D</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiane" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('e')"><small>BAHAGIAN E</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianf" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('f')"><small>BAHAGIAN F</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiang" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('g')"><small>BAHAGIAN G</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianh" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('h')"><small>BAHAGIAN H</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiani" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('i')"><small>BAHAGIAN I</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianj" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('j')"><small>BAHAGIAN J</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiank" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('k')"><small>BAHAGIAN K</small></button>
			</div>			
		</div>
		<div id="div_form_area" class="row col-12 mx-0 px-0 "></div>
	</div>
</div>
<script type="text/javascript">
	var v_form_url = '<?php echo \E::get('obj_curr_module')->build_action_path('nomination','form_ajax'); ?>';
	var v_cookie_name = "<?php echo \U::generateUniqueCookieName(MOONLIGHT_DNS_PATH.MOONLIGHT_FOLDER_PATH); ?>_admin_form_nomination";
	$(document).ready(
		function()
		{
			v_url = getLocalStorage( v_cookie_name );
			rec_form(v_url);
			if(v_url!=""){
				v_borang = getUrlQueryItem( "borang", v_url );
				if(v_borang!=""){
					document.getElementById('borang').value = v_borang;
					if (v_borang=='b' || v_borang=='c') {
						document.getElementById("bahagiank").style.display = "block";
					}else{
						document.getElementById("bahagiank").style.display = "none";
					}

				}
				v_bahagian = getUrlQueryItem( "bahagian", v_url );
				if(v_bahagian!=""){
					document.getElementById("bahagian"+v_bahagian).className=document.getElementById("bahagian"+v_bahagian).className.replace(" btn-grey", " btn-primary");
				}else{
					document.getElementById("bahagianl").className=document.getElementById("bahagianl").className.replace(" btn-grey", " btn-primary");
				}
			}else{
				document.getElementById("bahagianl").className=document.getElementById("bahagianl").className.replace(" btn-grey", " btn-primary");
				document.getElementById("bahagiank").style.display = "none";
			}
		}
	)
	function rec_form(p_url){
		if (p_url==''){
			obj1 = document.getElementById('borang');
			borang1 = escape(obj1.value);
			obj2 = 'l';
			bahagian2 = escape(obj2);
			p_url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2;
		}
		makeGETRequest( p_url, 'div_form_area' );
		vTodaysDate = new Date();
		vTodaysDate.setDate(62);
		vExpire = vTodaysDate.toGMTString();
		setLocalStorage(v_cookie_name,p_url,vExpire);
	}
	$("#borang").change(function(){
		obj1 = document.getElementById('borang');
		borang1 = escape(obj1.value);
		obj2 = 'l';
		bahagian2 = escape(obj2);
		url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2;
		rec_form(url);

		var btns = document.getElementsByClassName("bahagianTab");

		for (var i = 0; i < btns.length; i++) {
			btns[i].className = btns[i].className.replace(" btn-primary", " btn-grey");
		}
		document.getElementById("bahagianl").className=document.getElementById("bahagianl").className.replace(" btn-grey", " btn-primary");

		if (borang1=='b' || borang1=='c') {
			document.getElementById("bahagiank").style.display = "block";
		}else{
			document.getElementById("bahagiank").style.display = "none";
		}	
	});
	function bhagian(x){
		obj1 = document.getElementById('borang');
		borang1 = escape(obj1.value);
		obj2 = x;
		bahagian2 = escape(obj2);
		url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2;
		rec_form(url);

		var btns = document.getElementsByClassName("bahagianTab");

		for (var i = 0; i < btns.length; i++) {
			btns[i].className = btns[i].className.replace(" btn-primary", " btn-grey");
		}
		document.getElementById("bahagian"+x).className=document.getElementById("bahagian"+x).className.replace(" btn-grey", " btn-primary");
	}
	function check_taraf(){
		var taraf_lain = document.getElementById("taraf_lain");
		var taraf_lain_input = document.getElementById("taraf_lain_input");
		if (taraf_lain.checked == true) {
			taraf_lain_input.disabled=false;
		}else{
			taraf_lain_input.disabled=true;
		}
	}
</script>