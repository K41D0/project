<?php include'session.php'; ?>
<?php include'../modals/modals.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" id="navbar">
  <div class="container-fluid">
  <button class="btn sidebar_btn">
    <span class="sidebar_btn" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true" id="sidebar_btn"></i></span>
  </button>
    <a class="navbar-brand" href="#">Sample</a>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Account
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#change_pass_modal" href="#change_pass_modal">Change password</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><hr class="divider"></li>
        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>