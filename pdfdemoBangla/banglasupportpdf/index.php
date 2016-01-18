<?php
ob_start();
require('mpdf/mpdf.php');
$mpdf=new mPDF();
$mpdf->useAdobeCJK=true;
$mpdf->SetAutoFont(AUTOFONT_ALL);
//$mpdf->WriteHTML(file_get_contents('fonts/mpdf.css'),1);
?>

    নামঃসাইফ উদ্দিন <br>
    মোবাঃ০১৮২৭২৩০৮০৬<br>
    মেইলঃ saifcsediu806@gmail.com<br>


<?php
$html=ob_get_contents();
$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');
$mpdf->Output();
?>
