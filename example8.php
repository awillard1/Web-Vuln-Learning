<p>alert any string</p>
<script>
var x = 'helloworld<?php echo str_ireplace('script','',str_replace('alert','',str_replace('+','',str_replace('document','',str_replace('(','',str_replace(';','',str_replace('/','',str_ireplace('</script>','',$_GET["xss"]))))))));?>';
</script>
