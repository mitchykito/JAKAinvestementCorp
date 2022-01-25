<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "jaka";
$conn = mysqli_connect($host, $user, $pass, $db);
$results_per_page = 5;
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
// data fetch ng asset transmittal o kung sino yung papadalhan ng item
$sql = "SELECT * FROM asset_transmittal WHERE asset_transmittal_id = $id ORDER BY name ASC";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$userid = $row["asset_transmittal_id"];
		$emp_no = $row['emp_no'];
		$username = $row["name"];
		$ticket = $row["ticket"];
		$from = $row["fr"];
		$recipient = $row["recipient"];
		$checkout = $row['checkout'];
		$deployed = $row['deployed'];
		$department = $row["company"];
		$phone = $row["phone"];
		$ticket = $row["ticket"];
		$email = $row["email"];
	}
}


require('fpdf/fpdf.php');
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Times', 'B', 12);

// $pdf->Cell(159,10,$cur->IDNO,1,0);
// $pdf->Ln();
// $pdf->Cell(30,10,'',1,0);
// $pdf->Output();



class PDF extends FPDF
{
	// Page header
	function Header()
	{
		// Logo
		$this->Image('Picture1.png', 11, 10, 35);
		$this->Ln(0);

		// $this->Image('Picture1.png',56,70,190,190);
		// Arial bold 15
		$this->SetFont('Arial', '', 10);
		// Move to the right
		$this->SetXY(180, 10);
		$currentdate = date("m/d/Y");
		$this->Cell(10, 10, '2021-MIS-AIF-0009', 0, 0, 'C');
		$this->Ln(1);

		$this->SetXY(173, 10);
		$this->Cell(0, 20, '2020-MIS-ATF-v1', 0, 0, 'C');
		$this->Ln(1);

		$this->SetXY(183, 10);
		$this->Cell(0, 30, $currentdate, 0, 0, 'C');
		$this->Ln(20);
		$this->Cell(65);

		// Title

		$this->SetFont('Arial', '', 12);
		// Line break
		$this->Ln(1);
	}

	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}
	function Body()
	{
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(0);
	}

	function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
{
    $k=$this->k;
    if($this->y+$h>$this->PageBreakTrigger && !$this->InHeader && !$this->InFooter && $this->AcceptPageBreak())
    {
        $x=$this->x;
        $ws=$this->ws;
        if($ws>0)
        {
            $this->ws=0;
            $this->_out('0 Tw');
        }
        $this->AddPage($this->CurOrientation);
        $this->x=$x;
        if($ws>0)
        {
            $this->ws=$ws;
            $this->_out(sprintf('%.3F Tw',$ws*$k));
        }
    }
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $s='';
    if($fill || $border==1)
    {
        if($fill)
            $op=($border==1) ? 'B' : 'f';
        else
            $op='S';
        $s=sprintf('%.2F %.2F %.2F %.2F re %s ',$this->x*$k,($this->h-$this->y)*$k,$w*$k,-$h*$k,$op);
    }
    if(is_string($border))
    {
        $x=$this->x;
        $y=$this->y;
        if(is_int(strpos($border,'L')))
            $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-$y)*$k,$x*$k,($this->h-($y+$h))*$k);
        if(is_int(strpos($border,'T')))
            $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-$y)*$k,($x+$w)*$k,($this->h-$y)*$k);
        if(is_int(strpos($border,'R')))
            $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',($x+$w)*$k,($this->h-$y)*$k,($x+$w)*$k,($this->h-($y+$h))*$k);
        if(is_int(strpos($border,'B')))
            $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-($y+$h))*$k,($x+$w)*$k,($this->h-($y+$h))*$k);
    }
    if($txt!='')
    {
        if($align=='R')
            $dx=$w-$this->cMargin-$this->GetStringWidth($txt);
        elseif($align=='C')
            $dx=($w-$this->GetStringWidth($txt))/2;
        elseif($align=='FJ')
        {
            //Set word spacing
            $wmax=($w-2*$this->cMargin);
            $this->ws=($wmax-$this->GetStringWidth($txt))/substr_count($txt,' ');
            $this->_out(sprintf('%.3F Tw',$this->ws*$this->k));
            $dx=$this->cMargin;
        }
        else
            $dx=$this->cMargin;
        $txt=str_replace(')','\\)',str_replace('(','\\(',str_replace('\\','\\\\',$txt)));
        if($this->ColorFlag)
            $s.='q '.$this->TextColor.' ';
        $s.=sprintf('BT %.2F %.2F Td (%s) Tj ET',($this->x+$dx)*$k,($this->h-($this->y+.5*$h+.3*$this->FontSize))*$k,$txt);
        if($this->underline)
            $s.=' '.$this->_dounderline($this->x+$dx,$this->y+.5*$h+.3*$this->FontSize,$txt);
        if($this->ColorFlag)
            $s.=' Q';
        if($link)
        {
            if($align=='FJ')
                $wlink=$wmax;
            else
                $wlink=$this->GetStringWidth($txt);
            $this->Link($this->x+$dx,$this->y+.5*$h-.5*$this->FontSize,$wlink,$this->FontSize,$link);
        }
    }
    if($s)
        $this->_out($s);
    if($align=='FJ')
    {
        //Remove word spacing
        $this->_out('0 Tw');
        $this->ws=0;
    }
    $this->lasth=$h;
    if($ln>0)
    {
        $this->y+=$h;
        if($ln==1)
            $this->x=$this->lMargin;
    }
    else
        $this->x+=$w;
}
// notes sa baba ginawang function na lang
function remarks() {
    $title = "Noted By:";
    $title2 = "Received By:";
    $this->Cell(95,10, $title,"TRL",0);
    $this->Cell(95,10, $title2,"TRL",0);
    $this->Ln();
    $this->Cell(95,10, "__________________________","RL",0);
    $this->Cell(95,5, "By signing this form, I agree to the following: I am","RL",0,'FJ');
    $this->Ln();
    $this->Cell(95,10,"Signature Over Printed Name","RL",0);
    $this->Cell(95,5, "responsible for the equipment. I will use/transmit/them in","RL",0,'FJ');
    $this->Ln();
    $this->Cell(95,10, "","RL",0);
    $this->Cell(95,5, "the manner intended; I agree to keep the property in","RL",0,'FJ');
    $this->Ln();
    $this->Cell(95,10, "","RL",0);
    $this->Cell(95,5, "working condition, and to notify management should the","RL",0,'FJ');
    $this->Ln();
    $this->Cell(95,10, "Authorized By:","RL",0);
    $this->Cell(95,5, "property malfunction in any way, or should the property be","RL",0,'FJ');
    $this->Ln();
    $this->Cell(95,10, "","RL",0);
    $this->Cell(95,5, "lost or stolen.","RL",0,'L');
    $this->Ln();
    $this->Cell(95,10, "__________________________","RL",0);
    $this->Cell(95,5, "","RL",0,'L');
    $this->Ln();
    $this->Cell(95,10, "Signature Over Printed Name","RL",0,'L');
    $this->Cell(95,5, "__________________________    ________","RL",0,'C');
    $this->Ln();
    $this->Cell(95,10, "","BRL",0,'L');
    $this->Cell(95,10, "Signature Over Printed Name        Date","BRL",0,'C');

}
}



// Instanciation of inherited class


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P');
$pdf->SetAutoPageBreak(true, 10);

$pdf->SetTextColor(44, 187, 255);
$pdf->SetXY(11, 30);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Ln(10);
$pdf->Cell(190, 14, 'MIS-Asset Transmittal Form', 1, 1, 'C');
$pdf->SetTextColor(0);


$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Name: ", 'BRL', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(70, 7, $username, 'BR', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Checkout Date:", 'BR', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 7, $checkout, 'BR', 0);
$pdf->Ln();

// 2nd row
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Company/Dept: ", 'BRL', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(70, 7, $department, 'BR', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Deployed Date:", 'BR', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 7, $deployed, 'BR', 0);
$pdf->Ln();

// 3rd row
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Employee #: ", 'BRL', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(70, 7, $emp_no, 'BR', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "From:", 'BR', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 7, $from, 'BR', 0);
$pdf->Ln();

// 4th row
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Phone #: ", 'BRL', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(70, 7, $phone, 'BR', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "To:", 'BR', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 7, $recipient, 'BR', 0);
$pdf->Ln();

// 5th row
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Email: ", 'BRL', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(70, 7, $email, 'BR', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 7, "Ticket #:", 'BR', 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 7, $ticket, 'BR', 0);
$pdf->Ln(17);

// Equipment List
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 7, "Equipment List", 0, 0);
$pdf->Ln(10);

$pdf->SetTextColor(253, 253, 255);
$pdf->SetFillColor(18, 92, 176);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(59, 7, "Description ", 1, 0, 'C', true);

$pdf->Cell(59, 7, "Asset | S/N #", 1, 0, 'C', true);

$pdf->Cell(13, 7, "QTY", 1, 0, 'C', true);
$pdf->Cell(59, 7, "Comment", 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetTextColor(0);
$pdf->SetFillColor(255);

$t = $_GET['ticket'];
// sql code para sa fetching ng data ng transmittal details o yung mga item na dineploy
// para sa user
$sql = "SELECT * 
FROM  `transmittal_details` s,  `asset` c, asset_transmittal cl
WHERE s.`tag` = c.`tag` 
AND s.`ticket`= cl.`ticket`
AND cl.`ticket` = $t";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

		$userid = $row["asset_transmittal_id"];
		$username = $row["name"];
		$ticket = $row["ticket"];
		$name = $row["name"];
		$department = $row["company"];
		$phone = $row["phone"];
		$tag = $row["tag"];
		$hardware = $row["hardware"];
		$serialnum = $row["snum"];
		$status = $row["stat"];
		$qty = $row["qty"];
		$comment = $row["comment"];

		$pdf->SetFont('Arial', '', 11);
		$pdf->Cell(59, 7,$hardware, 'BRL', 0,'C');
		$pdf->Cell(59, 7,$serialnum, 'BRL', 0,'C');
		$pdf->Cell(13, 7,$qty, 'BRL', 0,'C');
		$pdf->Cell(59, 7,$comment, 'BRL', 0,'C');
		$pdf->Ln();
	}
}
$pdf->Cell(0, 7,"**Nothing Follows**", 'BRL', 0,'C');
$pdf->Ln(17);


$pdf->SetFont('Arial','',10);

// Notes function call
$pdf->remarks();

$conn->close();
$pdf->Output('I', "Transmittal Form.pdf", true);
?>