<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "FAQ" ;
    $description = "Find answers to common questions about our piano school. Learn about our courses, enrollment process, fees, schedules, and more. Visit our FAQ page for quick and helpful information." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="faq">
  <h2>Frequently asked questions</h2>
    <!-- Frequently asked question about piano class -->
    <section class="card">
        <section class="faq-card">
            <section class="faq-content">
                <h3>What are the benefits of learning piano?</h3>
                <p>Learning to play the piano offers a wide range of benefits, from improved cognitive function to stress relief. Discover the advantages of taking up this beautiful instrument.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="faq-card">
            <section class="faq-content">
                <h3>How to choose the right piano?</h3>
                <p>Choosing the right piano can be a daunting task, especially for beginners. Learn about the different types of pianos and find the perfect instrument for your needs.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="faq-card">
            <section class="faq-content">
                <h3>Mastering piano technique</h3>
                <p>Developing proper piano technique is essential for pianists of all levels. Explore the fundamentals of playing the piano and improve your skills with these expert tips.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="faq-card">
            <section class="faq-content">
                <h3>The history of the piano</h3>
                <p>The piano has a rich history that spans centuries. Discover the origins of this iconic instrument and learn about its evolution over time.</p>
            </section>
        </section>
      </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>