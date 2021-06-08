<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // lets check that the email is unique
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0){
                echo "$email - This email already exists.";
            } else {
                // let's check that a file is uploaded or not
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name'];
                    // $img_type = $_FILES['image']['type'];
                    $img_tmp_name = $_FILES['image']['tmp_name'];
                    
                    // let's explode the image and get the extension
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    
                    $extensions = ['png', 'jpeg', 'jpg'];
                    if (in_array($img_ext, $extensions)) {
                        $time = time();
                        $new_img_name = $time.$img_name;
                        $uploadImage = move_uploaded_file($img_tmp_name, "../uploads/". $new_img_name);
                        if($uploadImage) {
                            $status = "Active now";
                            $random_id = rand(time(), 10000000);
                            // insert data in database table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ('{$random_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if ($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if (mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";
                                }
                            } else {
                                echo "Something went wrong." . mysqli_error($conn);
                            }
                        }
                    } else {
                        echo "Please select an image file - jpeg, jpg, png";
                    }
                } else {
                    echo "Please select an image file";
                }
            }
        } else {
            echo "This is not a valid email.";
        }
    } else {
        echo "All input field are required.";
    }
?>