<html>
<link rel="stylesheet" href = "./css/style.css">
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
    <body>


<div class="row">
  <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://news-media.stanford.edu/wp-content/uploads/2016/11/10165436/environment_GettyImages-501231894.jpg" style="width:100%" alt="Avatar" class="slide_in_image">
            </div>
              <div class="slide_in_overlay">
                <a href="donate_hr_861.php">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/861" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 861</div> </a>
        </div>
      </div>
    </section>
  </div>

    <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="http://dc.medill.northwestern.edu/wp-content/uploads/2017/07/DOJ-STORY-PIC-1080x619.jpg" style="width:100%" alt="Avatar" class="slide_in_image">
            </div>
              <div class="slide_in_overlay_gray">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/38">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/38" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 38</div> </a>
        </div>
      </div>
    </section>
  </div>
  <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTevMhYPNjPGIWggkFFWt2qkCzwB3LxMqxHENMiSu0nxmYrtst4BA" style="width:100%" alt="Avatar" class="slide_in_image">
            </div>
              <div class="slide_in_overlay">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/354">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/354" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 354</div> </a>
        </div>
      </div>
    </section>
  </div>
  <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://i.ytimg.com/vi/035ljsuuavo/maxresdefault.jpg" style="width:100%" alt="Avatar" class="slide_in_image">
            </div>
              <div class="slide_in_overlay_gray">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/610">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/610" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 610</div> </a>
        </div>
      </div>
    </section>
  </div>


<div class="row">
<div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://s3.amazonaws.com/static.politifact.com/politifact/photos/GYI_97838620_BARACK_OBAMA.JPG" style="width:100%" alt="Avatar" class="slide_in_image">

            </div>
              <div class="slide_in_overlay">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/175">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://s3.amazonaws.com/static.politifact.com/politifact/photos/GYI_97838620_BARACK_OBAMA.JPG" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 175</div> </a>
        </div>
      </div>
    </section>
  </div>

    <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://foreignpolicymag.files.wordpress.com/2016/02/syrian_small.jpg?w=1595" style="width:100%" alt="Avatar" class="slide_in_image">
            </div>
              <div class="slide_in_overlay_gray">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/586">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/586" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 586</div> </a>
        </div>
      </div>
    </section>
  </div>
  <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://www.friendshipcircle.org/blog/wp-content/uploads/2015/04/How-Parents-Can-Keep-Their-Child-With-Special-Needs-Focused-in-the-Classroom.jpg" style="width:100%" alt="Avatar" class="slide_in_image">

            </div>
              <div class="slide_in_overlay">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/899">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/899" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 899</div> </a>
        </div>
      </div>
    </section>
  </div>
  <div class="column">
    <div class="box_reps">
      <section id="boxes">
        <div class="container">
          <div class="slide_in_cont">
          <div class="legislation_text_container">
            <img src="https://cdn-images-1.medium.com/max/1600/0*qs5AVLNHJ97Zooqx." style="width:100%" alt="Avatar" class="slide_in_image">

            </div>
              <div class="slide_in_overlay_gray">
                <a href="https://www.congress.gov/bill/115th-congress/house-bill/7">
                  <div class="slide_in_text">Donate</div>
                </a>
              </div>
           </div>
            <a href= "https://www.congress.gov/bill/115th-congress/house-bill/7" style="text-decoration: none">
           <div cass="legislation_text_centered">H.R. 7</div> </a>
        </div>
      </div>
    </section>
  </div>
</div> 


<!------------------------------------------------------------

        <figure class="tint t3">



  <div class="container">
  <a class = "amount-btn transition" target ="_blank">$25</a>
  <a class = "amount-btn transition" target ="_blank">$50</a>
  <a class = "amount-btn transition" target ="_blank">$100</a>
  <a class = "amount-btn transition" target ="_blank">$2,147,483,647</a>
  <a class = "amount-btn transition" target ="_blank">Money</a>
    <h1>Make a Difference You Can Measure</h1>
    <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
  </div>


        </figure>

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
        <h3>Change the World</h3>
          <p>Lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae lorem ipsum dolor sit amet, consectet domonae</p>
       
        </div>
      
    </div>
  </section>
--------------------------------------------------------------------------->
</body>
</html>