<?php include 'includes/admin_header.php'; ?>
<?php include 'functions.php'; ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="col-lg-12">

                <h1 class="page-header">
                    Welcome to Admin!
                    <small>Author</small>
                </h1>

                <!-- Page Heading --> 
                <div class="row">
                   

                      <?php
                      if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                      } else{
                        $source = "";
                      }


                      switch ($source) {
                        case 'add_post':
                            include 'includes/add_post.php';
                            break;
                        
                        default:
                            include 'includes/view_all_post.php';
                            break;
                      }


                      ?>
                      
                      
                </div>  
                    
            </div>
            
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include 'includes/admin_footer.php'; ?>

   