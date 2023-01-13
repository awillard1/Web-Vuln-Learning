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
    <iframe style="float:right;margin-right:50px" src="INFO.md" width="500px" height="500px"></iframe>
<?php
$dir    = '.';
$dir1 = glob($dir . '/*' , GLOB_ONLYDIR);//scandir($dir);
foreach ($dir1 as $v1){
    echo '<h2>'.strtoupper(str_replace('./','',$v1)).'</h2><ul id="'.$v1.'">';
    $files = glob($v1.'/*.{*}', GLOB_BRACE);
    foreach ($files as $v2){
        $p=str_replace('./','',$v2);
        echo '<li><a href="'.$p.'">'.str_replace($v1.'/','',$v2).'</a></li>';
    }
    echo '</ul>';
}
?>
</body>
</html>