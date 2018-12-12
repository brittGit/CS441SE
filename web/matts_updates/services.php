<!DOCTYPE html>


<?php
    session_start();
    if(isset($_SESSION['loggedIn'])) {
      session_unset();
      session_destroy();
      header("Location: index.php");
      die();
    }
?>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>


//import * as $ from 'https://code.jquery.com/jquery-3.3.1.min.js';


function submitClicked() {
    submit();
}


async function submit() {
    let name = document.getElementById("name_field").value;
    let password = document.getElementById("pass_field").value;
    let email = document.getElementById("email_field").value;
    let zip_code = document.getElementById("zip_field").value;
    let affiliation = document.getElementById("affiliation_field").value;

    if(name === "" || password === "" || email === "" || zip_code === "") {
        return;
    }
    $.post("login.php", {"name": name, "password": password, "email": email, "zip_code": zip_code, "affiliation": affiliation}).done(data => {
        let result = JSON.parse(data);
        if(result.redirect === true) {
            window.location.href="index.php";
        }
    });
}

</script>



<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width = device-width">
    <meta name="description" content = "Affordable and professional web design">
    <meta name = "keyword" content = "web design, affordable web design, professional advice">
    <meta name = "Author" content = "Matt K">
    <title>BuyMyVote | Services</title>
    <link rel="stylesheet" href = "./css/style.css">
  </head>
  <body>

    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Buy </span>My <span class="highlight1">Vote </span></h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>


            <?php
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li><a href=\"find_my_rep.php\">Find My Representative</a></li>";
              }
              if(!isset($_SESSION['loggedIn'])) {
                echo "<li class=\"current\"><a href=\"services.php\">Create Your Account</a></li>";
              }
              ?>


          </ul>
        </nav>
      </div>
    </header>
    
    <section id="newsletter">
      <div class = "container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
          <input type="email" placeholder="Enter Email Address...">
          <button type="submit" class="button_1">Subscribe
          </button>
        </form> 
      </div>
    </section>
      <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class = "page-title">Services</h1>
            <ul id="services">
                <li>
                    <h3>Website Design</h3>
                    <p>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit 
                    </p>
                    <p>Pricing: $1,000 - $3,000</p>
                </li>
                <li>
                    <h3>Website Maintenance</h3>
                    <p>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit 
                    </p>
                    <p>Pricing: $250 per month</p>
                </li>
                <li>
                    <h3>Website Hosting</h3>
                    <p>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit 
                    </p>
                    <p>Pricing: $25 per month</p>
                </li>
             </ul>
            </article>
            <aside id="sidebar">
                <div class="dark">
                <h3>Get a Quote</h3>
                <form class="quote">
                    <div>
                        <label>Name</label><br>
                        <input type="text" id="name_field">
                    </div>
                    <div>
                        <label>Password</label><br>
                        <input type="password" id="pass_field">
                    </div>
                    <div>
                        <label>Email</label><br>
                        <input type="email" id="email_field">
                    </div>
                    <div>
                        <label>ZIP Code</label><br>
                        <input type="text" id="zip_field">
                    </div>
                    <div>
                        <label>Political Affiliation (Optional)</label><br>
                        <input type="text" id="affiliation_field">
                    </div>
                    <div>
                        <label>Message</label><br>
                        <textarea placeholder="Message"></textarea>
                    </div>
                    </form>
                    <button class="button_1" onClick="submitClicked();">Send</button>
                </div>
            </aside>
             </div>
      </section>
      <footer>
        <p>BuyMyVote, Copyright &copy; 2018</p>
      </footer>
  </body>
  </html>
</DOCTYPE>