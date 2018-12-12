<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width = device-width">
    <meta name="description" content = "Affordable design">
    <meta name = "keyword" content = "Web Design">
    <meta name = "Author" content = "BuyMyVote LLC">
    <title>BuyMyVote | Welcome</title>
    <link rel="stylesheet" href = "./css/style.css">
  </head>
  <body>
    <header>
      <div class="container"> <!-- <a href="index.php"> -->
        <div id="branding">
          <h1><font face=bookman><strong><span class="highlight">Buy</span>My<span class="highlight1">Vote</span></strong></font></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><font face=bookman><strong><a href="index.php">Home</strong></font></a></li>
            <li><a href="about.php"><font face=bookman><strong>About</strong></font></a></li>

            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li><a href=\"find_my_rep.php\"><font face=bookman><strong>Find Your Representive</strong></font></a></li>";
              }
             if(!isset($_SESSION['loggedIn'])) {
                echo "<li><a href=\"services.php\">Create An Account</a></li>";
                echo "<li><a href=\"#\" id=\"login_button\"><font face=bookman><strong>Login</strong></font></a></li>";
             }
            ?>
          </ul>
        </nav>
      </div>
    </header>
    
    <section id="showcase">
      <div class="container">
        <h1><font face=bookman><strong>Make a Difference You Can Measure</strong></font></h1>
        <p><font face=bookman><strong>Pay your taxes? Know all the words to the national anthem? Tired of the back-alley politics controling the way your country is run? Here's your chance. Take back the reigns from private interests. Don't let dark money steal the food from your baby's mouth. Take back what's yours.</strong></font></p>
      </div>
    </section>
    
    <section id="newsletter">
      <div class = "container">
        <h1><font face=bookman><strong>Find Your Representative</strong></font></h1>
        <form>
        <input type="zipcode" pattern="[0-9]{4}" placeholder="Enter ZIP Code...">
          <a href="find_my_rep.php"><button type="submit" class="amount-button_1"><font face=bookman><strong>Find</strong></font>
          </button></a>
        </form> 
      </div>
    </section>
      <section id="boxes">
        <div class="container">
          <div class="box">
            <img src="./img/democrat_logo.jpg" class="center">
            <h3><font face=bookman><strong>Reign in Your Senators</strong></font></h3>
              <p><font face=bookman>Democrat or Republican, it must be said we care about country first. Without our country, where else would we pour all of our ineffectual comments online? What would we complain about changing with a twinge of heartfeltness in there? Our significant other? That's obviously a losing battle, and you know it. We ALL know it.</font></p>
          </div>
          <div class="box">
            <img src="./img/republican_logo.jpg" class="center">
            <h3><font face=bookman><strong>Be Heard</strong></font></h3>
              <p><font face=bookman>Republican or Democrat, sides of the aisle don't matter anymore. What we're doing here is bigger than any aisle you'll find, even the lumber aisle at Home Depot. Our aim is simple: take back what's ours. Not with thoughts and prayers, not with actual grassroots efforts, but by giving politicains our money with next to no oversight</font></p>
          </div>
          <div class="box">
            <img src="./img/independent_logo.jpg" class="center">
            <h3><font face=bookman><strong>Change the World</strong></font></h3>
            <p><font face=bookman>Your donations will pave the way for a drastic change in the political system. No more grassroots campaigns for singular, ineffective candidates alone. Now we can pool our resources as citizens of this country in order to change legislation directly. No longer will we be passengers in our own vehicles!</font></p>
          </div>
        </div>
      </section>
      <footer>
        <p><font face=bookman><strong>BuyMyVote, Copyright &copy; 2018</strong></font></p>
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


