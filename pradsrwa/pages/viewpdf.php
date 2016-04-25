<?php
	
	 
	session_start();
	include_once('class.php');

$obj= new user();

require('WriteHTML.php');

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
//$pdf->Image('logo.png',18,13,33);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>Developed By : Yogesh Kumar Yadav	</h1><br>
Website: <u>www.pradsoft.com</u></para><br><br>');

$pdf->SetFont('Arial','B',7); 
		
$htmlTable='<TABLE>

<TR>
<TD>First name:</TD>
<TD>'.$_SESSION['user']['fname'].'</TD>
</TR>
<TR>
<TD>Last name:</TD>
<TD>'.$_SESSION['user']['lname'].'</TD>
</TR>
<TR>
<TD>Address:</TD>
<TD>'.$_SESSION['user']['add'].'</TD>
</TR>
<TR>
<TD>Contact:</TD>
<TD>'.$_SESSION['user']['contact'].'</TD>
</TR>
<TR>
<TD>Email:</TD>
<TD>'.$_SESSION['user']['email'].'</TD>
</TR>
</TABLE>';
				
$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>