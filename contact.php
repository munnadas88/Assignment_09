<?php
include('contact-header.php');
?>
    <main>
      <section>
        <h2>Get in Touch</h2>
        <form action="#" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit">Send</button>
        </form>
      </section>
      <section>
        <h2>Contact Information</h2>
        <p>123 Main Street</p>
        <p>City, State ZIP</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: <a href="mailto:info@mywebsite.com">info@mywebsite.com</a></p>
      </section>
    </main>
    <?php
include('contact-footer.php');
?>
   