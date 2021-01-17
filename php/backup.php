<?php
ob_start();
  header("Access-Control-Allow-Origin: *");
 $con = mysqli_connect("localhost", "id5876035_mattf", "senha123", "id5876035_dbmattfontes") or die ("could not connect database");
$username = "id5876035_calfitx"; 
$password = "senha123"; 
$hostname = "localhost"; 
$dbname   = "id5876035_calfitx";
 
// if mysqldump is on the system path you do not need to specify the full path
// simply use "mysqldump --add-drop-table ..." in this case
$command = "C:\\mysqldump --add-drop-table --host=$hostname
    --user=$username ";
if ($password) 
        $command.= "--password=". $password ." "; 
$command.= $dbname;
system($command);
 
$dump = ob_get_contents(); 
ob_end_clean();
 
// send dump file to the output
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($dbname . "_" . 
    date("Y-m-d_H-i-s").".sql"));
flush();
echo $dump;
exit();
?>