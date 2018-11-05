<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width = device-width">
    <meta name="description" content = "Affordable and professional web design">
    <meta name = "keyword" content = "web design, affordable web design, professional advice">
    <meta name = "Author" content = "Matt K">
    <title>BuyMyVote | About</title>
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
            <li class="current"><a href="about.php">About</a></li>
            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li><a href=\"find_my_rep.php\">Find My Representative</a></li>";
              }
              if(!isset($_SESSION['loggedIn'])) {
                echo "<li><a href=\"services.php\">Create Your Account</a></li>";
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

<!----This is the Paul Ryan Portrait prototype for all senator pages---
      <section id="main">
        <div class="container">
            <aside id="sidebar">
              <div class="dark">
                <h3>Paul Ryan</h3>
                <section id="boxes">
                  <div class="container">
                    <div class="paul_portrait">
                      <img src="./img/paul_ryan.jpg">
                    </div>
                  </div>
              </div>

        </div>
      </section>
  --This is the Paul Ryan Portrait prototype for all senator pages---->

      <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class = "page-title">About Us</h1>
                <p>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem
                </p>
                <div class="dark">
                <p>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem
                </p>
                </div>
            </article>
            <aside id="sidebar">
                <div class="dark">
                <h3>Why We Do It</h3>
                <a class="twitter-timeline" href="https://twitter.com/realDonaldTrump?ref_src=twsrc%5Etfw">Tweets by realDonaldTrump</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                <p>
                Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit 
                </p>
                </div>
        </div>
      </section>
      <footer>
        <p>BuyMyVote, Copyright &copy; 2018</p>
      </footer>
  </body>
  </html>
</DOCTYPE>
