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
    $Name2 = $_POST['Name2'];
    $Adhar1 = $_POST['Adhar1'];
    $Adhar2 = $_POST['Adhar2'];
    $Place = $_POST["Place"];
    
    echo "<div style='width: 120px; height: 120px; border: 2px solid black; float: left;'></div>";
    echo "<img style='width: 120px; height: 120px; float: center;' src='hoto.png'>";
    echo "<img style='width: 120px; height: 120px; float: center;' src='hoto.png'>";
    echo "<div style='width: 120px; height: 120px; border: 2px solid black; float: right;'></div>";
    echo "<br>";
    echo "<p style= 'font-size: 18px; text-align:center'>ग्रामपंचायत कार्यालय".'&nbsp;'." <i> $office</i> ".'&nbsp;'.'&nbsp;'."  ता. <i> $taluka</i>"."      ".'&nbsp;'.'&nbsp;'." जि. <i> $District </i><p>";
    echo "<br>";
    echo "<h1 style= text-align:center>विवाह नोंदणीचे प्रमाणपत्र</h1>";
    echo "<br>";
    echo "<p style= 'font-size: 18px; text-align:left'>प्रमाणित करण्यात येते की , पतीचे नाव :".'&nbsp;'.'&nbsp;'."$Name".'&nbsp;'.'&nbsp;'."आधार कार्ड क्रमांक : $Adhar1"."</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>राहणार $office  ता. $taluka  जि. $District  आणि  पत्नीचे नाव:  $Name2  आधार कार्ड क्रमांक : $Adhar2</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>यांचा विवाह दिनांक : $Date रोजी $Place येथे (ठिकाणी) विवाह विधी संपन्न झाला. </p>";
    echo "<p style= 'font-size: 18px; text-align:left'>त्याची महाराष्ट्र विवाह मंडळाने विनियमन आणि विवाह नोंद विधेयक , 1998.</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>अन्वये ठरवण्यात आलेल्या नोंदवही च्या खंड क्रमांक        च्या अनुक्रमांक वर दिनांक $Date रोजी माझ्याकडून नोंदणी करण्यात आली आहे.</p>";
    echo "<br>"."<img style='width: 80px; height: 80px; float: right;' src='Log2.png'>";
    echo "<p style= 'font-size: 18px; text-align:left'>ठिकाण : $Place</p>";
    echo "<br>";
    echo "<p style= 'font-size: 18px; text-align:right'>निबंधक/विवाह नोंदणी तथा</p>";
    echo "<p style= 'font-size: 18px; text-align:right'>ग्रामसेवक/ग्रामविकास अधिकारी</p>";
    echo "<p style= 'font-size: 18px; text-align:right'>ग्रामपंचायत</p>";
    
    ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
let element = document.getElementById('marathi')

let option = {
    margin : 1,
    filename:"विवाह दाखला.pdf",
    image: { type: 'jpeg', quality:0.98},
    html2canvas: {scale: 2},
    jsPDF: { unit: 'in',orientation: 'portrait',border: '5px solid black',format: 'letter'}
}
html2pdf().set(option).from(element).save()
</script>
</html>