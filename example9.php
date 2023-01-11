<p>alert document.domain</p>
<script>
var x = 'helloworld<?php 
$string = preg_replace('/[^A-Za-z0-9\\\]/','',$_GET["x"]);
$r=array('/a/','/l/','/e/','/r/','/t/');
$string = preg_replace($r,'',$string);
$out = preg_replace_callback("(\\\\x([0-9a-f]{2}))i",function($a){return chr(hexdec($a[1]));},$string);
echo $out;
?>';
</script>