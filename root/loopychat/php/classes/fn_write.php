<?php
	header('Access-Control-Allow-Origin: *');
	IF($_POST){
		$arr = array("http://localhost","");
		$_server = $_SERVER['HTTP_ORIGIN'];
		$bool = false;
		for($i=0;$i<count($arr);$i++){
			if( $arr[$i] == $_server ){
				$bool = true;
			}
		}
		if( $bool && $_POST['pass'] == "8732HUIR98FH3H" ){
			$data = $_POST['str'];
			$dir = $_POST['url'];
			$Odri = $_SERVER["DOCUMENT_ROOT"].dirname($dir)."/";
			if (!file_exists($Odri)) {
				mkdir($Odri, 0777, true);
			}
			$dir = $_SERVER["DOCUMENT_ROOT"].$dir;
			chmod( $dir ,0777);
			$f = fopen( $dir , "w+" ) or die("fopen failed");
			fwrite($f, $data);
			fclose($f);
		}
		if( $bool && $_POST['pass'] == "F87UHIRIE8UOIR" ){
			$dir = $_SERVER["DOCUMENT_ROOT"].$_POST['url'];
			$str = file_get_contents($dir);
			echo $str;
		}
	}
?>