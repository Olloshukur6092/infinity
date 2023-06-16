<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/sys/inc/yadro.php');
//dpanel::check_access();
$doc = new document(2);
$doc->title = __('Slayt sozlamasi');
$doc->mavzuga = 'admin';
if(isset($_GET['sl'])&& $_GET['sl'] == "1" || isset($_GET['sl'])&& $_GET['sl'] == "2" || isset($_GET['sl'])&& $_GET['sl'] == "3" || isset($_GET['sl'])&& $_GET['sl'] == "4" || isset($_GET['sl'])&& $_GET['sl'] == "5"){
$sl = $_GET['sl'];	
}else{
$sl = "1";		
}


echo'<div class="form">
    <select style="width: 100%; padding: 5px; font-size: 16px; height: 35px;" onchange="location = this.options[this.selectedIndex].value;">
        <option selected="selected" hidden>'.__('QAYSI SLAYTNI SOZLAYSIZ').'</option>';
			
	echo'<option value="?sl=1" '.(isset($sl) && $sl == 1 ? ' selected="selected"' : '').'>'.__('1 - slayt').'</option>';
	echo'<option value="?sl=2" '.(isset($sl) && $sl == 2 ? ' selected="selected"' : '').'>'.__('2 - slayt').'</option>';
	echo'<option value="?sl=3" '.(isset($sl) && $sl == 3 ? ' selected="selected"' : '').'>'.__('3 - slayt').'</option>';
	echo'<option value="?sl=4" '.(isset($sl) && $sl == 4 ? ' selected="selected"' : '').'>'.__('4 - slayt').'</option>';	
		echo'</select>
</div>';







if (isset($_FILES['file']['error'])  && $_FILES['file']['error'] == "0") {
	$matches = array();
    if ($_FILES ['file'] ['error']) {
        $doc->err(__('Yuklanishda hatolik bor'));
    } elseif (!$_FILES ['file'] ['size']) {
        $doc->err(__('Bu rasm emas bo`sh fayl'));
    } elseif (!preg_match('#\.(?:jpe?g|png|gif)$#ui', $_FILES['file'] ['name'], $matches)) {
        $doc->err(__('JPG fayl bo`lishi shart'));
	} else {
	

			  $sls = "sl_".$sl."";
              $avatar_file_name = "".hash_file('md5', $_FILES['file'] ['tmp_name']).".png";
              $files_ok = H.'/upfile/'.$ucms->$sls;
              $der1 = H.'/upfile/'.$avatar_file_name;
              unset($files_ok);
              copy($_FILES['file']['tmp_name'], $der1);
              unset($_FILES['file']['tmp_name']);
			  $ucms->$sls = $avatar_file_name;
			  $ucms->save_settings($doc);	
			  header('Refresh: 2 url=?');	

    }
}

$sls1 = "sl_".$sl."";

echo "<center><img style='width: 90%; border: solid 1px #ccc; border: 2px;' class='card p-2' src='/upfile/" . $ucms->$sls1 . "' alt='".__('Logo')."' /></center><br />\n";



$form = new form('?sl='.$sl.'&v=' . passgen(), 'post');
$form->file('file', __('Logoni razmeri 1280 * 408 px bo`lishi kerak').' (*.jpg, png, gif)');
$form->button(__('LOGONI YUKLASH'));
$form->display();


$doc->ret(__('Admin'), '/admin');	