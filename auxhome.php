<?php

/*require "session_management.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/VL/img/favicon/sk.ico">
    <link rel="stylesheet" href="/VL/css/styles1.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/VL/css/navbar.css">
    <link rel="stylesheet" href="/VL/css/auxhome.css?v=<?php echo time(); ?>">
    <title>Audiobook Library</title>
  </head>

  <body>

    <header>
          <?php
          include 'header_client.php';
          ?>

          <!-- Navigation Tabs for E-Books and Audiobooks -->
          <div class="nav-tabs">
              <a href="/VL/home1.php" class="nav-tab">E-Books</a>
              <a href="/VL/auxhome.php" class="nav-tab active">Audiobooks</a>
          </div>
      </header>

      <!-- E-Book Promotion Section -->
      <div class="ebook-promo">
          <h3>Discover Our E-Book Collection</h3>
          <p>Browse our extensive collection of e-books available for instant download. Perfect for reading on any device.</p>
          <a href="/VL/home1.php" class="explore-btn">Explore E-Books</a>
      </div>

      <!-- Audiobook Categories Section -->
      <div class="container">
          <h2>Browse Audiobook Categories</h2>
          <div class="genres">
              <div class="genre">
                  <a href="fiction.php">
                      <img src="/VL/img/Audio_Covers/fiction.jpg" alt="Fiction" class="genre-img">
                      <h3>Fiction</h3>
                  </a>
              </div>
              <div class="genre">
                  <a href="coming_soon.php">
                      <img src="/VL/img/Audio_Covers/nonfiction.jpg" alt="Non-Fiction" class="genre-img">
                      <h3>Non-Fiction</h3>
                  </a>
              </div>
              <div class="genre">
                  <a href="coming_soon.php">
                      <img src="/VL/img/Audio_Covers/mystery.jpg" alt="Mystery" class="genre-img">
                      <h3>Mystery</h3>
                  </a>
              </div>
              <div class="genre">
                  <a href="coming_soon.php">
                      <img src="/VL/img/Audio_Covers/fantasy.jpg" alt="Fantasy" class="genre-img">
                      <h3>Fantasy</h3>
                  </a>
              </div>
              <div class="genre">
                  <a href="coming_soon.php">
                      <img src="/VL/img/Audio_Covers/biography.jpg" alt="Biography" class="genre-img">
                      <h3>Biography</h3>
                  </a>
              </div>
          </div>
      </div>

      <!-- Featured Audiobooks Section -->
      <div class="featured-section" id="fb">
          <h2>Featured Audiobooks</h2>
          <div class="book-list" id="featured-books">
              
              <div class="book-item">
                  <div class="book-coverpage">
                      <a href="audiobook_info.php?id=1"><img src="/VL/img/Audio_Covers/fiction_book1.jpg" alt="Sample Audiobook 1"></a>
                  </div>
                  <div class="book-title">
                      <a class="title-anchor" href="gatsby.html">The Great Gatsby</a>
                  </div>
              </div>
              <!--<div class="book-item">
                  <div class="book-coverpage">
                      <a href="audiobook_info.php?id=2"><img src="/VL/img/Audio_Covers/sample2.jpg" alt="Sample Audiobook 2"></a>
                  </div>
                  <div class="book-title">
                      <a class="title-anchor" href="audiobook_info.php?id=2">Mystery of the Night</a>
                  </div>
              </div>-->
            
          </div>
          <button class="show-more-btn" onclick="loadMoreAudiobooks('featured')">Show More</button>
      </div>

      <!-- Footer -->
      <footer>
          <?php include 'footer.php'; ?>
      </footer>

      <script>
          function loadMoreAudiobooks(section) {
              // Placeholder for loading more audiobooks functionality
              alert('This feature would load more audiobooks in the ' + section + ' section.');
          }
      </script>
  </body>
</html>
