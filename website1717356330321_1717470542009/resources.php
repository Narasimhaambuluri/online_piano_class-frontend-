<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Resources" ;
    $description = "Explore a curated selection of piano resources and books recommended by our instructors. Discover essential texts, technique guides, sheet music collections, and more to enhance your piano learning journey. Find the perfect resources to support your practice and mastery of the piano." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="resources">
  <h2>Resources</h2>
  <section class="card">
    <section class="resource-card">
      <section class="resource-content">
        <h3>Top 10 piano books for beginners</h3>
        <p>Discover the best piano books for beginners that will help you learn the basics of playing the piano and develop your skills.</p>
      </section>
    </section>
  </section>
  <section class="card">
    <section class="resource-card">
      <section class="resource-content">
        <h3>Online piano lessons for all levels</h3>
        <p>Explore a variety of online piano lessons that cater to different skill levels, from beginners to advanced pianists.</p>
      </section>
    </section>
  </section>
  <section class="card">
    <section class="resource-card">
      <section class="resource-content">
        <h3>Essential piano accessories</h3>
        <p>Find out about the essential accessories every pianist needs, from metronomes to piano benches, to enhance your playing experience.</p>
      </section>
    </section>
  </section>
  <section class="card">
    <section class="resource-card">
      <section class="resource-content">
        <h3>Top piano apps for practice</h3>
        <p>Discover the best piano apps that can help you practice, learn new songs, and improve your piano skills on the go.</p>
      </section>
    </section>
  </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>