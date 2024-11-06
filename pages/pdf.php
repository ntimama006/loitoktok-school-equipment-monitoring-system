<?php
require('fpdf/fpdf.php');

$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'LOITOKTOK SCHOOL EQUIPMENT MANAGEMENT SYSTEM');
$pdf->ln();
$pdf->Cell(40, 10, 'Sales Report');
$pdf->ln();
$pdf->Cell(40, 10, 'NAME',1);
$pdf->Cell(40, 10, 'Item',1);
$pdf->Cell(40, 10, 'Type',1);
$pdf->Cell(30, 10, 'QUANTITY',1);
$pdf->Cell(40, 10, 'DATE',1);
$pdf->ln();
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(128, 128, 128);

$conn=mysqli_connect("localhost","root","","loitoktok");
$sql="SELECT * FROM `reports` WHERE 1";
$exec=mysqli_query($conn,$sql);
$count=mysqli_num_rows($exec);

if ($count==0) {
}else{
while ($row=mysqli_fetch_array($exec)) {
        $id=$row['id'];
        $name=$row['name'];
        $phone=$row['phone'];
        $item=$row['item'];
        $type=$row['type'];
        $quantity=$row['quantity'];
        $department=$row['department'];
        $date=$row['date'];
        $pdf->Cell(40, 10, $name,1);
        $pdf->Cell(40, 10, $item,1);
        $pdf->Cell(40, 10, $type,1);
        $pdf->Cell(30, 10, $quantity,1);
        $pdf->Cell(40, 10, $date,1);  
        $pdf->ln();

    }}
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $sql="SELECT *,SUM(quantity) AS tot FROM `items` WHERE 1";
    $exec=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_array($exec);
    
    $total= $fetch['tot'];
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, '',1);
$pdf->Cell(40, 10, '',1);
$pdf->Cell(40, 10, 'TOTAL',1);
$pdf->Cell(30, 10, $total,1);
$pdf->Output();
?>