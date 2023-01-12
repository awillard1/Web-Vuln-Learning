<h1 id=test></h1>
<script>
function xyz(){
	if (1===<?php echo str_ireplace('script','',str_ireplace('</script>','',$_GET["xss"]));?>){
		document.getElementById('test').innerText='hello';
	}
}

</script>
