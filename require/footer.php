<?php 
/*
 * Copyright 2005-2016 OCSInventory-NG/OCSInventory-ocsreports contributors.
 * See the Contributors file for more details about them.
 *
 * This file is part of OCSInventory-NG/OCSInventory-ocsreports.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as 
 * published by the Free Software Foundation, either version 2 of the License,
 * or (at your option) any later version.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is distributed in the hope that it
 * will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OCSInventory-NG/OCSInventory-ocsreports. if not, write to the
 * Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

//pour le débug
if ($_SESSION['OCS']['MODE_LANGUAGE']=="ON"){
	/*echo "<script language=javascript>
			function report_id(){				
				document.getElementById('ID_WORD').value=document.getElementById('WORD').value;
			}
			function report_lbl(){
				document.getElementById('WORD').value='';
				document.getElementById('WORD').value=document.getElementById('ID_WORD').value;
			}
		</script>";
	
	$form_language="ADMIN_LANGUAGE";
	echo "<hr/>";
	$action['MODIF']=$l->g(115);
	$action['DEL']=$l->g(122);
	$action['ADD']=$l->g(116);
	$tab_typ_champ[0]['DEFAULT_VALUE']=$action;
	$tab_typ_champ[0]['INPUT_NAME']="ACTION";
	$tab_typ_champ[0]['INPUT_TYPE']=2;
	$tab_typ_champ[0]['RELOAD']=$form_language;
	//$tab_typ_champ[0]['CONFIG']['JAVASCRIPT']="onclick='report_id();'";
	$tab_name[0]=$l->g(443).":";
	if (isset($protectedPost['ACTION']) && $protectedPost['ACTION'] != ''){
		if ($protectedPost['ACTION'] != 'ADD'){
			$tab_typ_champ[1]['DEFAULT_VALUE']=$_SESSION['OCS']['EDIT_LANGUAGE'];
			$tab_typ_champ[1]['INPUT_NAME']="WORD";
			$tab_typ_champ[1]['INPUT_TYPE']=2;
			$tab_typ_champ[1]['CONFIG']['JAVASCRIPT']="onclick='report_id();'";
			$tab_name[1]=$l->g(1131).":";
			$function_javascript="report_lbl();";
		}else
		$function_javascript="";
		$tab_typ_champ[2]['DEFAULT_VALUE']=$protectedPost['ID_WORD'];
		$tab_typ_champ[2]['INPUT_NAME']="ID_WORD";
		$tab_typ_champ[2]['INPUT_TYPE']=0;
		$tab_typ_champ[2]['CONFIG']['SIZE']=5;
		$tab_typ_champ[2]['CONFIG']['MAXLENGTH']=20;
		$tab_typ_champ[2]['CONFIG']['JAVASCRIPT']="onclick='".$function_javascript."' onKeyPress='return scanTouche(event,/[0-9]/)' onkeydown='".$function_javascript."' onkeyup='".$function_javascript."' onblur='".$function_javascript."'";
		$tab_name[2]=$l->g(1132).":";
		
		if($protectedPost['ACTION'] != 'DEL'){
			$tab_typ_champ[3]['DEFAULT_VALUE']=$protectedPost['UPDATE'];
			$tab_typ_champ[3]['INPUT_NAME']="UPDATE";
			$tab_typ_champ[3]['INPUT_TYPE']=0;
			$tab_typ_champ[3]['CONFIG']['SIZE']=60;
			$tab_typ_champ[3]['CONFIG']['MAXLENGTH']=255;
			$tab_name[3]=$l->g(1133).":";
		}
		$show_buttons=true;
	}else
	$show_buttons=false;
	tab_modif_values($tab_name,$tab_typ_champ,'',$l->g(1130),$comment="","EDITION",$show_buttons,$form_language);*/
}

if (!AJAX) {
	if ($_SESSION['OCS']['DEBUG'] == 'ON'){
		if (isset($_SESSION['OCS']['SQL_DEBUG'])){
			msg_info("<b>".$l->g(5001)."</b><br><br>".implode('<br><hr>',$_SESSION['OCS']['SQL_DEBUG']));
		}
		echo "<hr/>";
		echo "<div align=center>VAR POST</div>";
		if (isset($protectedPost))
		print_r_V2($protectedPost);
		echo "<hr/>";
		echo "<div align=center>VAR SESSION</div>";
		foreach ($_SESSION['OCS'] as $key=>$value){
			
			if ($key != "fichLang" 
				and $key != "LANGUAGE_FILE" 
				and $key != "mac" && $key != "writeServer"
				and $key != "readServer"){
				$tab_session[$key]=$value;
			}
			
		}
		if (isset($tab_session))
		print_r_V2($tab_session);	
	}
	

// 	echo"<br></div><table class='headfoot'>";
// 	echo"<tr height=25px><td align='center'>&nbsp;";
	$fin = microtime(true);
	if($_SESSION['OCS']["DEBUG"]=="ON") {
		echo "<b>CACHE:&nbsp;<font color='".($_SESSION['OCS']["usecache"]?"green'><b>ON</b>":"red'><b>OFF</b>")."</font>&nbsp;&nbsp;&nbsp;<font color='black'><b>".round($fin-$debut, 3) ." secondes</b></font>&nbsp;&nbsp;&nbsp;";
		echo "<script language='javascript'>document.getElementById(\"tps\").innerHTML=\"<b>".round($fin-$debut, 3)." secondes</b>\"</script>";
	}
// 		if (isset($span_wait))
// 			echo "<script language='javascript'>wait(0);</script>";
// 	echo"</td></tr></table>";
	echo open_form('ACTION_CLIC');
	echo "<input type='hidden' name='RESET' id='RESET' value=''>";
	echo "<input type='hidden' id='LANG' name='LANG' value=''>";
	echo close_form();
	
	echo '</body></html>';
}

?>
