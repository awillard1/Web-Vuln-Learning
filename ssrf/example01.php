<h2>A simple ssrf</h2>
<?php 
$ssrf = $_GET['ssrf'];
if (str_starts_with($ssrf,'http') || str_starts_with($ssrf,"file:")){
    if (empty($ssrf)){
        echo 'Nope';
        return;
    }
    $data = file_get_contents($ssrf);
    if (empty($data)){
        echo "No Data Found";
    }
    else{
        echo $data;
    }
}
?>