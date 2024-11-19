<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
    <h2>Kondisi If</h2>
    
<?php
$nama_hari = date("l");
if ($nama_hari == "Thursday") {
echo "Kamis";
} elseif ($nama_hari == "Friday") {
echo "Jumat";
} else {
echo "Sabtu";
}
?>

</body>
</html>