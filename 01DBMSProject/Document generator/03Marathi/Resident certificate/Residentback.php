<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
<div id="marathi" style= border: 1px solid black;>
    <?php
    $office = $_POST['office'];
    $taluka = $_POST['taluka'];
    $District = $_POST['District'];
    $Date = $_POST['date'];
    $Name = $_POST['Name'];
    $Adhar = $_POST['Adhar'];
    $village = $_POST['village'];
    $Place = $_POST["Place"];
    
    echo "<p style= 'font-size: 18px; text-align:center'>ग्रामपंचायत कार्यालय".'&nbsp;'." <i> $office</i> ".'&nbsp;'.'&nbsp;'."  ता. <i> $taluka</i>"."      ".'&nbsp;'.'&nbsp;'." जि. <i> $District </i><p>";
    echo "<br>";
    echo "<h1 style= 'font-size: 40px; text-align:center'>रहिवासी दाखला</h1>";
    echo "<br>";
    echo "<p style= 'font-size: 18px; text-align:left'>जा.क्र".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'."दिनांक : $Date"."<p>";
    echo "<br>";
    echo "<p style= 'font-size: 18px; text-align:left'>सरपंच/ ग्रामसेवक / ग्रामविकास अधिकारी, ग्रामपंचायत ,<i> $office </i>".'&nbsp;'.'&nbsp;'."ता. <i> $taluka </i>".'&nbsp;'."जि. <i> $District</i> </p>";
    echo "<p style= 'font-size: 18px; text-align:left'>यांजकडून दाखला देण्यात येतो की, श्री/श्रीमती".'&nbsp;'.'&nbsp;'. "$Name ,</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>आधार कार्ड क्रमांक.".'&nbsp;'.'&nbsp;'."$Adhar.</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>हे ग्रामपंचायत  <i>$office</i>".'&nbsp;'.'&nbsp;'."हद्दीतील मौजे $village".'&nbsp;'." ता. <i> $taluka</i>"." जि. <i> $District </i> ,महाराष्ट्र."."</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>येथील कायम / तात्पुरते रहिवासी आहेत.</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>सदर दाखला त्यांचे विनंती अर्जानुसार, रहिवासी पुराव्याची पडताळणी व स्थानिक चौकशीच्या आधारे देण्यात येत आहे.</p>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo "<p style= 'font-size: 18px; text-align:left'>ठिकाण: $Place".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'."सही व शिक्का"."<p>";
    echo "<p style= 'font-size: 16px; text-align:left'>"."   ".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'."सरपंच/ग्रामसेवक/ग्रामविकास अधिकारी</p>";
    ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
let element = document.getElementById('marathi')

let option = {
    margin : 1,
    filename:"रहिवासी दाखला.pdf",
    image: { type: 'jpeg', quality:0.98},
    html2canvas: {scale: 3},
    jsPDF: { unit: 'in',orientation: 'portrait',border: '5px solid black',format: 'letter'}
}
html2pdf().set(option).from(element).save()
</script>
</html>