<h1 id=test></h1>
<script>
function xyz(){
	if (1===1){ 
		var zyx ='hello<?php echo str_ireplace('script','',str_ireplace('</script>','',$_GET["xss"]));?>';
		if (2==2){
			document.getElementById('test').innerText='hello';
		}
	}
}
</script>
