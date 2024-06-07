<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Melodic Haven" ;
    $description = "This is a website for who are interesting in learning piano" ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main>
    <section class="about-pianist text-with-background">
        <img src="images/piano.jpg" alt="Piano" class="pianist">
        <section class="about-pianist-content text-with-background-content">
            <section class="quote">
                <section class="pianist-image">
                    <!-- <img src="images/beethoven.jpg" alt="Beethoven" class="beethoven"> -->
                    <picture>
                        <source srcset="images/beethoven2.jpg" media="(max-width: 600px)">
                        <source srcset="images/beethoven3.jpg" media="(max-width: 1000px)">
                        <img src="images/beethoven.jpg" alt="Fallback Image">
                    </picture>
                </section>
                <section>
                    Colour is the keyboard, the eyes are the harmonies, and the soul is the piano with many strings. The artist is the hand that plays, touching one key or another, to cause vibrations in the soul.”- Wassily Kandinsky
                </section>
            </section>
            <section class="about">
                <section class="pianist-info">
                    <h2>About Ludwig van Beethoven</h2>
                    <p>Ludwig van Beethoven was a German composer and pianist. A crucial figure in the transition between the Classical and Romantic eras in classical music, he remains one of the most recognized and influential musicians of this period, and is considered to be one of the greatest composers of all time.</p>
                </section>
            </section>
        </section>
    </section>
    <section class="courses">
        <h2>Our Courses</h2>
        <div class="all-courses">
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
        <a href="course.php" class="enroll">
            <section class="container">
                <p class="title">
                    <h3>Enroll Now</h3>
                </p>
            </section>
        </a>
        </div>
    </section>  
    <section class="customer-review">
        <h2>What our customer says</h2>
        <section class="card">
            <img src="./images/john.jpg" alt="Madalyn" style="width: 50%" />
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
            <img src="./images/jack.jpg" alt="Madalyn" style="width: 50%" />
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
    </section>
    <!--
    <p>Melodic Haven is a dedicated online platform 
        designed for individuals keen on learning 
        the versatile art of playing the piano. 
        Our website offers a comprehensive range 
        of courses, resources, and expert instructors 
        to guide you through your musical journey.</p>
    <h2>ONLINE LESSONS</h2>
    <p>Experience high-quality online piano lessons 
        from the comfort of your home. Our expert 
        instructors will guide you through personalized 
        lesson plans to enhance your skills.</p>
    <h2>INTERACTIVE WORKSHOPS</h2>
    <p>Join our interactive workshops designed to 
        deepen your understanding of music theory 
        and piano techniques. Engage with fellow 
        learners and boost your musical knowledge.</p>
    <h2>ONE-ON-ONE COACHING</h2>
    <p>Get dedicated one-on-one coaching sessions 
        tailored to your learning pace and goals. 
        Receive personalized feedback and guidance 
        to accelerate your piano proficiency.</p> -->
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>