# PDF to Images Conversion (PHP)

A lightweight PHP service for converting PDF files into images using `pdftoppm`. Supports PNG output and generates images for each page in the PDF.

---

## 🚀 Features
- Converts PDF files into images (PNG format).
- Outputs one image per page in the PDF.
- Lightweight and easy to integrate.

## ⚙️ Requirements
- PHP 7.4 or higher.
- `pdftoppm` installed on the server (part of `poppler-utils`).

## 🔧 Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/m-ah07/PDF-to-Images-Conversion-php.git
    ```
2. Install `pdftoppm` (if not already installed):
    ```bash
    sudo apt install poppler-utils
    ```

## Usage

### Example
Use the provided example script in the `examples/` directory:
```bash
require_once __DIR__ . '/../src/PdfToImages.php';

use PdfToImages\PdfToImages;

$pdfPath = __DIR__ . '/sample.pdf';
$outputDir = __DIR__ . '/output';

$converter = new PdfToImages($pdfPath, $outputDir);
$images = $converter->convert();

print_r($images);
```

Place a sample PDF in the `examples/` folder and run the script:
```bash
php examples/example.php
```

## 📂 Directory Structure
```plaintext
PDF-to-Images-Conversion-php/
├── examples/
│   └── example.php
├── src/
│   └── PdfToImages.php
├── LICENSE
├── .gitignore
└── README.md
```

## 🤝 Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue to report bugs or suggest features.

## 🌟 Show Your Support

If you found this project helpful, please consider giving it a ⭐ on GitHub. Your support means the world to us!
