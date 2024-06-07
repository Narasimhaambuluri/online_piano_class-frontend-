<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Blog" ;
    $description = "Stay updated with the latest news, tips, and insights from our piano school. Explore our blog for articles on piano learning techniques, student success stories, instructor insights, and more. Join our community of music enthusiasts and enhance your piano journey." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="blog">
  <h2>Blogs</h2>
    <section class="card">
        <section class="blog-card">
            <img src="images/blog1.jpg" alt="Piano" class="blog-image">
            <section class="blog-content">
                <h3>THE BENEFITS OF LEARNING PIANO</h3>
                <p>Learning to play the piano offers a wide range of benefits, from improved cognitive function to stress relief. Discover the advantages of taking up this beautiful instrument.</p>
                <a href="#" class="button">Read More</a>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="blog-card">
            <img src="images/blog2.webp" alt="Piano" class="blog-image">
            <section class="blog-content">
                <h3>HOW TO CHOOSE THE RIGHT PIANO</h3>
                <p>Choosing the right piano can be a daunting task, especially for beginners. Learn about the different types of pianos and find the perfect instrument for your needs.</p>
                <a href="#" class="button">Read More</a>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="blog-card">
            <img src="images/blog3.jpg" alt="Piano" class="blog-image">
            <section class="blog-content">
                <h3>MASTERING PIANO TECHNIQUE</h3>
                <p>Developing proper piano technique is essential for pianists of all levels. Explore the fundamentals of playing the piano and improve your skills with these expert tips.</p>
                <a href="#" class="button">Read More</a>
            </section>
        </section>
    </section>
    <section class="card">
        <section class="blog-card">
            <img src="images/blog4.jpg" alt="Piano" class="blog-image">
            <section class="blog-content">
                <h3>THE HISTORY OF THE PIANO</h3>
                <p>The piano has a rich history that spans centuries. Discover the origins of this iconic instrument and learn about its evolution over time.</p>
                <a href="#" class="button">Read More</a>
            </section>
        </section>
      </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>