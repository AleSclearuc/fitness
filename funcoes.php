<?php
function QueryString(&$get, $inicio, $pasta){
	$get         = (isset($get)) ? strip_tags(trim($get)) : '';
    $regex       = '/(http|www|.php|.asp|.net|.gif|.exe|.jpg|.html|.htm)/i';
    $paginaHome  =  "{$pasta}/{$inicio}.php";
    $paginaAtual = "{$pasta}/{$get}.php";
    if(empty($get) || preg_match($regex, $get) || !file_exists($paginaAtual)){
        include($paginaHome);
    }else{
    	include($paginaAtual);
    }
}
?>