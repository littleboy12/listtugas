<?php
require_once "../_config/config.php";

mysqli_query($conn, "DELETE FROM file WHERE file_id = '$_GET[id]'") or die (mysqli_error($conn));
echo "<script>window.location='index.php';</script>";
?>