<!DOCTYPE html>
<html>
  <head>
    <title>PDF to Marathi Form Converter</title>
  </head>
  <body>
    <h1>PDF to Marathi Form Converter</h1>
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="pdf-file" accept=".pdf">
      <button type="submit" name="submit-btn">Convert to Marathi</button>
    </form>

    <?php
    if (isset($_POST['submit-btn'])) {
      // Load PDF file
      $pdfData = file_get_contents($_FILES['pdf-file']['tmp_name']);

      // Extract text from PDF
      $command = escapeshellcmd('pdftotext -enc UTF-8 -nopgbrk -q -');
      $process = proc_open($command, [0 => ['pipe', 'r'], 1 => ['pipe', 'w']], $pipes);
      fwrite($pipes[0], $pdfData);
      fclose($pipes[0]);
      $extractedText = stream_get_contents($pipes[1]);
      fclose($pipes[1]);
      proc_close($process);

      // Translate text to Marathi
      $translation = file_get_contents('https://translation.googleapis.com/language/translate/v2?key=YOUR_API_KEY&q=' . urlencode($extractedText) . '&source=en&target=mr');
      $marathiText = json_decode($translation)->data->translations[0]->translatedText;

      // Insert text into PDF form
      $pdfFormFields = ['fieldName' => $marathiText];
      $pdfFormFile = 'MarathiForm.pdf';
      $pdfForm = pdftk_fill_form('OriginalForm.pdf', $pdfFormFields, $pdfFormFile);

      // Output Marathi PDF form
      header('Content-Type: application/pdf');
      header('Content-Disposition: attachment; filename="MarathiForm.pdf"');
      echo file_get_contents($pdfFormFile);
      exit;
    }

    function pdftk_fill_form($pdfFile, $formData, $outputFile) {
      $fdfFile = tempnam(sys_get_temp_dir(), 'fdf');
      $pdfFormFile = tempnam(sys_get_temp_dir(), 'pdf');
      $command = escapeshellcmd("pdftk $pdfFile fill_form $fdfFile output $pdfFormFile");
      file_put_contents($fdfFile, '%FDF-1.2' . PHP_EOL . '1 0 obj<<>>endobj' . PHP_EOL . 'trailer' . PHP_EOL . '<</Root 1 0 R>>' . PHP_EOL . '%%EOF' . PHP_EOL);
      foreach ($formData as $key => $value) {
        file_put_contents($fdfFile, "/$key ($value)" . PHP_EOL, FILE_APPEND);
      }
      proc_close(proc_open($command, [0 => ['pipe', 'r'], 1 => ['pipe', 'w']], $pipes));
      unlink($fdfFile);
      rename($pdfFormFile, $outputFile);
      return $outputFile;
    }
    ?>
  </body>
</html>
