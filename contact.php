<?php include "includes/headings.php" ?>
<?php include "includes/nav.php" ?>
  <body>
  <div class="contact-container">
    <div class="innerwrap">


      <section class="section1 clearfix">
        <div class="textcenter">
          <h2 id="h2-custom">Contact Me</h2>
          <hr id="hr-custom2">

        </div>
      </section>

      <section class="section2 clearfix">
        <div class="col2 column1 first">
          <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDj5NyWwSH9oihmHq6cgXQLAgs928RCVo0
    &q=Space+Needle,Seattle+WA" allowfullscreen>
          </iframe>
        </div>
        <div class="col2 column2 last">
          <div class="sec2innercont">
            <div class="sec2addr">
              <p>2222 FooBar st Seattle</p>
              <p><span class="collig">Phone :</span> 1206-867-5309</p>
              <p><span class="collig">Email :</span> email@email.com</p>
              <p><span class="collig">Fax :</span> Who uses a fax machine?</p>
            </div>
          </div>
          <div class="sec2contactform">
            <h3 class="sec2frmtitle">Email me </h3>
            <form action="contact_form/formhandler.php" method="post">
              <div class="clearfix">
                <input class="col2 first" type="text" placeholder="FirstName">
                <input class="col2 last" type="text" placeholder="LastName">
              </div>
              <div class="clearfix">
                <input class="col2 first" type="Email" placeholder="Email">
                <input class="col2 last" type="text" placeholder="Contact Number">
              </div>
              <div class="clearfix">
                <textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
              </div>
              <div class="clearfix"><input type="submit" value="Send"></div>
            </form>
          </div>

        </div>
      </section>

    </div>
  </div>
  </body>
  <hr id="hr-custom2">
  <footer>
      <?php include "includes/footer.php" ?>
  </footer>
<?php include "includes/validator.php" ?>