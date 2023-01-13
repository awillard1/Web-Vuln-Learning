<h2>Another simple load of a file</h2>
<?php 
$path = $_GET['lfi'];
if (str_starts_with($path,'http:') || str_starts_with($path,'https:')){
    echo "Not going to grab files from the web.";
    return;
}
$file = file_get_contents("./".$path);
echo empty($file) ? "That file doesn't seem to exist!" : $file;
?>
