<html>
<link rel="stylesheet" href = "./css/style.css">
<header>
      <div class="container">
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
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/861" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 861</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "House - 04/25/2017 Referred to the Subcommittee on Environment."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill terminates the Environmental Protection Agency on December 31, 2018."</font></div>
          
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/38" style="text-decoration: none" target="_blank">
           <!--<div cass="legislation_text_centered"><font size="+2" face="bookman">H.R. 38</font></div> </a>-->
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 38</font></div></a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "12/07/2017 Received in the Senate and Read twice and referred to the Committee on the Judiciary."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill amends the federal criminal code to allow a qualified individual to carry a concealed handgun into or possess a concealed handgun in another state that allows individuals to carry concealed firearms."</font></div>
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/354" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 354</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "01/25/2017 Referred to the Subcommittee on Health."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill prohibits, for a one-year period, the availability of federal funds for any purpose to Planned Parenthood Federation of America, Inc., or any of its affiliates or clinics, unless they certify that the affiliates and clinics will not perform, and will not provide any funds to any other entity that performs, an abortion during such period."</font></div>
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
                <a href="donate_hr_861.php">
                  <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/610" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 610</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "01/23/2017 Referred to the House Committee on Education and the Workforce."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill repeals the Elementary and Secondary Education Act of 1965 and limits the authority of the Department of Education (ED) such that ED is authorized only to award block grants to qualified states."</font></div>
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://s3.amazonaws.com/static.politifact.com/politifact/photos/GYI_97838620_BARACK_OBAMA.JPG" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 175</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "02/10/2017 Referred to the Subcommittee on Indian, Insular and Alaska Native Affairs."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill repeals the Patient Protection and Affordable Care Act and the Health Care and Education Reconciliation Act of 2010, effective as of their enactment. Provisions of law amended by those Acts are restored."</font></div>
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/586" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 586</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "02/06/2017 Referred to the Subcommittee on the Constitution and Civil Justice."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill declares that: (1) the right to life guaranteed by the Constitution is vested in each human and is a person's most fundamental right; (2) each human life begins with fertilization, cloning, or its equivalent, at which time every human has all the legal and constitutional attributes and privileges of personhood; and (3) Congress, each state, the District of Columbia, and each U.S. territory have the authority to protect all human lives."</font></div>
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
           <a href= "https://www.congress.gov/bill/115th-congress/house-bill/899" style="text-decoration: none" target="_blank">
           <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 899</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "02/07/2017 Referred to the House Committee on Education and the Workforce."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill terminates the Department of Education on December 31, 2018."</font></div>
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
                <a href="donate_hr_861.php">
                <div class="slide_in_text"><font size="+2" face="bookman"><strong><font color="#E91d0E">Do</font><font color="white">na</font><font color="#7ec0ee">te</font></strong></font></div>
                </a>
              </div>
           </div>
            <a href= "https://www.congress.gov/bill/115th-congress/house-bill/7" style="text-decoration: none" target="_blank">
            <div><button type="submit" class="amount-button_1"><font face=bookman>H.R. 7</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Latest:</strong> "01/30/2017 Received in the Senate and Read twice and referred to the Committee on Finance."</font></div> </a>
           <div cass="legislation_text_centered"><font face="bookman"><strong>Summary:</strong> "This bill makes permanent the prohibition on the use of federal funds, including funds in the budget of the District of Columbia, for abortion or health coverage that includes abortion."</font></div>
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