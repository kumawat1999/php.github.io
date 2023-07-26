<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="boximg.css">
    <style>
        span.titel {
            font-size: 20px;
            text-align: center;
            margin-left: 42%;
            color: blue;
        }

        .lorem {
            padding: 3px;
            margin-top: 10px;
            margin-left: 10px;
        }

        .col-sm-4 {
            border: 1px solid;
        }

        #mandiv {
            /* border: 1px solid; */
            margin-top: 10px;
            margin: 10px;
        }

        img {
            margin-left: 42px;
            width: 193px;
        }
    </style>
    <title>Document</title>
    <?php
    $titels = [
        [
            "titalk" => "Blog1",
            "image" => "images",
            "loremss" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, natus? Minima repellendus molestias deserunt libero? Odio debitis commodi ipsa accusantium qui cupiditate? Est unde asperiores temporibus blanditiis ducimus ea velit."
        ],

        [
            "titalk" => "Blog2",
            "image" => "images",
            "loremss" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, natus? Minima repellendus molestias deserunt libero? Odio debitis commodi ipsa accusantium qui cupiditate? Est unde asperiores temporibus blanditiis ducimus ea velit."
        ],

        [
            "titalk" => "Blog2",
            "image" => "images",
            "loremss" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, natus? Minima repellendus molestias deserunt libero? Odio debitis commodi ipsa accusantium qui cupiditate? Est unde asperiores temporibus blanditiis ducimus ea velit."
        ],

        

    ]


    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($titels as $count) :
            ?>
                <div class="col-sm-3" id="mandiv">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="titel"> <?= $count["titalk"] ?></span>
                        </div>
                        <img src="./imgg.jpg" class="img-responsive"<?= $count["image"] ?>>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="lorem"><?= $count["loremss"] ?></p>
                            </div>
                        </div>
                     
                    </div>
                </div>
            <?php 
            endforeach;
             ?>
        </div>
    </div>
</body>

</html>