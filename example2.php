
<script>
var x = 'helloworld<?php echo str_replace(';','',str_replace('/','',str_ireplace('</script>','',$_GET["foo"])));?>';

</script>