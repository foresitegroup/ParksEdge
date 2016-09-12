<?php
include_once "inc/dbconfig.php";
require('inc/fpdf/fpdf.php');

$date = time();
$nextmonth = mktime(1, 1, 1, date('m')+1, 1, date('Y'));
$title = date("F Y");
$first_day = strtotime("First day of " . $title . " 00:00");
$last_day = strtotime("First day of " . date("F Y", $nextmonth) . " 00:00");
$days_in_month = date("j", $last_day-1);
$blanks = date("w", $first_day);

$pdf = new FPDF('P','in','Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$startspaces = date("w", $first_day)-1;
$newline = ($startspaces > 4) ? 1 : 0;
$pdf->Cell(1.55*$startspaces,1.55,'',1,$newline);
$count = $startspaces+1;

$result = $mysqli->query("SELECT * FROM menu WHERE date >= '$first_day' AND date < '$last_day' ORDER BY date ASC");

while($row = $result->fetch_array(MYSQLI_BOTH)) {
  $newline = ($count > 4) ? 1 : 0;
  $currentX = $pdf->GetX();
  $currentY = $pdf->GetY();

  // Write dates
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(1.55,0.2,date("j", $row['date']),0,$newline,"L");
  $pdf->SetFont('Arial','',10);
  
  // Calculate content height
  $lunch = str_replace("\n\r", "\n", trim($row['lunch']));
  $column_width = 1;
  $total_string_width = $pdf->GetStringWidth($lunch);
  $number_of_lines = $total_string_width / $column_width;
  $line_height = 0.17;
  $height_of_cell = $number_of_lines * $line_height;
  $MultiY = (1.55 - $height_of_cell) / 2;
  
  // Write content
  $pdf->SetXY($currentX, $currentY + $MultiY);
  $pdf->MultiCell(1.55,$line_height,$lunch,0,"C");
  
  // Draw boxes
  $pdf->SetXY($currentX, $currentY);
  $pdf->Cell(1.55,1.55,"",1,$newline,"C");

  if ($count == 5) $count = 0;
  $count++;
}

$pdf->Output();