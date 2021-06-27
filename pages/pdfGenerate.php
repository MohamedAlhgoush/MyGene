<?php require_once('../Connection.php');?>
<?php
// Include the main TCPDF library
require_once('../TCPDF-main/tcpdf.php');


if(isset($_GET['aa'])){
    $AA = urlencode($_GET['aa']);
    $query = "SELECT * from upload_mutation where aa ='$AA'";
   $result = mysqli_query($con,$query)or die(mysqli_error($con));
   $fetch = mysqli_query($con,$query);
   if(mysqli_num_rows($result) == 0){
    $qq = "SELECT * from upload where aa ='$AA'";
    $uploadResult =  mysqli_query($con,$qq)or die(mysqli_error($con));
    $fetch = mysqli_query($con,$qq);
        }
}
class PDF extends TCPDF{



    public function Header(){
        $imageFileL = K_PATH_IMAGES .'logoL.png';
        $this->Image($imageFileL,20,8,40,'','PNG','','T',false,300,'',false,false,0,false,false,false);
        $imageFileM = K_PATH_IMAGES .'logoM.png';
        $this->Image($imageFileM,72,10,80,'','png','','T',false,300,'',false,false,0,false,false,false);
        $imageFileR = K_PATH_IMAGES .'logoR.jpg';
        $this->Image($imageFileR,155,5,50,'','JPG','','T',false,300,'',false,false,0,false,false,false);
        
        date_default_timezone_set('Asia/Riyadh');
        $date = date('d-m-Y H:i');
        $this->ln(22);
        $this->Cell(0, 10, 'Date : '.$date, 0, false, 'C', 0, '', 0, false, 'T', 'M');
        // print an ending header line
        $this->ln(10);
        $this->writeHTML("<hr>", true, false, false, false, '');


        
        
    }

    public function Footer(){
        
         // Position at 15 mm from bottom
        $this->SetY(-15);
        $this->writeHTML("<hr>", true, false, false, false, '');
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

    }

    public function LoadData($r) {
        // Read file lines
        while($row=mysqli_fetch_array($r)){            
        $data = array();
        foreach($r as $line) {
            $data[] = $line;
        }
        return $data;
    }

}
     public function getdata($data) {      
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell(160, 8, "Gene: ".$row['gene'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "ENS: ".$row['ens'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "cDNA: ".$row['cDNA'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "aa: ".$row['aa'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Tier: ".$row['tier'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Level: ".$row['level'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "E_source: ".$row['e_source'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Bio Type:  ".$row['bio_type'], 1, 1, 'L', $fill);
            $this->Ln();
            $this->Cell(160, 8, "Submited Type:  ".$row['submited_type'], 1, 1, 'L', $fill);
            $this->Ln();
            $fill=!$fill;
        }
    }
     public function getdata1($data) {      
         // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell(160, 8, "Gene: ".$row['gene'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "ENS: ".$row['ens'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "FDA For Same: ".$row['FDA_for_same'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "FDA For Other: ".$row['FDA_for_other'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "cDNA: ".$row['cDNA'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "aa: ".$row['aa'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "E_source: ".$row['e_source'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "ct_Title: ".$row['ct_title'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Investigational For Same: ".$row['investigational_for_same'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Preclinical For Same: ".$row['preclinical_for_same'], 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Preclinical Generic:  ".urldecode($row['preclinical_generic']), 1, 1, 'L', $fill);
            $this->ln();
            $this->Cell(160, 8, "Submited Type:  ".$row['submited_type'], 1, 1, 'L', $fill);
            $this->ln();
            $fill=!$fill;
        }
    }

}



// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('MyGeneSite');
$pdf->SetTitle('Gene Report');
$pdf->SetSubject('TCPDF Tutorial');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);



// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

$html = '
<div style="">
<h5 style="color:#009900;font-family: "Times New Roman", Times, serif;">Methods Description:</h5>
<br>
<h6 style="color:#009900;font-family: "Times New Roman", Times, serif;">Cancer variants segregation</h6>
<p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">
The method we use to distinguish between somatic and germline variants is based on Jones et al work (1).
 First, variants are filtered based on germline databases existence e.g. 1000G and ExAC. Variants with allele\'s
 frequency of none are considered as somatic. Then, variants are queried against somatic databases (e.g. COSMIC) (1).
  Third, variants type and proteins effect are used to predict somatic alterations. Missense variants 
 in kinase domains are predicted to cause gain of function and classified as somatic ones. Finally, nonsense,
  splicing-site, and frameshift type of variants, associated with loss of function in tumor suppressor genes,
  are called as somatic variants (2).</p>

  <h6 style="color:#009900;font-family: "Times New Roman", Times, serif;">Somatic variants classification</h6>
  <p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">Somatic Variant Annotator (SV- Annotator) is a tool developed to classify and interpret somatic variants for different types
   of tumor based on the joint guidelines (2). Variants categorization depends on the available level of evidence and associated
clinical significance.</p>
<br>
<h6 style="font-size:11px; color:#39e600;font-family: "Times New Roman", Times, serif;">Tier 1:variants with strong clinical significance</h6>
<p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">
level A evidence (biomarkers that promote response or resistance to FDA approved targeted therapy or included in professional
 guidelines as therapeutic, prognostic or diagnostic biomarkers for the same tumor type).
level  B evidence (biomarkers reported in well-powered studies with consensus from expert the field).
</p>
<h6 style="font-size:11px; color:#39e600;font-family: "Times New Roman", Times, serif;">Tier 2:variants with potential clinical significance</h6>
<p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">
level C evidence (biomarkers that promote response or resistance to FDA approved targeted therapy for different type of tumor,
 associated with current investigational  therapy or reported by a few small studies).
level D evidence (biomarkers presented in preclinical studies or a small number of case reports without consensus).
</p>
<h6 style="font-size:11px; color:#39e600;font-family: "Times New Roman", Times, serif;">Tier 3:variants of unknown clinical significance</h6>
<p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">
Variants with nonsignificant allele frequency in general or specific populations\' databases or in specific tumor-specific database and /or with none existing (convincing) published evidence related to cancer.
</p>
<h6 style="font-size:11px; color:#39e600;font-family: "Times New Roman", Times, serif;">Tier 4:benign or likely benign variants (not included in the report)</h6>
<p style=" line-height: 1.5; letter-spacing: 0.5px;font-size:12px; text-align:justify;font-family: "Times New Roman", Times, serif;">
Variants of significant allele frequency in general or specific populations\' databases and/or with none existing published evidence related to cancer.
</p>
</div>
';


$pdf->writeHTMLCell(0,0,'',35,$html, 0, 1, 0, true,'', true);
$pdf->lastPage();
$pdf->AddPage();

$genename = mysqli_fetch_array($fetch)['gene'];
// set default header data
$html = '
    <h6 style="color:#009900;font-family: "Times New Roman", Times, serif;">Result</h6>
';
$pdf->writeHTMLCell(0,0,90,42,$html, 0, 1, 0, true,'', true);
$html = '
    <h6 style="color:#009900;font-family: "Times New Roman", Times, serif;">Gene Name: '.$genename.'</h6>
';
$pdf->writeHTMLCell(0,0,80,48,$html, 0, 1, 0, true,'', true);
$pdf->ln(5);


//data loading
if(mysqli_num_rows($result)==0){
    $data = $pdf->LoadData($uploadResult);
    $pdf->getdata1($data);
}
else{
    $data = $pdf->LoadData($result);
    $pdf->getdata($data);
}



// Close and output PDF document
$pdf->Output('Report_Result_Of_'.$genename.'.pdf', 'I');
?>