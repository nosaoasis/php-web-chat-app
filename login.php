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
    <section class="form login">
      <header>Real Time Chat Application</header>
      <form action="#">
        <div class="error-txt">This is an error message!</div>
        <div class="field input">
          <label for="">Email Address</label>
          <input type="text" name="" placeholder="Enter your email address">
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input type="password" name="" placeholder="Enter Password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="#">Signup now</a> </div>
    </section>
  </div>

  <script src="./javascript/pass-show-hide.js"></script>
</body>

</html>