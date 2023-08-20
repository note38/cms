 <!-- UPDATE CAT FORM -->
 <form action="" method="post">
            <div class="form-group">
                <label for="cat_title">Edit Category</label>

                <!-- GET and SHOW to EDIT CATEGORIES  -->
                <?php 
                if(isset($_GET['edit'])){
                    $get_edit_cat_id = $_GET['edit'];
                    $query = "SELECT * FROM categories WHERE cat_id = $get_edit_cat_id ";
                    $select_edit_categories_id = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_edit_categories_id)){
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    ?>

                    <input value="<?php if (isset($cat_title)){echo $cat_title; } ?>" type="text" class="form-control" name="cat_title">
                        <?php
                    }
                }
                ?>

                <!-- POST SUBMIT UPDATE CAT HERE -->
                <?php
                if(isset($_POST['update_cat'])){
                    
                    $the_cat_title = $_POST['cat_title'];
                    $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} "; 
                    $update_query = mysqli_query($connection, $query);

                    if (!$update_query) {
                        die("QUERY FAILED" . mysqli_error($connection));
                    }
                }
                ?>

                
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_cat" value="Update Category">
            </div>
</form>