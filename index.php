<html><head>
    <style>
        body {font-family:arial}
        li {padding:2px}
        h1 {border-bottom: 5px solid black;margin: 15px 0px 5px 0px;
    display: inline-block;}
        </style>
</head>
<body>
    <h1>Web Vulnerability Learning</h1>
    <p>Have fun.</p>
    <ul><li>The URL parameter for these examples will be `xss`</li><ul>
<?php
$dir    = '.';
$dir1 = glob($dir . '/*' , GLOB_ONLYDIR);//scandir($dir);
foreach ($dir1 as $v1){
    echo '<h2>'.strtoupper(str_replace('./','',$v1)).'</h2><ul id="'.$v1.'">';
    $files = glob($v1.'/*.{*}', GLOB_BRACE);
    foreach ($files as $v2){
        $p=str_replace('./','',$v2);
        echo '<li><a href="'.$p.'">'.str_replace($v1.'/','',$v2).'</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>