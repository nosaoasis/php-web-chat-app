<?php
  session_start();
  if(isset($_SESSION['unique_id'])) {
    header("location: users.php");  
  }
?>


<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Real Time Chat Application</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name" required />
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required />
          </div>
        </div>
        <div class="field input">
          <label for="">Email Address</label>
          <input type="text" name="email" placeholder="Enter your email address" required />
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Enter Password" required />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label for="">Select Image</label>
          <input type="file" name="image" />
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a> </div>
    </section>
  </div>

  <script src="./javascript/pass-show-hide.js"></script>
  <script src="./javascript/signup.js"></script>
</body>

</html>