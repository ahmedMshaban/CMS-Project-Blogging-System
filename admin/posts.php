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
                            Posts
                        </h1>
                    </div>
                </div>

                <!-- Page Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Dates</th>
                                </tr>
                            </thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Author</td>
                                    <td>Title</td>
                                    <td>Category</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Tags</td>
                                    <td>Comments</td>
                                    <td>Dates</td>
                                </tr>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>