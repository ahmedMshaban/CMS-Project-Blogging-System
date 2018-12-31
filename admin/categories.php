<?php include "includes/header.php" ?>

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
                        <form action="">
                            <h2>Add New Category</h2>
                            <div class="form-group">
                                <label for="cat_title">Name</label>
                                <input type="text" name="cat_title" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
                        </form>
                    </div>
                    <div class="col-md-8 table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test Category</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Test Category</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>