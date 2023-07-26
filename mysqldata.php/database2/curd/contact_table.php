<?php include "hedar.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<?php
// $conn = mysqli_connect('localhost', 'root', '', 'mynewsid') or die('database not cennected...!');
// if (!$conn)
//     echo "database not cennected...!";
?>

<body>
     <main id="main"> 
        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-md-4" style="background-color:#0d2735;">
                <p>
                <h1>MODERNA.....></h1>
                </p>
            </div>
            <div class="col-md-8">
                <a class="btn btn-info" href="contact.php ">Add Member</a>
                <table class="table" style="border:1; color:blue;">
                    <thead>
                        <tr>
                            <th>ID'S</th>
                            <th> NAME</th>
                            <th> EMAIL</th>
                            <th> SUBJECT</th>
                            <th> MOBILE</th>
                            <th> MESSAGE</th>
                            <th> DELETE</th>
                            <th> EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        $number = 1;
                        $queryfire = mysqli_query($conn, "select * from contact_us");
                        while ($datas = mysqli_fetch_array($queryfire)) : ?>
                            <tr>
                                <td><?= $number ?></td>
                                <td><?= $datas['name'] ?></td>
                                <td><?= $datas['email'] ?></td>
                                <td><?= $datas['subject'] ?></td>
                                <td><?= $datas['number'] ?></td>
                                <td><?= $datas['message'] ?></td>
                                <td>
                                    <a href="contact_delete.php?id=<?= $datas['id'] ?>" class="btn btn-danger" id="delet" role="button">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" id="updet" href="contact_update.php?id=<?= $datas['id'] ?>" role="button">Edit</a>
                                </td>
                            </tr>
                        <?php $number++;
                        endwhile ?>
                    </tbody>
                </table>
            </div>
            <section class="services">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>

                </div>
            </section><!-- End Services Section -->
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>