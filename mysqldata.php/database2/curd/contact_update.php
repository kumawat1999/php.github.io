<?php include "hedar.php" ?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'mynewsid') or die('database not cennected...!');
if (!$conn) {
    echo "database not cennected...!";
}
$id = $_GET['id'];
// echo $id;

if (isset($_POST['save'])) {
    $namess = $_POST['named'];
    $emailsse = $_POST['emaild'];
    $subjeects = $_POST['subjectd'];
    $numberrr = $_POST['numberd'];
    $messagesd = $_POST['messaged'];
    $updateid = $_POST['updateid'];



    // $path = "image/".$image;
    // move_uploaded_file($fileymp,$path);

    $update = "UPDATE `contact_us` SET `name`='$namess',`email`='$emailsse',`subject`='$subjeects',`number`='$numberrr',`message`='$messagesd' WHERE `id` = '$updateid'";

    $chack = mysqli_query($conn, $update) or die(mysqli_error($conn));

    if ($chack) {
        echo "updated";
        header("location:contact_table.php");
    } else {
        echo "not updated";
    }


    // $queryfire = mysqli_query($conn, "select * from contact_us");
    // $datas = mysqli_fetch_array($queryfire);

    // header("location:contact_table.php");

}
$ids = $_GET['id'];

$data = "select * from contact_us where id = $ids";
$data_run = mysqli_query($conn,$data);
$row = mysqli_fetch_array($data_run);

?>

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div id="responce"></div> -->



                    <!-- =====form start ======== -->
                    <form method="post">

                        <input type="hidden" id="" name="updateid" value="<?= $id ?>">


                        <!-- name and email  -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" onkeypress="return ValidateAlpha(event)" maxlength="20" name="named" class="form-control" id="names" placeholder="Your Name" autocomplete="off">
                                <span id="fnameerr" style="color:red; display: none;"></span>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" id="emails" name="emaild" placeholder="Enter Email id">
                                <span id="emailerr" style="color:red; display: none; "></span>
                            </div>
                        </div>


                        <!-- subject and number  -->
                        <div class="row">
                            <div class="col-md-6 form-group mt-3 ">
                                <input type="text" class="form-control" onkeypress="return ValidateAlpha(event)" maxlength="20" name="subjectd" id="subject" placeholder="Subject">
                                <span id="suberr" style="color:red; display: none; "></span>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="numberd" onkeypress="return password_kye(event)" maxlength="10" id="number" placeholder="Mobile">
                                <span id="Numbererrr" style="color:red; display: none; "></span>
                            </div>
                        </div>

                        <!-- massesag -->
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="messaged" id="address" rows="5" onkeypress="return ValidateAlpha(event)" maxlength="250" placeholder="Message"></textarea>
                            <span id="addrerr" style="color:red;  display: none;"></span>
                        </div>

                        <!-- loding -->
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <!-- button  -->
                        <div class="text-center">
                            <button type="submit" name="save">Send Message</button>
                        </div>
                    </form>
                    <!-- =====form end ======== -->
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php include "footer.php" ?>