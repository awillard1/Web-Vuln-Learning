<h1 id=test></h1>
<script>
function xyz(){
	if (1===<?php echo str_ireplace('</script>','',$_GET["id"]);?>){
		document.getElementById('test').innerText='hello';
	}
}

</script>