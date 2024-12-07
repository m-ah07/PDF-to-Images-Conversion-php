<?php

require_once __DIR__ . '/../src/PdfToImages.php';

use PdfToImages\PdfToImages;

try {
    // Input PDF file path
    $pdfPath = __DIR__ . '/sample.pdf';

    // Output directory for images
    $outputDir = __DIR__ . '/output';

    // Initialize PdfToImages class
    $converter = new PdfToImages($pdfPath, $outputDir);

    // Convert PDF to images
    $images = $converter->convert();

    echo "Conversion successful! Images saved in: $outputDir\n";
    echo "Generated images:\n";
    print_r($images);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
