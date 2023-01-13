<html><head>
</head>
<body>
    <form action="example16.php" method="POST">
        <p>First Name:</br>
        <input name="xss1" id="xss1" value=""><br>
        Last Name:<br>
        <input name="xss2" id="xss2" value="">
        <input type="submit" name="xss" id="xss" value="Submit">
</p>
</form>
<?php 
  if(isset($_POST['xss'])){
      $p = $_POST['xss1'];
      $q = $_POST['xss2'];
      if (str_contains($p,'<') && str_contains($p,'>')){
        $p = str_replace('>','',$p);
        $p = str_replace('<','',$p);
      }
      if (str_contains($q,'<') && str_contains($q,'>')){
        $q = str_replace('>','',$q);
        $q = str_replace('<','',$q);
      }
      echo "Welcome ".$p." ".$q."! Welcome to example 16.";
  }
?>
</body>
</html>