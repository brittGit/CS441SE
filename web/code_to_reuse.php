<!DOCTYPE html>
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
            <li><a href="about.php">About</a></li>
            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li class=\"current\"><a href=\"find_my_rep.php\">Find My Representative</a></li>";
              }
              if(!isset($_SESSION['loggedIn'])) {
                echo "<li class=\"current\"><a href=\"services.php\">Create Your Account</a></li>";
              }
            ?>
          </ul>
        </nav>
      </div>
    </header>

    <figure class="tint t3">

    <section id="showcase-reps">


        <section id="showcase-other-reps">

      <div class="container">
      <a class = "amount-btn transition" target ="_blank">$25</a>
      <a class = "amount-btn transition" target ="_blank">$50</a>
      <a class = "amount-btn transition" target ="_blank">$100</a>
      <a class = "amount-btn transition" target ="_blank">$2,147,483,647</a>
      <a class = "amount-btn transition" target ="_blank">Money</a>
        <!--<h1>Affordable, Professional Web Design</h1>-->
        <h1>Make a Difference You Can Measure</h1>
        <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
      </div>
      </section>

            </figure>
    </section>
    <section id="boxes">
        <div class="container">
          <div class="box_reps">
          <div class="slide_in_cont">
            <img src="/img/rep_scott_peters.jpg" alt="Avatar" class="slide_in_image">
                <div class="slide_in_overlay">
                <a href="index.php">
                    <div class="slide_in_text">Browse Legislation</div>
                </a>
                </div>
            </div>
            <h3>Change the World</h3>
              <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
            
            </div>
          <div class="box">
            
            <h3></h3>
              <p></p>
          </div>
          <div class="box_reps">
            <div class="slide_in_cont">
            
                <img src="/img/sen_dianne_feinstein.jpg" alt="Avatar" class="slide_in_image">
                <div class="slide_in_overlay">
                <a href="index.php">
                  <div class="slide_in_text">Browse Legislation</div>
                </a>
                </div>
            </div>
          <!--  <h3>Change the World</h3>
              <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
           -->
            </div>
          
        </div>
      </section>

</body>
</DOCTYPE>