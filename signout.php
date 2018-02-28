<?php

session_start();
session_destroy();
?>
<script type="text/javascript">
	alert('Log Out Successfully!!');
</script>

<?php
header('location:index.php');

?>