<!-- Début du header -->
<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title>Mon premier thème Wordpress</title> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"> 
</head> 
<body> 
    <header class="header">
  <div class="header-bar">
    <h1 class="site-title"><a href="path/to/frontpage">SITE NAME</a></h1>
    <h2>SITE DESCRIPTION</h2>

    <!-- Début du menu -->
    <nav>
      <ul class="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a>
          <ul>
            <li><a href="">dropdown1</a></li>
            <li><a href="">dropdown2</a></li>
            <li><a href="">dropdown3</a></li>
          </ul>
        </li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
    <!-- Fin du menu -->

    <form method="get" action="#">
      <label>Search for:</label>
      <input type="text" />
      <input type="submit" value="Search" />
    </form>
  </div>
</header>
<!-- Fin du header -->
<!-- Début du contenu -->
<div class="wrapper">
  <main class="content">
    <article class="post">
      <h2 class="entry-title"> 
                <a href="SINGLE_POST_URL"> 
                    POST TITLE 
                </a>
            </h2>
      <div class="entry-content">
        POST CONTENT HERE A short portion of the post content. Etiam posuere adipiscing ante a euismod. Aliquam rutrum tempus ipsum a pulvinar. Cras arcu tellus, aliquam ac rutrum sit amet, consectetur et sapien. [...]
      </div>
      <div class="postmeta">
        <span class="author">par: USERNAME </span>
        <span class="date"> DATE </span>
        <span class="categories"> 
                    <a href="#" title="View all posts in Updates" >
                        CATEGORY NAME
                    </a>
                </span>
      </div>
      <!-- Fin de la class .postmeta -->
    </article>
    <!-- Fin de la class .post -->
  </main>
  <!-- Fin de la class content -->
</div>
<!-- Fin du contenu -->
<!-- Début du footer -->
<footer class="footer contentinfo">
  <small>
    &copy; 2019 by SITE TITLE. 
  </small>
</footer>
</body> 
</html>
<!-- Fin du header -->