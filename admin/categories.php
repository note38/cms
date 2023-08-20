<?php include 'includes/admin_header.php'; ?>
<?php include 'functions.php'; ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to Admin!
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                            
                            <!-- CREATE CATEGORIES -->
                            <?php
                            createCat()
                            ?>
             

                            <!-- ADD CAT FORM -->
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat-title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>

                            <!-- UPDATE/EDIT START HERE -->
                           <?php 
                           if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];
                                // INCLUDE UPDATE
                                include 'includes/update_categories.php';
                           }
                           
                           ?>

                        </div>

                        <!-- CATEGORY TABLE -->
                        <div class="col-xs-6">  
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category title</th>
                                    </tr>
                                    <a href=""></a>
                                </thead>
                                <tbody>

                                        <!-- SHOW ALL CATEGORIES -->
                                        <?php
                                        showAllCat()
                                        ?>

                                        <!-- GET and DELETE CATEGORIES -->
                                        <?php
                                        deleteCat()
                                        ?>
                                    
                                </tbody>
                            </table>

                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include 'includes/admin_footer.php'; ?>

   