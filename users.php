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
    <section class="users">
      <header>
        <div class="content">
          <img src="solo.jpg" alt="">
          <div class="details">
            <span>Nosa Agho</span>
            <p>Active now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="solo.jpg" alt="">
            <div class="details">
              <span>Osayi Agbonlahor</span>
              <p>This is a test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
  </div>

  <script src="./javascript/users.js"></script>
</body>

</html>