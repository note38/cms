<table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Commets</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM posts ";
                $select_post = mysqli_query($connection, $query);
                if (!$select_post) {
                    die("query failed" . mysqli_error($connection));
                }
                while($row = mysqli_fetch_assoc($select_post)){
                    $post_id = $row['post_id'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_category_id = $row['post_category_id'];
                    $post_status = $row['post_status'];
                    $post_image = $row['post_image'];
                    $post_tags = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_date = $row['post_date'];
                    
                    
                    
                    echo "<tr>";
                        echo "<th>  $post_id </th>";
                        echo "<th>  $post_author </th>";
                        echo "<th>  $post_title </th>";
                        echo "<th>  $post_category_id </th>";
                        echo "<th>  $post_status </th>";
                        echo "<th><img height='100px' src='images/$post_image' alt=''></th>";
                        echo "<th>  $post_tags </th>";
                        echo "<th>  $post_comment_count </th>";
                        echo "<th>  $post_date </th>";
                        echo "<th> <a href='posts.php?delete={$post_id}'>Delete</a></th>";
                    echo "</tr>";
                    
                
                }
                ?>
                <?php
                if (isset($_GET['delete'])) {
                    $the_post_id = $_GET['delete'];
                    
                    $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
                    $delete_query = mysqli_query($connection, $query);
                    
                    if(!$delete_query){
                        die("QUERY FAILED " . mysqli_error($connection));
                    }else {
                        echo "deleted succesfully";
                    }
                    header("location: posts.php");
                }
                ?>
                
            </tbody>
        </table>