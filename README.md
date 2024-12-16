# PDF to Images Conversion (PHP)

A lightweight PHP service for converting PDF files into images using `pdftoppm`. Supports PNG output and generates images for each page in the PDF.

---

## Features
- Converts PDF files into images (PNG format).
- Outputs one image per page in the PDF.
- Lightweight and easy to integrate.

## Requirements
- PHP 7.4 or higher.
- `pdftoppm` installed on the server (part of `poppler-utils`).

## Installation
1. Clone the repository:
    ```
    git clone https://github.com/marwan-ahmed-23/PDF-to-Images-Conversion-php.git
    ```
2. Install `pdftoppm` (if not already installed):
    ```
    sudo apt install poppler-utils
    ```

## Usage

### Example
Use the provided example script in the `examples/` directory:
```
require_once __DIR__ . '/../src/PdfToImages.php';

use PdfToImages\PdfToImages;

$pdfPath = __DIR__ . '/sample.pdf';
$outputDir = __DIR__ . '/output';

$converter = new PdfToImages($pdfPath, $outputDir);
$images = $converter->convert();

print_r($images);
```

Place a sample PDF in the `examples/` folder and run the script:
```
php examples/example.php
```

## Directory Structure

PDF-to-Images-Conversion-php/
├── examples/
│   └── example.php        # Example usage for PDF to Images conversion
├── src/
│   └── PdfToImages.php    # Core logic for PDF to images conversion
├── .gitignore             # Git ignore file
└── README.md              # Project documentation


## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue to report bugs or suggest features.

