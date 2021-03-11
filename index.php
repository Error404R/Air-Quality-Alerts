<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RadixoLabs | Streamr</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="login.css" />
  <script src="https://unpkg.com/streamr-client@4.1.6/dist/streamr-client.web.min.js"></script>
  
  </head>
  <body>
    <header>
      <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
          <i class="fa fa-bars"></i>
        </span>
        <div class="brand">Smart Agro Tech | RedixoLabs</div>
        <ul class="main-nav" id="js-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#login-sec">Login</a></li>
          <li><a href="#login-sec">Register</a></li>
          <li><a href="#contactus">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div class="showcase" id="home">
      <div class="container">
        <div class="secHead">
          <h1>Smart Agro Tech</h1>
          <h2>
            SMART AGRO TECH kit is designed by several agro sensors. It will
            take readings continuously through microcontroller & sends data to
            cloud. For Chemicals/Fertilizers alert, We’ve trained a Machine
            Learning model with various crops database. <br />
            <strong> # Lets connect Farmers with Technology </strong>
          </h2>
        </div>
        <a class="Showcase_button" target="_blank" rel="noopener noreferrer">
          Buy Now
        </a>
      </div>
    </div>

    <div id="login-sec">
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form method="post" action="contact.php" >
            <h1>Create Account</h1>
          
            <input type="text" id="name" name="name" placeholder="Name" required />
             <input type="email" id="email" name="email" placeholder="Email" required />
            <input type="text" id="mnumber" name="mnumber" placeholder="Mobile Number" required />
             <input type="password" name="password" placeholder="Password" required />
             <input type="text" id="kitid" name="kitid" placeholder="Kit Unique ID" required />
            <input type="text" id="cname" name="cname" placeholder="Crop Name" required />
            <input type="text" id="area" name="area" placeholder="Field area" />
            <input type="text" id="address" name="address" placeholder="Address" />
            <input
              type="text"
              name="khasra" id="khasra"
              placeholder="Kishan Khasra Number (Optional)"
            />
            <button  type="submit" value="Submit">Farmer Sign Up</button>
            <!-- <button>Bank Register</button>
            <button>Mandi Register</button> -->
          </form>
        </div>
        <div class="form-container sign-in-container">
              <form name="subscribForm" method="post" action="login.php" >

          
            <h1>Sign in</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"
                ><i class="fab fa-google-plus-g"></i
              ></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" name="email"  placeholder="Email" />
            <input type="password" name="password"  placeholder="Password" />
            <a href="#">Forgot your password?</a>
            
            <button type="submit" value="Submit">Farmer Sign In</button>
            <button>Bank Sign In</button>
            <button>Mandi Sign In</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back!</h1>
              <p>
                To keep connected with us please login with your personal info
              </p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello!</h1>
              <p>Enter your details and start journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <script src="login.js"></script>
    </div>

    <div class="contact" id="contactus">
      <div class="container">
        <h1>Contact Us</h1>
        <div class="wrapper animated zoomIn">
          <!-- class = "animated bounceInLeft" -->
          <div class="company-info">
            <h3>Smart Agro Tech</h3>
          </div>
          <div class="contact">
            <h3>Email Us</h3>
            <form id="contactform" method="post" action="contact.php">
              <p>
                <label>Name</label>
                <input type="text" name="name"  />
              </p>
              <p>
                <label>Location</label>
                <input type="text" name="company" id="company" />
              </p>
              <p>
                <label>Email Address</label>
                <input type="email" name="email"  />
              </p>
              <p>
                <label>Phone Nmber</label>
                <input type="text" name="phoneNumber"  />
              </p>
              <p class="full">
                <label>Message</label>
                <textarea name="message" rows="5"></textarea>
              </p>
              <p class="full">
                <button  >Submit</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer-distributed">
      <div class="footer-left">
        <h3><span>Smart Agro Tech</span></h3>

        <p class="footer-links">
          <a href="#home">Home</a>
          |
          <a href="./login.html">Sign In</a>
          |
          <a href="#contactus">Contact</a>
        </p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p>
            <span>IIIT Allahabad, India</span>
          </p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 880 8800 947</p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          SMART AGRO TECH kit is designed by several agro sensors. It will take
          readings continuously through microcontroller & sends data to cloud.
        </p>
      </div>
    </footer>
  </body>

  <script src="main.js"></script>
  
  
</html>
