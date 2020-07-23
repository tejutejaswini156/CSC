<?php  
include "header.php";
include "session.php"; 
include "db.php";
if(isset($_POST['gcmComplainttype'])  &&  isset($_POST["create_pdf"]))  
 {
  if ($_POST['gcmComplainttype'] =='total')
   {

  function fetch_data1($name)  
 {  
      $output = '';
      include "db.php";
      $sql1 = "SELECT * FROM `complaints` WHERE `gcm_name`='$name' ";       
      $result = mysqli_query($conn, $sql1);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["create_date"].'</td>  
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td>
                  <td>'.$row["status"].'</td>  
                  </tr>  
                          ';  
      }  
      return $output; 

  }
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("total complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">TOTAL COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="15%">custName</th>  
                <th width="10%">createdate</th>
                <th width="15%">comp title</th>   
                <th width="20%">comp type</th>  
                <th width="25%">comp desc</th>
                <th width="10%">status</th>  
           </tr>  
      ';  
      $content .= fetch_data1($name);  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');    
 }     
   if ($_POST['gcmComplainttype'] =='pending')
   {

  function fetch_data2($name)  
 {  
      $output = '';
      include "db.php";
      $sql1 = "SELECT * FROM `complaints` WHERE `gcm_name`='$name' AND (status='working' OR status='Assigned') ";       
      $result = mysqli_query($conn, $sql1);  
      while($row = mysqli_fetch_array($result))  
      {       
        $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["create_date"].'</td>  
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td>
                  <td>'.$row["status"].'</td>
                  <td>'.$row["assigned_date"].'</td>
                  <td>'.$row["gcm_comment"].'</td>  
                  </tr>  
                          ';  
      }  
      return $output; 

  }
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("pending complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">PENDING COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="10%">custName</th>  
                <th width="10%">createdate</th>
                <th width="10%">comp title</th>   
                <th width="10%">comp type</th>  
                <th width="20%">comp desc</th>
                <th width="10%">status</th>
                <th width="10%">Assign date</th>
                <th width="15%">gcm comment</th>  
           </tr>  
      ';  
      $content .= fetch_data2($name);  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');    
 }     
  
  if(($_POST['gcmComplainttype'])=='closed')  
 {  
  function fetch_data3($name)  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `complaints`  WHERE `gcm_name`='$name' AND status='closed'";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["create_date"].'</td> 
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td> 
                  <td>'.$row["assigned_date"].'</td>
                  <td>'.$row["gcm_comment"].'</td>
                  <td>'.$row["close_date"].'</td>                   
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("closed complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">CLOSED COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="10%">CName</th>  
                <th width="10%">create date</th>
                <th width="10%">comp title</th>   
                <th width="10%">comp type</th>  
                <th width="15%">comp desc</th>
                <th width="10%">Assigned date</th>
                <th width="20%">gcm comment</th>
                <th width="10%">closed date</th>
           </tr>  
      ';  
      $content .= fetch_data3($name);  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I'); 
  }

   
}    
//admin

 if(isset($_POST['Complainttype'])  &&  isset($_POST["create_pdf"]))  
 {  
   if ($_POST['Complainttype'] == 'open')
   {
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `complaints`  WHERE status='open'";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["create_date"].'</td>  
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td>  
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("opened complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">OPENED COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="15%">custName</th>  
                <th width="15%">createdate</th>
                <th width="20%">comp title</th>   
                <th width="20%">comp type</th>  
                <th width="25%">comp desc</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 } 
 if(($_POST['Complainttype'])=='Assigned')  
 {  
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `complaints`  WHERE status='Assigned'";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                 <td>'.$row["create_date"].'</td> 
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td> 
                  <td>'.$row["gcm_name"].'</td>
                  <td>'.$row["assigned_date"].'</td>   
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Assigned complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">ASSIGNED COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="10%">CName</th>  
                <th width="10%">createdate</th>
                <th width="15%">comp title</th>   
                <th width="20%">comp type</th>  
                <th width="20%">comp desc</th>
                <th width="10%">gcm name</th>
                <th width="10%">Assigned date</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I'); 
      } 
      if(($_POST['Complainttype'])=='working')  
 {  
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `complaints`  WHERE status='working'";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["assigned_date"].'</td> 
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td> 
                  <td>'.$row["gcm_name"].'</td> 
                  <td>'.$row["gcm_comment"].'</td>                    
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("working complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">WORKING COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="10%">CName</th>  
                <th width="10%">Assigned date</th>
                <th width="15%">comp title</th>   
                <th width="15%">comp type</th>  
                <th width="20%">comp desc</th>
                <th width="10%">gcm name</th>
                <th width="15%">gcm comment</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I'); 
      }
       if(($_POST['Complainttype'])=='closed')  
 {  
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `complaints`  WHERE status='closed'";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["cid"].'</td>  
                  <td>'.$row["cust_name"].'</td>
                  <td>'.$row["create_date"].'</td> 
                  <td>'.$row["comp_title"].'</td> 
                  <td>'.$row["comp_type"].'</td>
                  <td>'.$row["comp_desc"].'</td> 
                  <td>'.$row["assigned_date"].'</td>
                  <td>'.$row["gcm_name"].'</td> 
                  <td>'.$row["gcm_comment"].'</td>
                  <td>'.$row["close_date"].'</td>                   
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("closed complaints");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">CLOSED COMPLAINTS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="10%">CName</th>  
                <th width="10%">create date</th>
                <th width="10%">comp title</th>   
                <th width="10%">comp type</th>  
                <th width="15%">comp desc</th>
                <th width="10%">Assigned date</th>
                <th width="10%">gcm name</th>
                <th width="10%">gcm comment</th>
                <th width="10%">closed date</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I'); 
      }

 }
 if(isset($_POST['userdetails'])  &&  isset($_POST["create_pdf"]))  
 { 
   if ($_POST['userdetails'] == 'complainers')
   {
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `autenticate`  WHERE type<>'admin' AND type<>'grievancecellmember'AND status<>'0' ";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["name"].'</td>  
                  <td>'.$row["email"].'</td>
                  <td>'.$row["number"].'</td>  
                  <td>'.$row["type"].'</td> 
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("complainers ");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">COMPLAINERS IN THE VTAGMS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="25%">NAME</th>  
                <th width="25%">EMAIL ID</th>  
                <th width="25%">PHONE NO </th>
                <th width="25%">COMPLAINER TYPE</th>   
                </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 } 
  if ($_POST['userdetails'] == 'grievancecellmember')
   {
  function fetch_data()  
 {  
      $output = '';  
       include 'db.php';  
      $sql = "SELECT * FROM `autenticate`  WHERE  type='grievancecellmember'AND status<>'0' ";  
     
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                  <td>'.$row["name"].'</td>  
                  <td>'.$row["email"].'</td>
                  <td>'.$row["number"].'</td>  
                  <td>'.$row["w_platform"].'</td> 
                  </tr>  
                          ';  
      }  
      return $output;  
 }       
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("gcm members ");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 

      $content .= '  
      <h3 align="center">GRIEVANCE CELL MEMBERS IN THE VTAGMS</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="20%">NAME</th>  
                <th width="30%">EMAIL ID</th>  
                <th width="25%">PHONE NO </th>
                <th width="25%">WORK PLATFORM</th>   
                </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }
}
/*from here code for downloading excel file
if(isset($_POST['userdetails'])  &&  isset($_POST["create_csv"]))  
{
  if ($_POST['userdetails'] == 'complainers')
  {
    class Export 
    {
      public function excel()
       {
        include "db.php";
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $objPHPExcel=new PHPExcel();
        $objPHPExcel->getproperties()->SetCreator("");
        $objPHPExcel->getproperties()->SetLastModifiedBy("");
        $objPHPExcel->getproperties()->SetTitle("");
        $objPHPExcel->getproperties()->SetSubject("");
        $objPHPExcel->getproperties()->SetDescription("");
        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->SetCellValue('A1','name');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1','email');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1','phone no');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1','complainer type');

        $row=2;
        $sql1 = "SELECT * FROM `autenticate`  WHERE type<>'admin' AND type<>'grievancecellmember'AND status<>'0' "; 
     $result = mysqli_query($conn, $sql1);
     while($row = mysqli_fetch_array($result))
          {
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.'name',$value->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.'email',$value->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.'number',$value->number);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.'name',$value->type);
            $row++;
      }
      $filename=" complainers".'xlsx';
       header('Content-Type: application/vnd.openxmlformats-officedocument.spreedsheetml.sheet');
       header('Content-Disposition: attachment; filename="'.$filename.'"');

       $writer=PHPExcel_IOFactory::createwriter( $objPHPExcel,'Excel2007');
       $writer->save('php://output');
    }
  }

   
}
  } */


?> 


 
  
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <meta name="author" content="PIXINVENT">
    <title>Admin dashboard</title>
    
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/logo-size.png" data-expand="../../app-assets/images/logo/logo-size.png" data-collapse="../../app-assets/images/logo/logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>             
              
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $name;?></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
                <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="dashboard.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">DASHBOARD</span></a>
            
          </li>

          <?php 
          if($type=='admin')
          {
            ?>
          <li class="active nav-item"><a href="grievancecellmembers.php"><i class="icon-android-people"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Grievance cell members</span></a>
             </li>
                <li class=""><a href="registeredusers.php"><i class="icon-android-person-add"></i><span data-i18n="nav.changelog.main" class="menu-title">Registered Users</span></a>
               </li>
               
               <li class=" nav-item"><a href="#"><i class="icon-ios-briefcase-outline"></i><span data-i18n="nav.cards.main" class="menu-title">complaints</span></a>
            <ul class="menu-content">
        <li><a href="assigncomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">Assign complaints</a>
              </li>
              <li><a href="view_complaint.php" data-i18n="nav.cards.card_bootstrap" class=" menu-item">view complaints</a>
              </li>
              <li><a href="closecomplaints.php" data-i18n="nav.cards.card_bootstrap" class=" menu-item">closed complaints</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="reports.php"><i class="icon-clipboard"></i><span data-i18n="nav.advance_cards.main" class="menu-title">reports</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-plus "></i><span data-i18n="nav.advance_cards.main" class="menu-title">ADD institution details</span></a>
            
          </li>
            
         
            <?php
          }
           ?>
           
           <?php 
          if($type=='grievancecellmember')
          {
            ?>
             <li class=" nav-item"><a href="#"><i class="icon-ios-briefcase-outline"></i><span data-i18n="nav.cards.main" class="menu-title">complaints</span></a>
            <ul class="menu-content">
           <li><a href="view_complaint.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">view complaints</a>
              </li>
              <li><a href="assigncomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">un-attended complaints</a>
              </li>
              <li><a href="closecomplaints.php" data-i18n="nav.cards.card_bootstrap" class=" menu-item">close complaints</a>
              </li>
            </ul>
          </li>
           <li class="  active nav-item"><a href="reports.php"><i class="icon-clipboard"></i><span data-i18n="nav.advance_cards.main" class="menu-title">reports</span></a>
            
          </li>
                  

            <?php
          }
           ?>
         
          
				
          
          
          
          
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">

          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">REPORTS GENERATION</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Reports
                </li>
              </ol>
            </div>
          </div>
    
        </div>
        <div class="content-body"><!-- stats -->
<div class="row">
  <?php
    if($type=='admin')
    {
      ?>
   
        <div class="col-md-6">
            <div class="card  card-inverse ">
                <div class="card-body collapse in">
                    <div class="card-header bg-purple">
						 <h4 ><center>complaint reports</center> </h4>
             <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
          </div> 
					</div>
          <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                  <form method="POST" action="">
               <fieldset class="form-group position-relative has-icon-left mb-1" >                   
              <select name="Complainttype" class="form-control  select-lg" required>
              <option value="" selected disabled hidden>Select Complaint Type</option>
              <option value="open">opened complaints</option>
             <option value="Assigned">Assigned complaints</option>
             <option value="working">working complaints</option>
             <option value="closed">closed complaints</option>
              </select>
             <div class="form-control-position">
                                <i class="icon-pencil2 cyan"></i>
             </div>                     
                             
            </fieldset> 
                           
                <input type="submit" name="create_pdf" class="btn btn-green" value="Create PDF" formtarget="_blank" />
                            
                            
            </form>
          </div>
        </div>
                   
     
                    </div>
                </div>   
            </div>
             <div class="col-md-6">
            <div class="card  card-inverse ">
                <div class="card-body collapse in">
                    <div class="card-header bg-deep-orange">
             <h4 ><center>User reports</center> </h4>
             <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
          </div> 
          </div>
          <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                  <form method="POST" action="">
               <fieldset class="form-group position-relative has-icon-left mb-1" >                   
              <select name="userdetails" class="form-control  select-lg" required>
              <option value="" selected disabled hidden>Select user Type</option>
              <option value="complainers">complainers</option>
              <option value="grievancecellmember">grievance cell member</option>
              
              </select>
             <div class="form-control-position">
             <i class="icon-pencil2 cyan"></i>
             </div>                     
                             
            </fieldset> 
                                 
                <input type="submit" name="create_pdf" class="btn btn-green" value="Create PDF" formtarget="_blank" />

                <input type="submit" name="create_csv" class="btn btn-amber" value="Create CSV"  />

                            
                            
            </form>
          </div>
        </div>
                   
     
                    </div>
                </div>   
            </div>
          <?php
        }
        ?>
           <?php 
          if($type=='grievancecellmember')
          {
            ?>
            <div class="col-md-6">
            <div class="card  card-inverse ">
                <div class="card-body collapse in">
                    <div class="card-header bg-teal">
             <h4 ><center>complaint reports</center> </h4>
             <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
          </div> 
          </div>
          <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                  <form method="POST" action="">
               <fieldset class="form-group position-relative has-icon-left mb-1" >                   
              <select name="gcmComplainttype" class="form-control  select-lg" required>
              <option value="" selected disabled hidden>Select Complaint Type</option>
              <option value="total">totalcomplaints</option>
             <option value="pending">pendingcomplaints</option>
             <option value="closed">closed complaints</option>
              </select>
             <div class="form-control-position">
              <i class="icon-pencil2 cyan"></i>
             </div>                     
                             
            </fieldset> 
                           
            <input type="submit" name="create_pdf" class="btn btn-blue" value="Create PDF" formtarget="_blank" />
                            
                            
            </form>
          </div>
        </div>
                   
     
                    </div>
                </div>   
            </div>
            <?php
          }
          ?>




        </div>

    </div>
   

<!--/ project charts -->
<!-- Recent invoice with Statistics -->

<!-- Recent invoice with Statistics -->


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-


    <footer class="footer footer-static footer-light navbar-border">
      
    </footer> -->

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
