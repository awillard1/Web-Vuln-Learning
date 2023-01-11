<p>The goal is to alert document.domain</p>
<p>This one could be a little annoying. You can't send a normal payload.</p>
<p>HINT: <a href='https://gist.github.com/awillard1'>Look for the js_xss_payloads.js gist file.</a><br>The js_xss_payloads.js file changes often so a direct link on gist would change with each update.</p>
<script>
<?php
$string = $_GET["script"];
if (str_contains($string,'<'))
	return;
if (str_contains($string,'\''))
	return;
if (str_contains($string,'document'))
	return;
if (str_contains($string,'alert'))
	return;
echo $string;
?>
</script>