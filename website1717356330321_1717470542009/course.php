<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Courses" ;
    $description = "Explore our piano courses designed for all skill levels, from beginners to advanced players. Learn about our comprehensive curriculum, flexible schedules, and expert instructors. Enroll today and start your musical journey with us." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="course">
  <h2>Our courses</h2>
  <a href="course.php" class="card">
            <section class="container">
                <p class="title">
                    <h3>Beginner's Piano Basics</h3>
                </p>
                <p>
                    An introductory course for those new to piano, covering fundamental techniques and simple songs.
                </p>
            </section>
        </a>
        <a href="course.php" class="card">
            <section class="container">
                <p class="title">
                    <h3>Jazz Piano Improvisation</h3>
                </p>
                <p>
                    Learn the art of jazz improvisation with this course, perfect for pianists looking to explore creative freedom.
                </p>
            </section>
        </a>
        <a href="course.php" class="card">
            <section class="container">
                <p class="title">
                    <h3>Pop Piano Hits</h3>
                </p>
                <p>
                    Play your favorite pop songs with ease in this course designed for intermediate pianists.
                </p>
            </section>
        </a>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>