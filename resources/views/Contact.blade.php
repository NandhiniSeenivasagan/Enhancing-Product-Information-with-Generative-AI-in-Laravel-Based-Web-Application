<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Contact Us Form | CodingLab</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
  <div class="parent-div">
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Super Botics</div>
            <div class="text-two">virudhunagar</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">98 93 56 47 77</div>
            <div class="text-two">96 34 34 56 78</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">superbotics@gmail.com</div>
            <div class="text-two">info@superbotics.com</div>
          </div>
        </div>
        
    </div>
</div>
    <style>
        /* Google Font CDN Link */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
    width: 100%;
  height: 100vh;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  box-sizing: border-box;
}
  .parent-div {
  display: flex;
  background: linear-gradient(to right, #040720, #0a1036, #ffffff);
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container {
  width: 50%;
  padding: 20px;
  justify-content: center;
  align-items: center;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content {
  display: flex;
  align-items: center;
  justify-content: center;
}

.content .left-side::before {
  content: "";
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details {
  margin: 14px;
  text-align: center;
}
.content .left-side .details i {
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic {
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two {
  font-size: 14px;
  color: #afafb6;
}



/* /// */

        </style>
  </body>
</html>
