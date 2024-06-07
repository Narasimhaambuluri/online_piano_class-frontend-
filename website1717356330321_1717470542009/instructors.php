<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Instructors" ;
    $description = "Meet our team of expert piano instructors. Learn about their backgrounds, teaching philosophies, and dedication to providing high-quality piano education. Get to know the passionate educators who will guide you on your musical journey." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="instructors">
  <h2>Our Instructors</h2>
    <section class="card">
        <section class="instructor-card">
            <img src="images/instructor1.jpg" alt="Piano" class="instructor-image">
            <section class="instructor
            -content">
                <h3>John Doe</h3>
                <p>John Doe is a classically trained pianist with over 20 years of experience. He has performed in concert halls around the world and has won numerous awards for his playing. John is passionate about sharing his love of music with others and helping them develop their skills on the piano.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="instructor-card">
            <img src="images/instructor2.jpg" alt="Piano" class="instructor-image">
            <section class="instructor
            -content">
                <h3>Jane Smith</h3>
                <p>Jane Smith is a jazz pianist and composer known for her innovative approach to music. She has released several albums and has performed at major jazz festivals around the world. Jane is dedicated to helping students explore their creativity and develop their own unique style on the piano.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="instructor-card">
            <img src="images/instructor3.jpg" alt="Piano" class="instructor-image">
            <section class="instructor
            -content">
                <h3>Michael Johnson</h3>
                <p>Michael Johnson is a pop pianist and songwriter who has worked with some of the biggest names in the music industry. He has written hit songs for artists in a variety of genres and has performed on stages around the world. Michael is passionate about helping students learn to play their favorite songs on the piano.</p>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="instructor-card">
            <img src="images/instructor4.jpg" alt="Piano" class="instructor-image">
            <section class="instructor
            -content">
                <h3>Sarah Brown</h3>
                <p>Sarah Brown is a classical pianist and music educator with a background in music theory and composition. She has taught piano to students of all ages and skill levels and has a passion for helping others discover the joy of music. Sarah is dedicated to providing a supportive and nurturing environment for her students to learn and grow as musicians.</p>
            </section>
        </section>
    </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>