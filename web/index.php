<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width = device-width">
    <meta name="description" content = "Affordable and professional web design">
    <meta name = "keyword" content = "web design, affordable web design, professional advice">
    <meta name = "Author" content = "Matt K">
    <title>BuyMyVote | Welcome</title>
    <link rel="stylesheet" href = "./css/style.css">
  </head>
  <body>
    <header>
      <div class="container"> <!-- <a href="index.php"> -->
        <div id="branding">
          <h1><span class="highlight">Buy </span>My <span class="highlight1">Vote </span></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>

            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li><a href=\"find_my_rep.php\">Find Your Representive</a></li>";
              }
             if(!isset($_SESSION['loggedIn'])) {
                echo "<li><a href=\"services.php\">Create An Account</a></li>";
                echo "<li><a id=\"login_button\">Login</a></li>";
             }
            ?>
          </ul>
        </nav>
      </div>
    </header>
    
    <section id="showcase">
      <div class="container">
        <!--<h1>Affordable, Professional Web Design</h1>-->
        <h1>Make a Difference You Can Measure</h1>
        <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
      </div>
    </section>
    
    <section id="newsletter">
      <div class = "container">
        <h1>Find Your Representative</h1>
        <form>
          <input type="email" placeholder="Enter ZIP Code...">
          <button type="submit" class="button_1">Find
          </button>
        </form> 
      </div>
    </section>
      <section id="boxes">
        <div class="container">
          <div class="box">
            <img src="./img/democrat_logo.jpg">
            <h3>Reign in Your Senators</h3>
              <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
          </div>
          <div class="box">
            <img src="./img/republican_logo.jpg">
            <h3>Be Heard</h3>
              <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
          </div>
          <div class="box">
            <img src="./img/independent_logo.jpg">
            <h3>Change the World</h3>
              <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
          </div>
        </div>
      </section>
      <footer>
        <p>BuyMyVote, Copyright &copy; 2018</p>
      </footer>
      <script>
        const init = () => {
          const login = document.getElementById('login_button');
          if (login) {
            login.addEventListener('click', () => {
              fetch('/login.php', {
                credentials: 'same-origin'
              })
                .then(() => {
                  window.location.reload();
                });
            }, false);
          }
        }

        window.addEventListener('load', init);
      </script>
  </body>
  </html>
</DOCTYPE>


