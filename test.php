<?php
  $myValue = "Hello, World!";
?>

<script>
  var myValue = "<?php echo $myValue; ?>";
  alert(myValue);
</script>