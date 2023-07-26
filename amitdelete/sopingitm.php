<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Blogs</title>
    <style>
        .col-sm-3 {
            margin-top: 41px;
            background-color: #f6f6fa;
            padding: 10px;
        }

        #mandiv {
            margin: 30px;
        }

        img.image {
            margin-left: 14px;
            margin-top: 16px;
            width: 89%;
            height: 85%;
        }

        span.titel {
            margin-left: 8%;
            font-size: 18px;
            font-family: fantasy;
            color: #0911eb;
            margin-top: 10px;
        }

        span.titel:hover {
            color: green;
        }

        span.titelss {
            margin-left: 4%;
            font-size: 18px;
            font-family: fantasy;
            color: #0911eb;
            margin-top: 10px;
        }

        .titelss:hover {
            color: red;
        }

        span {
            margin-left: 33%;
            font-size: 19px;
        }
    </style>


</head>
<?php

$soping = [
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "cap.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "casio.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "derma.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "fastrack.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "grilsbag.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "bags.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "casio.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "grilsbag.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "bags.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "cap.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
    [
        "titelss" => ">>>>>",
        "titel" => "सर्वादिक बिकने वाला आईटीएम..",
        "image" => "derma.jpg",
        "titeldoun" => "FASTRACK",
        "titelsecound" => "सनस्क्रीन क्रीम SPF 50 लाइटवेट, कोई सफ़ेद कास्ट, ब्रॉड स्पेक्ट्रम PA ++++, मुँहासे सुरक्षित | ",
        "titelthird" => "₹379 (₹758/100 g) ₹399 (5% की छूट)
        चुनिंदा बैंक कार्ड पर 10% की छूटचुनिंदा बैंक कार्ड पर 10% की छूट
        सब्सक्राइब & सेव के साथ 5% और बचाओ
        कल,फ़रवरी 13 तक पाएं
        FREE Delivery by Amazon"
    ],
];

?>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($soping as $sopinggg) {
            ?>
                <div class="col-sm-3" id="mandiv">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="titelss"><?= $sopinggg["titelss"] ?> </span>
                            <span class="titel"><?= $sopinggg["titel"] ?> </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href=""><img class="image"  src="../img/<?= $sopinggg['image'] ?>"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span><?= $sopinggg["titeldoun"] ?></span>
                            <P class="titelsecound"><?= $sopinggg["titelsecound"] ?></P>
                            <P class="titelthird"><?= $sopinggg["titelthird"] ?></P>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- 
        एनालॉग काला डायल यूनिसेक्स-एडल्ट घड़ी-38024PP25, काला, पट्टा
        ₹595 ₹850 (30% की छूट)
        चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।
        शनिवार, फ़रवरी 18 तक पाएं
        Amazon द्वारा फ़्री डिलीवरी

        Brat काला 46 Cms कैज़ुअल बैकपैक, काला, कैज़ुअल
        ₹669 ₹2,100 (68% की छूट)
        चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।
        Amazon द्वारा फ़्री डिलीवरी


        BAGGIT
        Women's PEPSI Sling Bag


        पुरुषों के लिए OXYFIT (N) कैज़ुअल शूज़
        5 में से 4.1 स्टार 29,007
        ₹649 ₹999 (35% की छूट)
        चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।चयन कार्ड पर कोई लागत ईएमआई उपलब्ध नहीं है।



        CASIO
        Vintage पुरुषों के लिए ग्रे(धूसर) डायल वाली डिजिटल वॉच - F-A158WA-1DF (D011) -->
</body>

</html>