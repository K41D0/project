<?php include 'header.php';?>
<?php include 'topbar.php';?>
<?php include 'sidebar.php';?>
<!DOCTYPE html>
<html>
    <body>
        <title>Home | NEU</title>
        <div class="content" id="content">
        	<section class="container">
                
                <?php 
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                    if(!file_exists($page.".php")){
                        include '404.html';
                    }else{
                    include $page.'.php';

                    }
                  ?>
            </section>
        </div>
    </body>
</html>