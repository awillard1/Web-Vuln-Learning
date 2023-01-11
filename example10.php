<script>
<?php
if ($_GET["xss"])
 echo 'runme();';
?>;
 
function runme(){
	var v=document.location.hash;
	if (v.includes('%3C') || v.includes('%3c') || v.includes('%3E') || v.includes('%3e')){return;}
	document.writeln(unescape(unescape(document.location.hash)));}
</script>
