<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Student DashBoard" ;
    $description = "Access your personalized student dashboard for our piano school. Stay organized with upcoming classes, track your progress, access course materials, and communicate with instructors. Experience seamless navigation and support for your piano learning journey." ;
    $author = "Khang Tan" ;
    $mainheading = "Welcome to Melodic Haven" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="student-dashboard">
  <h2>Student Dashboard</h2>
  <section class="card">
    <section class="container">
      <p class="title">
        <h3>My Courses</h3>
      </p>
      <p>
        <a href="course.php">Beginner's Piano Basics</a>
      </p>
      <p>
        <a href="course.php">Jazz Piano Improvisation</a>
      </p>
      <p>
        <a href="course.php">Pop Piano Hits</a>
      </p>
    </section>
  </section>
  <section class="student-table">
    <section class="table-container">
      <h3>Student Scores</h3>
      <table>
        <caption>Student Scores in Different Aspects of Piano Class</caption>
        <thead>
          <tr>
            <th scope="col">Aspect</th>
            <th scope="col">Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">Technique</td>
            <td>85%</td>
          </tr>
          <tr>
            <td scope="row">Theory</td>
            <td>92%</td>
          </tr>
          <tr>
            <td scope="row">Performance</td>
            <td>78%</td>
          </tr>
        </tbody>
      </table>
    </section>
  </section>
  <section class="card">
    <section class="container">
      <p class="title">
        <h3>My Account</h3>
      </p>
      <p>
        <a href="#">Update Account Details</a>
      </p>
    </section>
  </section>
</main>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>