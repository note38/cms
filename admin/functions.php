<?php


function createCat(){
    if(isset($_POST['submit'])){

        global $connection;

        $cat_title = $_POST['cat-title'];
      // IF EMPTY
        if ($cat_title == "" || empty($cat_title)) {
          echo "this field should not be empty";
        } else {
      // IF NOT EMPTY
          $query = "INSERT INTO categories(cat_title) ";
          $query .= "VALUE('{$cat_title}') ";

          $create_category_query = mysqli_query($connection, $query);

          if (!$create_category_query) {
              die ("Query Failed!" . mysqli_error($connection));
          } else {
              echo "<h1>Added Succesfuly</h1>"; 
          }
        }

      }
}

function showAllCat(){
    
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    // LOOP SHOW ALL CATEGORIES and EDIT/DALETE ROW
    while($row = mysqli_fetch_assoc($select_categories)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
        echo "<tr>";
        echo "<td>{$cat_id}</td> ";
        echo "<td>{$cat_title}</td> ";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td> ";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td> ";
        echo "</tr>";
    }
}

function deleteCat(){
      
    global $connection;
    if (isset($_GET['delete'])) {
        $get_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("location: categories.php");
       }
}

function checkQuery($result){

  global $connection;
  
  if(!$result){
    die("QUERY FAILED " . mysqli_error($connection));
  }else {
      echo "Succesfully";
  }
}























?>