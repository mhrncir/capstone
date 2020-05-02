<?php
  
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">

        <div class="gallery-upload2">



        <h2>
         
          <p> Send Us an E-Mail</p>
          <form class="contact-form" action="contact.php" method="post" style="border: 0" width="800" height="200" frameborder="0" scrolling="no">
            <input type="text" name="name" placeholder="Full name"><br>
            <input type="text" name="mail" placeholder="Your e-mail"><br>
            <input type="text" name="subject" placeholder="subject"><br>
            <p><br>
            <textarea name="message" placeholder="message"></textarea><br>
            <button type="submit" name="submit">SEND MAIL</button>


          </form>

          </div>


</h2>




        </section>
      </div>
    </main>

<?php
 
  require "footer.php";
?>
