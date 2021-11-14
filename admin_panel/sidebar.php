<aside class="main-sidebar">
        <div class="sidebar" id="sidenav">
          <div class="pb-5 pt-1">
            <a href="javascript:void(0)" class="close_btn" id="close_btn" onclick="closeNav()">&times;</a>
          </div>
          <nav class="navbar text-white  py-0" >
            <div class="container-fluid px-0">
              <a class="navbar-brand  mx-0 py-0" href="index.php?page=dashboard"><i class="fas fa-tachometer-alt" aria-hidden="true"></i><span>Dashboard</span></a>
            </div>
          </nav>  
          <nav class="navbar text-white py-0">
            <div class="container-fluid py-0 px-0">
              <a id="project"class="navbar-brand py-0 mx-0 " href="index.php?page=projects" ><i class="fas fa-briefcase"></i><span>Projects</span></a>
            </div>
          </nav>   
          <nav class="navbar text-white  py-0" >
            <div class="container-fluid px-0">
              <a class="navbar-brand  mx-0 py-0" href="index.php?page=tasks"><i class="fas fa-file-signature" aria-hidden="true"></i><span>Tasks</span></a>
            </div>
          </nav>   
          <nav class="navbar text-white" >
            <div class="container-fluid px-0">
              <a class="navbar-brand  mx-0 py-0" href="index.php?page=reports"><i class="fas fa-tasks"></i><span>Reports</span></a>
            </div>
          </nav>
          <nav class="navbar text-white" >
            <div class="container-fluid px-0">
            <hr>
              <a class="navbar-brand  mx-0 py-0" href="index.php?page=employee_list"><i class="fas fa-users"></i><span>Employees</span></a>
            </div>
          </nav>                            
        </div>
        <script type="text/javascript">
          function openNav() {
            document.getElementById("sidenav").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
            document.getElementById("navbar").style.marginLeft = "250px";
            document.getElementById("close_btn").style.marginLeft = "185px";
          }

          function closeNav() {
            document.getElementById("sidenav").style.width = "65";
            document.getElementById("content").style.marginLeft= "65";
            document.getElementById("navbar").style.marginLeft= "65";
            document.getElementById("close_btn").style.marginLeft="0";

          }
        </script>
</aside>