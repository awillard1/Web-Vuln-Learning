<p>Alert the value of document.domain</p>
<p><a href='https://gist.github.com/awillard1'>Look for the js_xss_payloads.js gist file.</a><br>This file changes often so a direct link would change each update.</p>
<script>
var x = 'helloworld<?php echo str_replace('document','',str_replace('alert','',str_replace(';','',str_replace('/','',str_ireplace('</script>','',$_GET["x"])))));?>';
</script>