<?php

echo "Fehleranzeige: ". ini_get("display_errors");
echo "<br>";
echo "Fehleranzeige: ". ini_get("error_reporting");
echo "<br>";
echo "Fehleranzeige: ". ini_get("upload_max_filesize");
echo "<br>";

phpinfo();
?>