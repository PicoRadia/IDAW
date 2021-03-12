
  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.html">Fast Dev</a>
      </div>
      <div class="navbar-collapse collapse">
      <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
      <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="contact-us.php">About Me</a></li>
      <li class="<?= ($activePage == 'projects') ? 'active':''; ?>"><a href="contact-us.php">FAQ</a></li>
      <li class="<?= ($activePage == 'blog') ? 'active':''; ?>"><a href="contact-us.php">Blog</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
