<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Contact Us" ;
    $description = "Get in touch with our piano school. Contact us for inquiries about classes, enrollment, or any other questions. We're here to help you with all your piano learning needs. Reach out via phone, email, or visit us at our location." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="contactus">
  <h2>Contact Us</h2>
  <!-- A contact us form along with basic details -->
  <section class="contact-form">
    <form action="contactus.php" method="post">
      <div class="field">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      </div>
      <div class="field">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      </div>
      <div class="field">
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </section>
  <section class="contact-details">
    <section class="contact-info">
      <h3>Address</h3>
      <p>1234 Melodic Haven, Piano Street, Music City</p>
    </section>
    <section class="contact-info">
      <h3>Phone</h3>
      <p>123-456-7890</p>
    </section>
    <section class="contact-info">
      <h3>Email</h3>
      <p>
        <a href="mailto:abc.xyz@ab.com">
      </p>
    </section>
  </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>