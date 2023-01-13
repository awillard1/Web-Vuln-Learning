<html><head><script id=xss>
  var url="/xss/files/simple-alert.php";
  var ele = document.getElementById('xss').tagName;
  var message = "<h1 style=font-family:arial><p>Ok this isn't all that real world, but it is useful.</p></h1><h4 style=font-family:arial><p>Make that money for the next tax bracket. Sometimes you don't have much to work with.</p></h4>";
  var a = '/<>';
  function xss(){
        fetch(url)
    .then((response) => response.text())
    .then((text) => {
      document.writeln(`<?php
      $p = $_GET['xss'];
      $p = str_ireplace('script','',$p);
      $p = str_ireplace('on','',$p);
      $p = preg_replace('/[^a-z0-9${}\[\]]/','',$p);
      echo $p;
      ?>`+message);
    });
}
</script></head><body/onload=xss()//></html>