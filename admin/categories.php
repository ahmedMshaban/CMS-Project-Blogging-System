<?php include "includes/header.php" ?>
<?php

if (isset($_POST['submit'])) {
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
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            Categories
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Body -->
                <div class="row">
                    <div class="col-md-4">
                        <form action="" method="post">
                            <h2>Add New Category</h2>
                            <div class="form-group">
                                <label for="cat_title">Name</label>
                                <input type="text" name="cat_title" class="form-control" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
                        </form>
                    </div>
                    <div class="col-md-8 table-responsive">
                        <?php
                            $query = "SELECT * FROM categories";
                            $categories_result = mysqli_query($conn ,$query);

                            if($categories_result === FALSE) { 
                                die("Faild to get catgories:". mysqli_error()); 
                            }
                        ?>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ( $row = mysqli_fetch_assoc($categories_result) ) {
                                        $catgory_id = $row['cat_id'];
                                        $catgory_title = $row['cat_title'];
                                        echo "<tr><td>$catgory_id</td>";
                                        echo "<td>$catgory_title</td></tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>