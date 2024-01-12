<?php
      include("../authentication.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="../index.php">Dolly Steel Furniture</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                  <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->
      </form>
      <!-- Navbar-->
      
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <i class="bi bi-person-fill"></i>
            <?php if(isset($_SESSION['auth_user'])) :?>
            <li class="nav-item dropdown">
                  
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-user"></i>      <?= $_SESSION['auth_user']['user_name']; ?>
                        
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                        <li>     
                              <form action="../admin/allcode.php" method="POST">
                                    <button type="submit" name="logout" class="dropdown-item">Logout</button>
                              </form>
			      </li>
                  </ul> 
            <?php endif; ?>         
            </li>
      </ul>
</nav>