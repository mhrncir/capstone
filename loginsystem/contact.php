<?php
  
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
         
          <p> SEND E-MAIL</p>
          <form class="contact-form" action="contact.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>


          </form>



        </section>
      </div>
    </main>

<?php
 
  require "footer.php";
?>
