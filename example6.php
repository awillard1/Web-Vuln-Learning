<p>Alert the value of document.domain</p>
<p>HINT: <a href='https://gist.github.com/awillard1'>Look for the js_xss_payloads.js gist file.</a><br>The js_xss_payloads.js file changes often so a direct link on gist would change with each update.</p>
<script>
var x = 'helloworld<?php echo str_replace('document','',str_replace('alert','',str_replace(';','',str_replace('/','',str_ireplace('</script>','',$_GET["xss"])))));?>';
</script>
