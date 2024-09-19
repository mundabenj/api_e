<?php
    class menus{
        public function main_menu(){
?>
        <main>
            <div class="container py-4">
              <header class="pb-3 mb-4 border-bottom">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="./">ICS</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About US</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Our Project</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                          </li>
                        </ul>
                        <span class="navbar-text">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                        </span>
                      </div>
                    </div>
                  </nav>
              </header>
<?php
    }
        public function main_right_side_menu(){
?>
            <div class="topnav-right">
                <a href="signup.php">Sign Up</a>
                <a href="">Sign In</a>
            </div>
<?php
    }
}