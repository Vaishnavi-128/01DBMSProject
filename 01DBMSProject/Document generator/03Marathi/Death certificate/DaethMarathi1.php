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
    $name = $_POST['name'];
    $tal = $_POST['tal'];
    $dis = $_POST['dis'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $placeb = $_POST['placeb'];
    $mother = $_POST['mother'];
    $father = $_POST['father'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $date2 = $_POST['date2'];
    $r = $_POST['r'];
    $r2 = $_POST['cause'];
    
    echo "<img style='width: 120px; height: 120px; float: left;' src='oto.png'>";
    echo "<img style='width: 120px; height: 120px; float: right;' src='to.png'>";
    echo "<h2 style= 'text-align:center'>महाराष्ट्र शासन</h2>";
    echo "<h2 style= 'text-align:center'>आरोग्य विभाग</h2>";
    echo "<h2 style= 'text-align:center'>ग्रामपंचायत</h2>";
    echo "----------------------------------------------------------------------------------------------------------------------";
    echo "<h2 style= 'text-align:center'>मृत्यु प्रमाणपत्र</h2>";
    echo "<p style= 'font-size: 18px; text-align:left'>जन्म आणि मृत्यू नोंदणी अधिनियम, 1969 च्या कलम 12/17 आणि महाराष्ट्र जन्म व मृत्यू नोंदणी नियम 2000 चे नियम 8/13 अन्वये देण्यात आले आहे.</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>प्रमाणित करण्यात येत आहे की, खालील माहिती जन्माच्या मूळ अभिलेखांच्या नोंद वहीतून घेण्यात आली आहे.जी की (स्थानिक क्षेत्र)$area तालुका: $tal जिल्हा: $dis नोंदवहीत उल्लेख आहे.</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>मृत व्यक्तीचे नाव : $name".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'." लिंग: $gender"."</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>मृत्यूची तारीख : $date".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'." मृत्यूचे ठिकाण: $placeb"."</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>आईचे पूर्ण नाव: $mother".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'." वडिलांचे पूर्ण नाव: $father"."</p>";  
    echo "<p style= 'font-size: 18px; text-align:left'>मृत्यूच्या वेळी</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>मृत व्यक्तीचा पत्ता: $address1".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'." कायमचा पत्ता: $address2"."</p>";
    echo "<p style= 'font-size: 18px; text-align:left'>प्रमाणपत्र दिल्याचा दिनांक: $date2".'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'." नोंदणी दिनांक: $r"."</p>"."<img style='width: 80px; height: 80px; float: right;' src='Log2.png'>";  
    echo "<p style= 'font-size: 18px; text-align:left'>मृत्यूचे कारण: $r2";
    echo "<p style= 'font-size: 16px; text-align:left'>ठिकाण: $area</p>";
    echo "<p style= 'font-size: 16px; text-align:right'>सही/शिक्का</p>";
    echo "<p style= 'font-size: 16px; text-align:right'>सरपंच/ग्रामसेवक/ग्रामविकास अधिकारी</p>";
    


   
    
    ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
let element = document.getElementById('marathi')

let option = {
    margin : 1,
    filename:"मृत्यु प्रमाणपत्र.pdf",
    image: { type: 'jpeg', quality:0.98},
    html2canvas: {scale: 2},
    jsPDF: { unit: 'in',orientation: 'portrait',border: '5px solid black',format: 'letter'}
}
html2pdf().set(option).from(element).save()
</script>
</html>