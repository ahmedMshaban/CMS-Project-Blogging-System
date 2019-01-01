<?php

if (isset($_POST['submit'])) {
	global $conn;
    $category_name = mysqli_real_escape_string($conn,$_POST['cat_title']);
    $query = "INSERT INTO categories (cat_title) VALUES ('$category_name')";
    $query_result = mysqli_query($conn, $query);
    if(!$query_result) {
        die("Add Category Query Error". mysqli_error($conn));
    }
    else {
        echo "Add to the DB corretly";
    }
}

?>