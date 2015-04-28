<section id="contact" class="section contact">
  <!--Overlay-->
  <div class="overlay offset">

    <!--Inner content-->
    <div class="innerContent">

      <!--Container-->
      <div class="container clearfix">

        <div class="sixteen columns contact">
          <h1 class="title ">Get In Touch</h1>

          <div class="form">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/actions/form.php">

              <p>
                <input type="text" name="name" id="name" placeholder="Name" />
              </p>

              <p>
                <input type="text" name="email" id="email" placeholder="Email" />
              </p>

              <p>
                <input type="text" name="subject" id="subject" placeholder="Subject" />
              </p>

              <p>
                <textarea name="message" id="message" cols="45" rows="10" placeholder="Your Message"></textarea>
              </p>
                <button id="submit">Send</button>
              </form>

            <div id="success">
              <h2>Your message has been sent. Thank you!</h2>
            </div>

            <div id="error">
              <h2>Sorry your message can not be sent.</h2>
            </div>

          </div>

        </div>

      </div>
      <!--Container-->

    </div>
    <!--Inner content-->

  </div>
  <!--Overlay-->



</section>
