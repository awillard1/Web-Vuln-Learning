<h1 id=test>What a about those parameters? A <r>ray of possibilities!</h1>
Get &lt;a href="javascript:alert(document.domain)"&gtclick me&lt;/a&gt; to be written to the page.
<p><?php 
$i=0;
$params = $_GET["xss"];
foreach($params as $value){
    $p = strtolower(str_replace('  ','',$value));
    if (str_contains($p,'http')){
        echo 'That is not how we do javascript!';
        $i=0;
        break;
    }
    if ($i==0){
        if (str_contains($p,'h')){
            echo 'That doesn\'t belong here';
            break;
        }
    }
    if (str_contains($p,'=j') || str_contains($p,'=\'j') || str_contains($p,'="j') || str_contains($p,' j')){
        echo 'Not going to be that easy!';
        $i=0;
        break;
    }
    if (str_contains($p,'t:a') || str_contains($p,'t: ')){
        echo 'Not going to be that easy!';
        $i=0;
        break;
    }
    $i=$i+1;
}
if ($i>0){
    echo implode($_GET['xss']);
}
;?></p>
