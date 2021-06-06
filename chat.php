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
    <section class="chat-area">
      <header>
        <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="solo.jpg" alt="">
        <div class="details">
          <span>Nosa Agho</span>
          <p>Active now</p>
        </div>
      </header>
      <div class="chat-box">
        <div class="chat outgoing">
          <div class="details">
            <p>lorem ipsum dolor sit amet, consectetur adipicing elit</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="solo.jpg" alt="">
          <div class="details">
            <p>lorem ipsum dolor sit amet, consectetur adipicing elit</p>
          </div>
        </div>
      </div>
      <form action="#" class="typing-area">
        <input type="text" placeholder="Type a message here">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="./javascript/pass-show-hide.js"></script>
</body>

</html>