/******Common******/

/*trigger search after enter key is pressed, reset when escape key is pressed*/
$(document).keyup(function(event){
	if(event.keyCode==13){
		$("#btn_searchall").click();
	}
	if(event.keyCode==27){
		$("#btn_reset").click();
	}
});

function handleKeyPress(vName,vEvent){ return false;}
function float_element(container_id){
	vObjFloat=document.getElementById(container_id);
	$(window).scroll(function(){
		if ($(window).scrollTop() > vObjFloat.offsetTop+vObjFloat.offsetHeight){
			$(vObjFloat).addClass('floating');
		}else{
			$(vObjFloat).removeClass('floating');
		}
	});
}
function toogleAdvancedSearch(){
	vObj=document.getElementById('advanced_search');
	if($(vObj).is(':hidden')){
		$(vObj).slideDown();
		$(vObj).find('input:first').focus();
	}else{
		$(vObj).slideUp();
	}
}
function toggleBtnSelected(vObj){
	if($(vObj).hasClass('buttonSelected')){
		$(vObj).removeClass('buttonSelected');
	}else{
		$(vObj).addClass('buttonSelected');
	}
}
function fancybox_byurl(vUrl,vMode){
	//default parameter
	var fobj={'autoScale': true, 
						'transitionIn': 'none', 
						'transitionOut': 'none', 
						'type': 'iframe', 
						'href': vUrl};
	switch(vMode){
		case 'fitwidth':
			fobj.width='90%';
		break;
		case 'fitheight':
			fobj.height='90%';
		break;
		case 'fitall':
			fobj.width='90%';
			fobj.height='90%';
		break;
		/* case 'fithalf':
			fobj.width='60%';
			fobj.height='60%';
		break; */
		default:
			fobj.width='90%';
			fobj.height='90%';
		break;
	}
	$.fancybox(fobj);
}
function fancybox_byid(vID,vMode){
	//default parameter
	var fobj={'autoScale': true, 
						'transitionIn': 'none', 
						'transitionOut': 'none',
						'href':'#'+vID};
	switch(vMode){
		case 'fitwidth':
			fobj.width='90%';
		break;
		case 'fitheight':
			fobj.height='90%';
		break;
		case 'fitall':
			fobj.width='90%';
			fobj.height='90%';
		break;
		/* case 'fithalf':
			fobj.width='60%';
			fobj.height='60%';
		break; */
		default:
			fobj.width='90%';
			fobj.height='90%';
		break;
	}
	$.fancybox(fobj);
}
/*For cloneElement() function after insert grid item.*/
function autoCalculateTblRowSpecial(vTrObj){
	if(typeof vTrObj==='string'){
		vTrObj=document.getElementById(vTrObj);
	}
	$(vTrObj).parent().children().each(function(i){
		$(this).find(".increment").html(i);
	});
}
function removeElement(vId){
	$('#'+vId).remove();
}
function clearElement(vAryId){
	vLength=vAryId.length;
	for(i=0;i<=vLength;i++){
		if(document.getElementById(vAryId[i])){
			vObj=document.getElementById(vAryId[i]);
			$("#"+vAryId[i]+"")[0].selectedIndex=0;
			if($(vObj).is(':input')){
				vObj.value="";
			}else{
				vObj.innerHTML="";
			}
		}else{
			/*Setting attribute checked as empty string will set checkbox as checked instead of unchecked*/
			// $("input[name='"+vAryId[i]+"']").attr('checked','');
			$("input[name='"+vAryId[i]+"']").attr('checked',false);
		}
	}
}
function toggleSideMenu(){
	vSideMenuObj=document.getElementById('menu_wrapper');
	if($(vSideMenuObj).css('display')=='none'){
		$(vSideMenuObj).css('display','block');
	}else{
		$(vSideMenuObj).css('display','none');
	}
}
function triggerAutoComplete(vAryVal,vUrl){
	if(vUrl.indexOf('?')<0){
		vUrl=vUrl+"?";
	}
	vLength=vAryVal.length;
	for(i=1;i<=vLength;i++){
		vUrl=vUrl+"&search"+(i)+"="+vAryVal[i-1];
	}
	fancybox_byurl(vUrl,'fitwidth');
}
function clearDateField(vElementID){
	clearElement([vElementID]);
}
function handleDateField(pDiv){
	if ( document.getElementById(pDiv) ){
		if ( document.getElementById(pDiv).onclick ){
			document.getElementById(pDiv).onclick();
		}else{
			document.getElementById(pDiv).click()
		}
		if ( document.getElementById(pDiv).value!='' ){
			
		}
	}
}

function initFormCollapse(vConfigObj){
	vCookieFormCollapse=vConfigObj.cookieNamePrefix;/*Default Cookie Name*/
	$('.fluid_form h2.collapsible').click(function(){
		vObjParent=$(this).parent().parent();
		vId=$(this).attr('id');
		if($(this).hasClass('expand')){
			$(vObjParent).css('overflow','hidden');
			$(vObjParent).css('height',$(this).height()+'px');
			$(this).removeClass('expand').addClass('collapse');
			vCookieValue='collapse';
		}else{
			$(vObjParent).css('overflow','show');
			$(vObjParent).css('height','');
			$(this).removeClass('collapse').addClass('expand');
			vCookieValue='expand';
		}
		setLocalStorage(vCookieFormCollapse+'_'+vId,vCookieValue,9999999);
	});
	vCurCookieValue='';
	$('.fluid_form h2.collapsible').each(function(){
		vCurCookieValue=getLocalStorage(vCookieFormCollapse+'_'+$(this).attr('id'));
		if(vCurCookieValue=='collapse'){
			$(this).removeClass('collapse').addClass('expand');
		}else{
			$(this).removeClass('expand').addClass('collapse');
		}
		$(this).trigger('click');
	});
}



/******Listing******/
/*Init*/
var vUrlQueryStr={};
var vListTemplate='';
var selectedId=[];
var vSortby=[];
var vTotalRec=0;
var vTotalPage=0;
var vColIndexToHide=[];/*To keep which column index to hide.*/
var vColOption={};/*To keep all the configurable column.*/

function rec_list(){

	if(vListTemplate==''){
		vListTemplate=$('#lsttable tbody:first').html();
	}

	$('#lsttable tbody:first').html('');
	$('#divLoading').show();
	vUrlQuery='';
	$.each(vUrlQueryStr,function(vKey,vValue){
		vUrlQuery+='&'+vKey+'='+vValue;
	});
	vRandom = (new Date()).getTime();
	setLocalStorage(vCookieName,vUrlQuery,9999999);
	loadAjaxJSON(vAjaxBaseUrl+'?nocache='+vRandom+vUrlQuery,'afterAjax');
}

function loadAjaxJSON(pURL,pCallbackFunc){
	$.ajax({
		type: "POST",
		cache: false,
		url:pURL, 
		dataType: "json",
		success: function(returnData){
			eval(pCallbackFunc+'(returnData)');
		},
		error: function(response, status, xhr){
			var v_return = xhr.toString();
			var v_result = v_return.match(/<!-- REQUIRED_LOGIN -->/g);
			if(v_result!=null){
				location.reload();
			}else{
				$('#divLoading').hide();
				alert("Failed to load records.  Please contact your system administrator if the problem persists.");
			}
		}
	});
}

function buildUrlQueryStr(pKey,pValue){
	vUrlQueryStr[pKey]=pValue;
}

function afterAjax(pJsonObj){
	$('#divLoading').hide();
	buildPaging(pJsonObj);
	buildTableRow(pJsonObj);
	pagingSelect(vUrlQueryStr['page']);
	// hideListingColumn();
	
	/* Set title */
	if(document.getElementById('div_list_title') && pJsonObj){
		if(pJsonObj.title){
			document.getElementById('div_list_title').innerHTML = pJsonObj.title;
		}
	}
}

function buildPaging(pJsonObj){
	vObjPaging=$('.lstpaging');
	if(pJsonObj.row){
		vCurTotalRec=pJsonObj.totalrec;
	}else{
		vCurTotalRec=0;
		$(vObjPaging).children().not('.totalrec').css('display','none');
	}
	$(vObjPaging).find('.totalrec').html('Total Records: '+vCurTotalRec);
	if(typeof vRecPerPage==='undefined'){
		$(vObjPaging).children().not('.totalrec').css('display','none');
		return 0;
	}
	if(vCurTotalRec!=vTotalRec){
		vTotalRec=vCurTotalRec;
		vTotalPage=Math.ceil(vTotalRec/vRecPerPage);
		if(vTotalPage==1){
			$(vObjPaging).children().not('.totalrec').css('display','none');
		}else{
			$(vObjPaging).children().css('display','');
		}
		vHtml='';
		for(i=1;i<=vTotalPage;i++){
			vHtml=vHtml+"<option value='"+i+"'>"+i+"</option>";
		}
		$(vObjPaging).find('#ddpaging').html(vHtml);
	}
	if(typeof vUrlQueryStr['page']==='undefined'){
		vUrlQueryStr['page']=1;
		pagingSelect(1);
	}
}

function toggleSort(vId){
	if(typeof vSortby[vId]==='undefined'){
		vSortby[vId]='desc';
	}else{
		if(vSortby[vId]=='desc'){ vSortby[vId]='asc'; }
		else{ vSortby[vId]='desc'; }
	}
	
	setSortIcon(vId);
	
	vUrlQueryStr['orderby']=vId;
	vUrlQueryStr['sortby']=vSortby[vId];

	rec_list();
}

/*Set ASC or DESC icon based on current status*/
function setSortIcon(vId){
	vObjTHead=document.getElementById('lsttable');
	$(vObjTHead).find("#"+vId+":not(:has(span))").append("<span class=''></span>");
	
	if(vSortby[vId]=='desc'){ vClass='icon icon-sortdesc-white'; }
	else{ vClass='icon icon-sortasc-white'; }
	$(vObjTHead).find('th span').attr('class','');
	$(vObjTHead).find('#'+vId+' span').attr('class',vClass);
}

function toggleSelectedId(vId){
	vIndex=selectedId.indexOf(vId);
	if(vIndex<0){
		selectedId.push(vId);
	}else{
		selectedId.splice(vIndex, 1);
	}
}
function search(vParentElemID){
	if(typeof vParentElemID==='undefined'){
		vParentElemID='normal_search';
	}
	vFlagRadio=[];
	/*For Type=Input*/
	$('#'+vParentElemID+' input').each(function(){
		if($(this).attr('type')=='text' || $(this).attr('type')=='hidden'){
			vUrlQueryStr[$(this).attr('id')]=$(this).val();
		}
		if($(this).attr('type')=='radio'){
			vName=$(this).attr('name');
			if(typeof vFlagRadio[vName]==='undefined'){
				vUrlQueryStr[vName]=$('#'+vParentElemID+' input[name='+vName+']:checked').val();
				vFlagRadio[vName]=true;
			}
		}
	});
	/*For Type=Select*/
	$('#'+vParentElemID+' select').each(function(){
		vUrlQueryStr[$(this).attr('id')]=$(this).val();
	});

	vUrlQueryStr['page'] = 1;
	rec_list();
}
function searchAdvanced(){
	search('advanced_search');
}
function reset(){
	/*Reset All Input*/
	$('#normal_search,#advanced_search').find('input,select').each(function(){
		$(this).val('');
		$(this).attr('checked','');
	});
	/*Reset All Param*/
	vUrlQueryStr={};
	selectedId=[];
	vSortby=[];
	rec_list();
}
function prev(){ paging(parseInt(vUrlQueryStr['page'])-1); }
function next(){ paging(parseInt(vUrlQueryStr['page'])+1); }
function first(){ paging(1); }
function last(){ paging(vTotalPage); }

function pagingSelect(vPgNum){
	if(typeof vUrlQueryStr['page']!=='undefined'){
		$(".lstpaging .paging #ddpaging option[value='"+vUrlQueryStr['page']+"']").attr('selected','selected')
	}
	$(".lstpaging .paging #ddpaging option[value='"+vPgNum+"']").attr('selected','selected')
}
function paging(vPgNum){
	if(vTotalPage<vPgNum || vPgNum<=0){
		return 0;
	}
	vUrlQueryStr['page']=vPgNum;
	rec_list();
}
function processCookie(){
	var vCurSortBy='';
	var vCurOrderBy='';
	
	/*Get Cookie*/
	vUrlQueryAry=getLocalStorage(vCookieName);
	if(vUrlQueryAry!=''){
		/*Split the string and assign back to Global Array.*/
		vUrlQueryAry=vUrlQueryAry.split('&');/*Split*/
		vLength=vUrlQueryAry.length;
		for(i=0;i<vLength;i++){
			vQueryAry=vUrlQueryAry[i].split('=');/*Split*/
			if(vQueryAry[0]!=''){
				buildUrlQueryStr(vQueryAry[0],vQueryAry[1]);/*Assign back*/
				if(vCurElem=document.getElementById(vQueryAry[0])){
					switch($(vCurElem).attr('type')){
						case 'text':
						case 'select-one':
							vCurElem.value=vQueryAry[1];
						break;
						case 'radio':
							vCurElem.value=vQueryAry[1];
						break;
					}
				}
				$('#'+vQueryAry[0]+'_table_radio input').each(function(){
					if($(this).val()==vQueryAry[1]){
						$(this).attr('checked','checked');
					}
				});
				$('#'+vQueryAry[0]+'_opt_table_checkbox input').each(function(){
					vAryCheckbox=vQueryAry[1].split(',');
					if(vAryCheckbox.indexOf($(this).val())>=0){
						$(this).attr('checked','checked');
					}
				});
				/*If got OrderBy, SortBy or Page etc, need to set the icon or display properly.*/
				/*First get parameter..*/
				switch(vQueryAry[0]){
					case 'sortby':
						vCurSortBy=vQueryAry[1];
					break;
					case 'orderby':
						vCurOrderBy=vQueryAry[1];
					break;
					case 'page':
						pagingSelect(vQueryAry[1]);
					break;
				}
			}
		}
		/*Set the ASC/DESC Icon.*/
		if(vCurSortBy!='' && vCurOrderBy!=''){
			vSortby[vCurOrderBy]=vCurSortBy;
			setSortIcon(vCurOrderBy);
		}
	}
}
function hideListingColumn(){
	vCounter=0;
	$('#lsttable thead th').each(function(){
		if(vCounter>=vColConfigurable[0] && vCounter<=vColConfigurable[1]){
			if(vColIdToDisplay.indexOf($(this).attr('id'))<0){
				$(this).hide();
				vColIndexToHide.push(vCounter);
			}
		}
		vCounter++;
	}); 
	$('#lsttable tbody tr').each(function(){
		vCounter=0;
		$(this).find('td').each(function(){
			if(vColIndexToHide.indexOf(vCounter)>=0){
				$(this).hide();
			}
			vCounter++;
		});
	});
}
function rearrangeColumnById(){
	vObjLstTable=$('#lsttable');
	vColIndexOffset=vColConfigurable[0];
	vLen=vColIdToDisplay.length;
	for(i=0;i<vLen;i++){
		
		vObjTHCurrent=vObjLstTable.find('th[id='+vColIdToDisplay[i]+']');
		vObjTHCurrentIndex=vObjTHCurrent.index();
		vObjTDCurrent=vObjLstTable.find('td:eq('+vObjTHCurrentIndex+')');
		
		if(vObjTHCurrentIndex!=(i+vColIndexOffset)){
			vObjLstTable.find('th:eq('+(i+vColIndexOffset)+')').insertBefore(vObjTHCurrent);
			vObjLstTable.find('td:eq('+(i+vColIndexOffset)+')').insertBefore(vObjTDCurrent);
		}
		
	}
	buildUrlQueryStr('column',encodeURIComponent(vColIdToDisplay.join(',')));
}
function listingInit(vObjMode){
	// getListingColumnOption();
	// buildColumnOptionCheckbox();
	// if(typeof vObjMode=='undefined' || vObjMode.columnrearrange!==false){
		// rearrangeColumnById();
	// }
	$('#lsttable .sortable').click(function(){
		toggleSort($(this).attr('id'));
	});
	$('.lstsearch input').keypress(function(e) {
		if(e.which == 13) {
			search();
		}
	});
	if(typeof vObjMode=='undefined' || vObjMode.cookie!==false){
		processCookie();
	}
	rec_list();	
}