<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Melodic Haven" ;
    $description = "Read testimonials from our satisfied students and discover their experiences with our piano school. Gain insight into the quality of our instruction, the expertise of our instructors, and the impact of our programs. Join our community and start your journey to musical excellence today." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="testimonials">
  <h2>Testimonials</h2>
  <section class="card">
            <img src="./images/john.jpg" alt="Madalyn" style="width: 10%" />
            <section class="container">
                <p class="title">
                    <h3>John Doe</h3>
                    <span>| ⭐⭐⭐⭐⭐</span>
                </p>
                <p>
                I've been taking piano lessons here for three months, and I love it! The instructor is very knowledgeable and patient. I've made significant progress and look forward to each class.
                </p>
            </section>
        </section>
        <section class="card">
            <img src="./images/jack.jpg" alt="Madalyn" style="width: 10%" />
            <section class="container">
                <p class="title">
                    <h3>Jack Ritch</h3>
                    <span>| ⭐⭐⭐⭐</span>
                </p>
                <p>
                The piano class is fantastic! The teacher tailors the lessons to fit my skill level and learning pace. It's a friendly environment, and I've improved a lot in a short time.
                </p>
            </section>
        </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>