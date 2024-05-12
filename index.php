<?php
  $conn = mysqli_connect('localhost', 'root','','contact_DB') or die('connection failed');
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date)
    VALUES ('$name', '$email', '$number', '$date')") or die('query failed');
    if($insert) {
      $message[] = 'appointment made successfully!';
    }else {
      $message[] = 'appointment failed!';
    }
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dental clinic</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- start header -->

    <header class="header fixed-top">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <a href="#home" class="logo"> dental<span>Care.</span></a>
          <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
          </nav>
          <a href="#contact" class="link-btn"> make appointment</a>
          <div id="menu-btn" class="fas fa-bars"></div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <!-- stat home -->
    <section class="home" id="home">
      <div class="container">
        <div class="row min-vh-100 align-items-center">
          <div class="content text-center text-md-left">
            <h3>Let us brighten your smile</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
              vitae dignissimos esse consequuntur aut officiis illo aliquam
              molestiae deserunt molestias, repellat placeat rerum fugit est
              facilis. Ratione ipsa recusandae quis!
            </p>
            <a href="#contact" class="link-btn">make appointment</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end home -->
    <!-- start about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 image">
            <div class="image-container"></div>
          </div>
          <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              tempore sequi nostrum labore sit tenetur ratione ipsum nesciunt
              impedit aliquam.
            </p>
            <a href="#contact" class="link-btn">make appointment</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end about -->

    <!-- start services -->

    <section class="services" id="services">
      <h1 class="heading">our services</h1>
      <div class="box-container container">
        <div class="box">
          <i class="fa-solid fa-tooth"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-teeth"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-notes-medical"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-user-doctor"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-hospital"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-syringe"></i>
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus, incidunt praesentium!
          </p>
        </div>
      </div>
    </section>

    <!-- end services -->
    <!-- start process -->

    <section class="process" id="process">
      <h1 class="heading">work process</h1>
      <div class="box-container container">
        <div class="box">
          <i class="fa-solid fa-bed-pulse"></i>
          <h3>Cosmetic dentistry</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea,
            accusamus!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-wheelchair-move"></i>
          <h3>pediatric dentistry</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea,
            accusamus!
          </p>
        </div>
        <div class="box">
          <i class="fa-solid fa-head-side-mask"></i>
          <h3>dental implants</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea,
            accusamus!
          </p>
        </div>
      </div>
    </section>
    <!-- end process -->
    <!-- start reviews -->

    <section class="reviews" id="reviews">
      <h1 class="heading">satisfied client</h1>
      <div class="box-container container">
        <div class="box">
          <img src="images/pic-1.png" width="300" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            accusantium iure quae! Animi similique ad, debitis sunt consectetur
            impedit possimus.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
        <div class="box">
          <img src="images/pic-2.png" width="300" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            accusantium iure quae! Animi similique ad, debitis sunt consectetur
            impedit possimus.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
        <div class="box">
          <img src="images/pic-3.png" width="300" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            accusantium iure quae! Animi similique ad, debitis sunt consectetur
            impedit possimus.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
      </div>
    </section>
    <!-- end reviews -->
    <!-- end contact -->
    <section class="contact" id="contact">
      <h1 class="heading">make appointment</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php if (isset($message)) {foreach($message as $message){echo '<p class="message">'.$message.'</p>';}}?>
        <span>your name :</span>
        <input
          type="text"
          name="name"
          placeholder="enter your name"
          class="box"
          required
        />
        <span>your email :</span>
        <input
          type="email"
          name="email"
          placeholder="enter your email"
          class="box"
          required
        />
        <span>your number :</span>
        <input
          type="number"
          name="number"
          placeholder="enter your number"
          class="box"
          required
        />
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required />
        <input
          type="submit"
          value="make appointment"
          name="submit"
          class="link-btn"
        />
      </form>
    </section>
    <!-- end contact -->
    <!-- start footer -->
    <section class="footer">
      <div class="box-container container">
        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>Phone Number</h3>
          <p>+123-456-7891</p>
          <p>+123-456-7891</p>
        </div>
        <div class="box">
        <i class="fa-solid fa-location-dot"></i>
          <h3>location</h3>
          <p>egypt</p>
          <p>sudia arabia</p>
        </div>
        <div class="box">
        <i class="fa-solid fa-clock"></i>
          <h3>Opening hours</h3>
          <p>8 AM : 10 PM daily</p>
        </div>
        <div class="box">
          <i class="fa-solid fa-envelope"></i>
          <h3>Email</h3>
          <p>email@email.com</p>
        </div>
      </div>
      <div class="credit">&COPY; created by <span>Nour Safwan❤️</span></div>
    </section>
    <!-- end footer -->

    <script src="js/script.js"></script>
  </body>
</html>
