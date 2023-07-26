<?php


$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$Mobile = isset($_POST['Mobile']) ? $_POST['Mobile'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : "";
$Checkbox = isset($_POST['Checkbox']) ? $_POST['Checkbox'] : "";
$city = isset($_POST['city']) ? $_POST['city'] : "";

if ($name == '') {
    echo "name_error";
    exit();
} else if ($email == '') {
    echo "email_error";
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "invalidemail";
    exit();
} else if ($Mobile == '') {
    echo "Mobile_error";
    exit();
}
else if(strlen ($Mobile) !=10){
    echo "Mobile_or";
    exit();
}


else if ($password == '') {
    echo "password_error";
    exit();
} else if ($Gender == '') {
    echo "Gender_error";
    exit();
} else if ($Checkbox == '') {
    echo "Checkbox_error";
    exit();
} else if ($city == '') {
    echo "city_error";
    exit();
}

// echo "<pre>";
// print_r($_REQUEST);
// die;
?>
<?php 
$conn = mysqli_connect('localhost', 'root', '', 'ajax_validation_action') or die('database not cennected...!');
if (!$conn)
    echo "database not cennected...!";
   
    

    $insert = "INSERT INTO `table1`(`name`,`email`,`Mobile`,`password`,`Gender`,`Checkbox`,`city`)
    VALUES ('$name', '$email', '$Mobile', '$password','$Gender','$Checkbox','$city')";
    $fire = mysqli_query($conn,$insert);
    
    if ($fire) {
        echo "yes...!";
    } else {
        echo "no...!";
    }
    


?>