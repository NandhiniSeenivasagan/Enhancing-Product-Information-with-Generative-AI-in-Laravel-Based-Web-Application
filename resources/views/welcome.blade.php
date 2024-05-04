<!DOCTYPE html>
<html>
<head>
<title>Product Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;

}

.header-text {
  font-family: "Arial", sans-serif; /* Set desired font */
  font-weight: bold; /* Set desired font weight */
  line-height: 1.2; /* Set desired line height */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow effect */
  text-align: center; /* Align text center */
  color: white !important; /* Set font color to white */
  position: relative; /* Ensure proper stacking context */
 /* Set higher z-index */
}
/* Full height image header */
.bgimg-1 {
  position: relative; /* Ensure the container is positioned relative */
  background-position: center;
  background-size: cover;
  min-height: 100%;
}



.banner-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.banner-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.w3-bar .w3-button {
  padding: 16px;
}

.container {
  position: relative;
  z-index: 1;
  /* Your existing styles */
}

#goto {
    position: relative;
   
}
#goto1 {
background: radial-gradient(circle at 108.9% 51.2%, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 15.9%, rgba(255, 255, 255, 1) 15.9%, rgba(255, 255, 255, 1) 24.4%, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 0%), radial-gradient(circle at 108.9% 51.2%, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 15.9%, rgba(255, 255, 255, 1) 15.9%, rgba(255, 255, 255, 1) 24.4%, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 0%);
    background-size: 200% 100%; /* Adjust the size as needed */
    transition: background-position 3s ease-in-out;
    animation: slide-goto 2s ease-in-out infinite alternate;
}

@keyframes slide-goto {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: 100% 0;
    }
}
#beside-goto {
    position: relative;
    overflow: hidden; /* Ensure the arrow shape animation stays within the container */
}
#left-goto {
    position: absolute;
    top: 50%;
    left: 0;
    border-top: 150px solid transparent; /* Adjust the size of the arrow */
    border-bottom: 150px solid transparent; /* Adjust the size of the arrow */
    border-left: 40px solid #ffffff; /* Adjust the color and size of the arrow */
    transform: translateY(-50%) translateX(5%);
    animation: slide-goto 7s ease-in-out alternate infinite, fade-out 7s ease-in-out forwards ;
}

@keyframes slide-goto {
    0% {
        transform: translateY(-50%) translateX(-10%);
    }
    100% {
        transform: translateY(-50%) translateX(95%);
    }
}

@keyframes fade-out {
    0% {
        opacity: 1; /* Start with full opacity */
    }
    100% {
        opacity: 0; /* Fade out to fully transparent */
    }
}

#beside-goto {
    position: absolute;
    top: 50%; /* Adjust as needed */
    right: 0; /* Adjust as needed */
    border-top: 150px solid transparent; /* Adjust the size of the arrow */
    border-bottom: 150px solid transparent; /* Adjust the size of the arrow */
    border-right: 40px solid #ffffff; /* Adjust the color and size of the arrow */
    transform: translateY(-50%) translateX(5%);
    animation: slide-bgoto 7s ease-in-out alternate infinite, fade-out 7s ease-in-out forwards ;
}

@keyframes slide-bgoto {
    0% {
        transform: translateY(-50%) translateX(5%);
    }
    100% {
        transform: translateY(-50%) translateX(-95%); /* Adjust the ending position */
    }
}

.animate-left-goto {
    animation: slide-goto 25s ease-in-out alternate infinite, fade-out 25s ease-in-out forwards infinite;
}

.animate-beside-goto {
    animation: slide-bgoto 25s ease-in-out alternate infinite, fade-out 25s ease-in-out forwards infinite;
}

#welcome-container {
    opacity: 0;
    animation: slide-goto2 7s ease-in-out forwards , shake 0.9s ease-in-out ;
}

@keyframes slide-goto2 {
    0% {
        opacity: 0; /* Start with opacity 0 */
    }
    100% {
        opacity: 1; /* End with full opacity */
    }
}

@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}

.w3-row-padding {
  flex-direction: column-reverse; /* Reversing the order of columns */
}
.w3-col {
  width: 300%;
  max-width: 920px; 
  /* Limiting the maximum width */
}
.w3-right-align {
  text-align: right;
}

.w3-padding-16 {
  padding: 8px; /* Adjust padding to desired size */
}
.contact-info {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 50px;
    padding: 0 20px; /* Add padding to the contact info */
    /* Set background color to white */
}


  .contact-info .w3-quarter {
    flex: 1;
    margin: 0 10px; /* Adjust margin for spacing */
    padding: 20px;
    border: 1px solid #ccc;
    background-color: white;
    border-radius: 5px;
    text-align: center;
    width: 200px; /* Set a fixed width for each quarter */
    height: 320px; 
  }

  .contact-info .w3-quarter p {
    margin: 0;
  }

  .contact-info .icon {
    color: #007bff;
  }
  .white-text {
    color: white; /* Set text color to white */
}

</style>
</head>
<body style="background-image: url('{{ asset('uploads/images/homepage.png') }}'); background-position: center; background-size: cover; background-attachment: fixed;">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>  HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#product-information" class="w3-bar-item w3-button"><i class="fa fa-info"></i>  ABOUT</a>
      
      <a href="#goto" class="w3-bar-item w3-button"   ><i class="fa fa-play"></i> GET STARTED</a>

     
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#product-information" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">GET STARTED</a>
  
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">


    <div class="w3-display-left w3-text-white" style="padding: 58px;">
        <div style="text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 50px; border-radius: 30px;">
            <span class="w3-jumbo w3-hide-small header-text" style="color: white;">Enhancing Product Information with Generative AI <br>in Laravel Based Web Application</span>
            <span class="w3-large"></span><br><br>
            <hr style="width: 100%; border-color: #ffffff;"> <!-- Line separator -->
            <br>
            <span class="w3-large">Empower Your Products with AI-Enhanced Information Precision in Laravel.</span>
            <p><a href="#product-information" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"><i class="fa fa-book"></i> LERN MORE</a></p>
        </div>
    </div>
</header>



<!-- Product Information Section -->
<div class="w3-container" style="background-color: white; padding: 175px 75px;" id="product-information">
    <h3 class="w3-center">PRODUCT INFORMATION ENHANCEMENT</h3>
    <p class="w3-center w3-large">Revolutionize your product data</p>
    <div class="w3-row-padding w3-center" style="margin-top: 64px;">
        <div class="w3-quarter">
            <i class="fa fa-lightbulb-o w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">Innovative</p>
            <p>Utilize generative AI to transform product data into insightful narratives and engaging descriptions.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-globe w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Global Reach</p>
            <p>Expand your market presence with accurately localized product information tailored to diverse audiences.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-magic w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Efficiency</p>
            <p>Streamline your workflow with automated content generation, saving time and resources.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cogs w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Integration</p>
            <p>Seamlessly integrate AI-enhanced product information into your Laravel-based web application.</p>
        </div>
    </div>
</div>


  <div id="goto" class="w3-container w3-gradient w3-center" style="padding: 210px 75px; display: flex; justify-content: center; align-items: center;">
  <div id="left-goto" ></div>
<div id="beside-goto" ></div>
    <div  class="w3-row-padding" style="max-width: 100%; display: flex; flex-direction: row-reverse;">
      <div id="welcome-container"class="w3-col" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; color: #fff;">
        <h2 class="header-text">Welcome to our Product Organization page</h2>
        <p>Where you can easily add and edit products using Product AI. This page features a visually stunning design with a dynamic background that creates a unique and engaging user experience. The centerpiece of the page is the "Get Started" button, which invites you to explore the product management capabilities of our platform. The button boasts an eye-catching gradient background and a smooth hover effect, making it stand out on the page. Overall, this product page is designed to showcase the power and simplicity of our product management platform, while also providing a visually engaging and enjoyable user experience.</p>
        <p><a id="get-started-btn" href="#work" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"><i class="fa fa-play"></i> GET STARTED</a></p>
      </div>
    </div>
  </div>


<script>
  
  document.addEventListener("DOMContentLoaded", function() {
    // Function to start the animation when "GET STARTED" button is clicked
    document.querySelector(".w3-button").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        document.getElementById("goto").classList.add("start-animation"); // Add class to start animation
    });
});

  document.getElementById('get-started-btn').addEventListener('click', function() {
    window.location.href = 'http://127.0.0.1:8000/admin';
  });
</script>
<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">

  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Empowering product information with Generative AI requires a diverse skill set.</p>
      <p>Our team excels in:</p>
      <ul class="w3-ul">
        <li>Generative AI </li>
        <li>Laravel Framework Development</li>
        <li>Product Information Management</li>
        <li>User Experience Design</li>
      </ul>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-code w3-margin-right"></i>Generative AI</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-cogs w3-margin-right"></i>Laravel Development</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-database w3-margin-right"></i>Product Information Management</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-paint-brush w3-margin-right"></i>User Experience Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->

<div class="container" style="padding: 150px 75px;">
  
<center><h2 class="white-text">CONTACT INFORMATION</h2></center>
 <div class="contact-info" id="contact">
  
  <div class="w3-quarter">
    <i class="fa fa-building icon w3-jumbo"></i>
    <p><strong>Company Name:</strong><br>Super Botics</p>
    <p><strong>Founded:</strong><br>2012</p>
    <p><strong>Industry:</strong><br>Web Appication and Mobile Application</p>
  </div>
  <div class="w3-quarter">
    <i class="fa fa-map-marker icon w3-jumbo"></i>
    <p><strong>Location:</strong><br>Virudhunagar, Tamil Nadu, India</p>
    <p><strong>Address:</strong><br>123, Main Street<br>Virudhunagar<br>Tamil Nadu<br>India</p>
  </div>
  <div class="w3-quarter">
    <i class="fa fa-phone icon w3-jumbo"></i>
    <p><strong>Contact Number:</strong><br>+98 93 56 47 77</p>
    <p><strong>Fax:</strong><br>+98 93 56 47 78</p>
    <p><strong>Toll-Free:</strong><br>1800-123-4567</p>
  </div>
  <div class="w3-quarter">
    <i class="fa fa-envelope icon w3-jumbo"></i>
    <p><strong>Email:</strong><br>
      <a href="mailto:superbotics@gmail.com">superbotics@gmail.com</a><br>
      <a href="mailto:info@superbotics.com">info@superbotics.com</a>
    </p>
    <p><strong>Website:</strong><br><a href="https://www.superbotics.com">www.superbotics.com</a></p>
  </div>
</div>
</div>
<footer class="w3-right-align w3-black w3-padding-12" style="background-color: rgba(32, 32, 32, 0.0) !important;">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>TOP</a>
</footer>




 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
