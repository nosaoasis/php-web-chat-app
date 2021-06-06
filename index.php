<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My PHP Chat Application</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Real Time Chat Application</header>
      <form action="#">
        <div class="error-txt">This is an error message!</div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="" placeholder="First Name">
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="" placeholder="Last Name">
          </div>
        </div>
        <div class="field input">
          <label for="">Email Address</label>
          <input type="text" name="" placeholder="Enter your email address">
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input type="password" name="" placeholder="Enter Password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label for="">Select Image</label>
          <input type="file" name="">
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="#">Login now</a> </div>
    </section>
  </div>

  <script src="./javascript/pass-show-hide.js"></script>
</body>

</html>