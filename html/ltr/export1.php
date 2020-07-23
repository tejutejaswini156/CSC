<?php  

include 'db.php';
include 'session.php';

if(isset($_POST['submit']))
{
 
  
$setSql = "SELECT * FROM syllabus WHERE `fname`!='admin'";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Faculty_Name" . "\t" . "Subject" . "\t" . "Section" . "\t". "Given" . "\t". "Covered" . "\t". "Units" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
} 
  
?>  