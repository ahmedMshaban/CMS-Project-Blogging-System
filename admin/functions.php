<?php

function getCategoriesTable() {
	global $conn;
	$query = "SELECT * FROM categories";
    $categories_result = mysqli_query($conn ,$query);
    if($categories_result === FALSE) { 
        die("Faild to get catgories:". mysqli_error($conn)); 
    }
    else {
    	$categoriesInfo = array();
	    while ( $row = mysqli_fetch_assoc($categories_result) ) {
	    	$categoriesInfo[] = $row;
	    }
	    return $categoriesInfo;
	}
}

function displayCategories() {
	$categoriesInfo = getCategoriesTable();
	foreach ($categoriesInfo as $categoryInfo) {
	    $catgory_id = $categoryInfo['cat_id'];
	    $catgory_title = $categoryInfo['cat_title'];
	    echo "<tr><td>$catgory_id</td>";
	    echo "<td>$catgory_title</td>";
	    echo "<td><a href='categories.php?delete=$catgory_id' class='preventDefault'>Delete | </a><a href='categories.php?updateId=$catgory_id&updateName=$catgory_title' class='preventDefault'>Update</a></td></tr>";
	}
}

function deleteCategories() {
	global $conn;
	$cat_to_delete = $_GET['delete'];
    $categoriesInfo = getCategoriesTable();
    foreach ($categoriesInfo as $categoryInfo) {
        $catgory_id = $categoryInfo['cat_id'];
    }
    $query = "DELETE from categories WHERE cat_id = $catgory_id ";
    $delete_query = mysqli_query($conn, $query);
    if($delete_query === FALSE) { 
        die("Faild to delete catgories:". mysqli_error($conn)); 
    }
    header("Location: categories.php");
}

function addCategory() {
	global $conn;

	//Check if the item already exits
	$count = 0;
    $category_name = $_POST['cat_title'];
    $categoriesInfo = getCategoriesTable();

    foreach ($categoriesInfo as $categoryInfo) {
	    if($category_name === $categoryInfo['cat_title'] ){
	    	$count ++;
	    }
	}
	//Category already exists
    if ($count > 0) {
        echo '<script>alert("This item already exists!");</script>' ;
    }

    //Add the category
    else {
    	$category_name = mysqli_real_escape_string($conn,$_POST['cat_title']);
	    $query = "INSERT INTO categories (cat_title) VALUES ('$category_name')";
	    $query_result = mysqli_query($conn, $query);
	    if(!$query_result) {
	        die("Add Category Query Error". mysqli_error($conn));
	    }
    }
}

function updateCategory() {
	global $conn;
	$category_name = mysqli_real_escape_string($conn,$_POST['cat_title_update']);
    $category_id = $_GET['updateId'];
    $query = "UPDATE categories SET cat_title = '$category_name' WHERE cat_id = $category_id";
    $update_query= mysqli_query($conn, $query);

    if(!$update_query) {
        die("update Category Query Error". mysqli_error($conn));
    }
    else {
        header("Location: categories.php");
    }
}

function activeUpdateCategory() {
	$update_id = $_GET['updateId'];
    $update_name = $_GET['updateName']; ?>
    <form action="" method="post">
        <h2>Update Category</h2>
        <div class="form-group">
            <label for="cat_title_update">Name</label>
            <input type="text" name="cat_title_update" class="form-control" value="<?php echo $update_name; ?>" required="required">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update Category</button>
    </form>
<?php
}


function getPostsTable() {
    global $conn;
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($conn ,$query);
    if($select_posts === FALSE) { 
        die("Faild to get catgories:". mysqli_error($conn)); 
    }
    else {
        $postsInfo = array();
        while ( $row = mysqli_fetch_assoc($select_posts) ) {
            $postsInfo[] = $row;
        }
        return $postsInfo;
    }
}


function displayPostsTable() {
    $postsInfo = getPostsTable();
    foreach ($postsInfo as $postInfo) {
        $post_id = $postInfo['post_id'];
        $post_author = $postInfo['post_author'];
        $post_title = $postInfo['post_title'];
        $post_category_id = $postInfo['post_category_id'];
        $post_status = $postInfo['post_status'];
        $post_image = $postInfo['post_image'];
        $post_tags = $postInfo['post_tags'];
        $post_comments_count = $postInfo['post_comments_count'];
        $post_date = $postInfo['post_date'];
        echo "<tr>";
        echo "<td>$post_id</td>";
        echo "<td>$post_author</td>";
        echo "<td>$post_title</td>";
        echo "<td>$post_category_id </td>";
        echo "<td>$post_status</td>";
        echo "<td><img src='../images/$post_image' class='img-responsive' width='100px' alt='post Image'></td>";
        echo "<td>$post_tags</td>";
        echo "<td>$post_comments_count</td>";
        echo "<td>$post_date</td>";
        echo "</tr>";
    }
}

?>