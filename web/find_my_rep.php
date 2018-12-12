<!-- Awesome Overlay Code   https://codepen.io/anon/pen/MzWRaz   Awesome Overlay Code -->
<!-- <link rel="stylesheet" href = "./css/test_only.css"> -->
<link rel="stylesheet" href = "./css/style.css">
<header>
      <div class="container">
        <div id="branding">
          <h1><font face=bookman><strong><span class="highlight">Buy</span>My<span class="highlight1">Vote</strong></font></span></h1>
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
<div class="wrap-find-my-reps">

  <div class="row-find-my-reps">
    <div class="column-find-my-reps">
    <a href="find_my_rep_senate.php">
        <figure class="tint-find-my-reps t2-reps">
            <img src="../img/feinstein_banner.jpg" alt="" width="100%" height="1250px" />
          </figure>
          </a>
      <!-- <img src="img_snow.jpg" alt="Snow" style="width:100%"> -->
    </div>
    <div class="column-find-my-reps">
    <a href="find_my_rep_senate.php">
        <figure class="tint-find-my-reps t3-reps">
            <img src="../img/peters_banner.jpg" alt="" width="100%" height="1250px" />
          </figure>
      </a>
    </div>
  <!--  <div class="column">
        <figure class="tint t3">
            <img src="http://cdn.impressivewebs.com/2011-11/greece003.jpg" alt="" width="400" height="260" />
          </figure>
    </div> -->
  </div> 
  
</div><!-- .wrap -->