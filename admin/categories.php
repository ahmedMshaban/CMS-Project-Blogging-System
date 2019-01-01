<?php include "includes/header.php" ?>
<?php include "functions.php" ?>
<?php 
//Add Category
if (isset($_POST['submit'])) {
    addCategory();
} 
//Update category
if (isset($_POST['update'])) {
    updateCategory();
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

                        <?php
                            if (isset($_GET['updateId'])) {
                                activeUpdateCategory();    
                            } 
                        ?>
                                  
                    </div>
                    <div class="col-md-8 table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //Display categories
                                    displayCategories();
                                    //Delete category
                                    if (isset($_GET['delete'])) {
                                        deleteCategories();
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