<html><head><script>
<?php 
  if(isset($_POST['xss'])){
      $p = $_POST['xss'];
      $p = str_ireplace('script','',$p);
      $p = str_replace('"','',$p);
      $p = str_replace('>','',$p);
      $p = str_replace('<','',$p);
      $p = str_replace(')','',$p);
      $p = str_replace('(','',$p);
      $p = str_replace('.','',$p);
      echo "var xss=x=>alert(`\${x}`);xss('Hello ". $p."! Welcome to example 15');";
  }
?>
</script></head>
<body>
    <form action="example15.php" method="POST">
        <p>Your Name:</br>
        <input name="xss" id="xss" value="">
        <input type="submit" value="Submit">
</p>
</form>
</body>
</html>