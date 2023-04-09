<link rel="stylesheet" type="text/css" href="header.css">
<div class="page-wrapper">
 <div class="nav-wrapper">
  <div class="grad-bar"></div>
  <nav class="navbar">
    <a href="index.php?action=list"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo"></a>
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav no-search">
      <li class="nav-item"><a href="#">Home</a></li>
      <li class="nav-item"><a href="index.php?page=prof">Professeur</a></li>
      <li class="nav-item"><a href="index.php?page=eleve">Elève</a></li>
      <li class="nav-item"><a href="#">Careers</a></li>
      <li class="nav-item"><a href="#">Contact Us</a></li>
      <i class="fas fa-search" id="search-icon"></i>
      <input class="search-input" type="text" placeholder="Search..">
    </ul>
  </nav>
  </div>
  <header>
    <div class="overlay">
<h1>Bienvenue <?php echo $_SESSION['user']['nom']; ?> </h1>


    <br>
    <!--<button></button>-->
        </div>
</header>
 <script type="text/javascript" src="header.js"></script>