<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    <img class="brand-img" src="assets/images/identity/logo.png" alt="Kementerian Sosial">
    <button class="navbar-toggler" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <?php
    function set_active_menu($parameter = '')
    {
      $class_active   = '';
      $class_name   = 'active';
      if (!empty($_GET['pages'])) {
        if (is_array($parameter)) {
          if (in_array($_GET['pages'], $parameter)) {
            $class_active = $class_name;
          }
        } else {
          if ($_GET['pages'] == $parameter) {
            $class_active = $class_name;
          }
        }
      }
      return $class_active;
    }
    ?>

    <div class="navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo set_active_menu('home'); ?>">
          <a class="nav-link" href="home">Beranda</a>
        </li>
        <li class="nav-item <?php echo set_active_menu('surveys'); ?>">
          <a class="nav-link" href="home">SURVEY</a>
        </li>
        <li class="nav-item <?php echo set_active_menu('drafts'); ?>">
          <a class="nav-link" href="home">DRAFT</a>
        </li>
      </ul>
      <button class="btn btn-navbar-search my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      <form class="form-inline navbar-search my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search">
        <button class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>