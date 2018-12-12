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
    <script src="/js/DonationStatusBar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container"> <!-- <a href="index.php"> -->
        <div id="branding">
          <h1><font face=bookman><strong><span class="highlight">Buy</span>My<span class="highlight1">Vote</span></strong></font></h1>
        </div>
        <nav>
          <ul>
          <li><a href="index.php"><font face=bookman><strong>Home</strong></font></a></li>
            <li><a href="about.php"><font face=bookman><strong>About</strong></font></a></li>
            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li class=\"current\"><a href=\"find_my_rep.php\"><font face=bookman><strong>Find My Representative</strong></font></a></li>";
              }
              if(!isset($_SESSION['loggedIn'])) {
                echo "<li class=\"current\"><a href=\"services.php\"><font face=bookman><strong>Create Your Account</strong></font></a></li>";
              }
            ?>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase_test_1">
      <div class="container">
        <h1><font face="bookman"><strong>H.R. 861</strong></font></h1>
      </div>
    </section>
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
  <a class = "amount-btn transition" target ="_blank" data-money-value="25"><font face="bookman"><strong>Custom Donation</strong></font></a>
  <!--<a class = "amount-btn transition" target ="_blank" data-money-value="50">$50</a>
  <a class = "amount-btn transition" target ="_blank" data-money-value="100">$100</a>
  <a class = "amount-btn transition" target ="_blank" data-money-value="2147483647">$2,147,483,647</a>
  <a class = "amount-btn transition" target ="_blank" data-money-value="">Other Amount</a>             -->
    <!--<h1>Affordable, Professional Web Design</h1>-->
  </div>


        </figure>

      </div>
      <script>
        const donationStatusBar = new DonationStatusBar(document.querySelector('#my-donation-status-bar'));
        // const maxDonation = 1000;
        // const minDonation = 42;
        // const minTime = 1000;
        // const maxTime = 3000;
        // let numberOfDonations = 42;

        // const randomRange = (min, max) => min + Math.random() * (max - min);

        // const simulateDonation = () => {
        //     const donation = randomRange(minDonation, maxDonation);
        //     const donateTo = Math.random() > 0.5 ? DonationStatusBar.YES : DonationStatusBar.NO;

        //     donationStatusBar.donate(donation, donateTo);
      
        //     numberOfDonations--;
        //     if (numberOfDonations > 0) {
        //         setTimeout(simulateDonation, randomRange(minTime, maxTime));
        //     }

            
        // }

        // simulateDonation();

        const donationHandler = (e) => {
          const input = document.createElement('input');
          const initialValue = e.currentTarget.getAttribute('data-money-value');
          input.value = initialValue;

          swal({
            text: 'Donate!',
            content: input,
            buttons: {
              yes: {
                text: 'Yes',
                value: DonationStatusBar.YES,
              },
              no: {
                text: 'No',
                value: DonationStatusBar.NO,
              }
            }
          }).then(value => {
            if (value != null) {
              const moneyValue = parseInt(input.value, 10);
              console.log('moneyValue: ', moneyValue);
              donationStatusBar.donate(moneyValue, value);
            }
          })
        }

        const elements = Array.from(document.querySelectorAll('[data-money-value]'));
        elements.forEach(el => {
          console.log('EL: ', el);
          el.addEventListener('click', donationHandler)
        })
      </script>
      </body>
  </html>
</DOCTYPE>