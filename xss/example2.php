
<script>
var x = 'helloworld<?php echo str_ireplace('script','',str_replace(';','',str_replace('/','',str_ireplace('</script>','',$_GET["xss"]))));?>';
</script>
