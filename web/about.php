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
          <h1><font face=bookman><strong><span class="highlight">Buy</span>My<span class="highlight1">Vote</strong></font></span></h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php"><font face=bookman><strong>Home</strong></font></a></li>
            <li class="current"><a href="about.php"><font face=bookman><strong>About</strong></font></a></li>
            <?php
              session_start();
              if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo "<li><a href=\"find_my_rep.php\"><font face=bookman><strong>Find My Representative</strong></font></a></li>";
              }
              if(!isset($_SESSION['loggedIn'])) {
                echo "<li><a href=\"services.php\"><font face=bookman><strong>Create Your Account</strong</font></a></li>";
              }
            ?>
          </ul>
        </nav>
      </div>
    </header>
    
    <section id="newsletter">
      <div class = "container">
        <h1><font face=bookman>Subscribe To Our Newsletter</font></h1>
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
        <div class="dark">
          <!-- start sw-rss-feed code -->
<script type="text/javascript">
rssfeed_url = new Array();
rssfeed_url[0]="https://www.politico.com/rss/congress.xml"; 
rssfeed_frame_width="1000";
rssfeed_frame_height="1000";
rssfeed_scroll="on";
rssfeed_scroll_step="6";
rssfeed_scroll_bar="off";
rssfeed_target="_blank";
rssfeed_font_size="12";
rssfeed_font_face="";
rssfeed_border="on";
rssfeed_css_url="https://feed.surfing-waves.com/css/style2a.css";
rssfeed_title="on";
rssfeed_title_name="";
rssfeed_title_bgcolor="#e8491d"/*"#3366ff"*/;
rssfeed_title_color="#e8491d"; /*#fff*/
rssfeed_title_bgimage="";
rssfeed_footer="off";
rssfeed_footer_name="rss feed";
rssfeed_footer_bgcolor="#e8491d"; /*#fff*/
rssfeed_footer_color="#333";
rssfeed_footer_bgimage="";
rssfeed_item_title_length="50";
rssfeed_item_title_color="#e8491d"; /*#666*/
rssfeed_item_bgcolor="#fff";
rssfeed_item_bgimage="";
rssfeed_item_border_bottom="on";
rssfeed_item_source_icon="off";
rssfeed_item_date="off";
rssfeed_item_description="on";
rssfeed_item_description_length="120";
rssfeed_item_description_color="#666";
rssfeed_item_description_link_color="#333";
rssfeed_item_description_tag="off";
rssfeed_no_items="0";
rssfeed_cache = "05a4a0db47e7da17442be83a78e4bfd6";
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
<div style="text-align:right; width:1000px;">powered by <a href="http://www.surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;font-size:10px">Surfing Waves</a></div>
<!-- end sw-rss-feed code -->
</div>
</article>
<!-- end sw-rss-feed code -->
           <!-- <article id="main-col">
                <h1 class = "page-title"><font face=bookman>About Us</font></h1>
                <p><font face=bookman>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem
                </font></p>
                <div class="dark">
                <p><font face=bookman>
                    Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem
                </font></p>
                </div>
            </article> -->
            <aside id="sidebar">
                <div class="dark">
                <h3><font face=bookman>Why We Do It</font></h3>
                <a class="twitter-timeline" href="https://twitter.com/realDonaldTrump?ref_src=twsrc%5Etfw">Tweets by realDonaldTrump</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                <p><font face=bookman>
                Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit 
                </font></p>
                </div>
        </div>
      </section>
      <footer>
        <p><font face=bookman>BuyMyVote, Copyright &copy; 2018</font></p>
      </footer>
  </body>
  </html>
</DOCTYPE>
