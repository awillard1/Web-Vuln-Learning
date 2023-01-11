<script>
function logme(val){
	console.log(val);
}
</script>
<body onload="logme('<?php
$string = str_ireplace('"','',str_ireplace('>','',str_ireplace('<','',str_ireplace('script','',$_GET["script"]))));
$string = str_ireplace('*','',$string);
$string = str_ireplace('-','',$string);
$string = str_ireplace('+','',$string);
$string = str_ireplace('/','',$string);
$string = str_ireplace('%','',$string);
$string = str_ireplace(':','',$string);
$string = str_ireplace('{','',$string);
$string = str_ireplace('}','',$string);
$string = str_ireplace('^','',$string);
echo $string;
?>');"><p>The goal is to alert document.domain when the page loads.</body>
