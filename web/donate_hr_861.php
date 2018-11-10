<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width = device-width">
    <meta name="description" content = "Affordable and professional web design">
    <meta name = "keyword" content = "web design, affordable web design, professional advice">
    <meta name = "Author" content = "Matt K">
    <title>BuyMyVote | Welcome</title>
    <link rel="stylesheet" href = "/css/style.css">
    <link rel="stylesheet" href="/css/donationStatusBar.css" />
  </head>
  <body>
    <header>
      <div class="container"> <!-- <a href="index.php"> -->
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
    
    <section id="showcase_donation_page">
      <div class="container">
        <!--<h1>Affordable, Professional Web Design</h1>-->
        <div class="donation-status-bar" id="my-donation-status-bar">
          <div class="donation-status-bar__end donation-status-bar__end--yes">
              50%
          </div>
          <div class="donation-status-bar__bar">
              <div class="donation-status-bar__bar-yes"></div>
          </div>
          <div class="donation-status-bar__end donation-status-bar__end--no">
              50%
          </div>
        </div>
      </div>
    </section>

    <section id="newsletter_donations">
      <div class = "container">

        <figure class="tint t3">



  <div class="container_donation">
  <a class = "amount-btn transition" target ="_blank">$25</a>
  <a class = "amount-btn transition" target ="_blank">$50</a>
  <a class = "amount-btn transition" target ="_blank">$100</a>
  <a class = "amount-btn transition" target ="_blank">$2,147,483,647</a>
  <a class = "amount-btn transition" target ="_blank">Money</a>
    <!--<h1>Affordable, Professional Web Design</h1>-->
  </div>


        </figure>

      </div>
      <script>
        const donationStatusBar = new DonationStatusBar(document.querySelector('#my-donation-status-bar'));
        const maxDonation = 1000;
        const minDonation = 42;
        const minTime = 1000;
        const maxTime = 3000;
        let numberOfDonations = 42;

        const randomRange = (min, max) => min + Math.random() * (max - min);

        const simulateDonation = () => {
            const donation = randomRange(minDonation, maxDonation);
            const donateTo = Math.random() > 0.5 ? DonationStatusBar.YES : DonationStatusBar.NO;

            donationStatusBar.donate(donation, donateTo);
      
            numberOfDonations--;
            if (numberOfDonations > 0) {
                setTimeout(simulateDonation, randomRange(minTime, maxTime));
            }

            
        }

        simulateDonation();
      </script>
      </body>
  </html>
</DOCTYPE>