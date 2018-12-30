<div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php

                                    $query = "SELECT * FROM categories";
                                    $categories_result = mysqli_query($conn ,$query);

                                    if($categories_result === FALSE) { 
                                        die("Faild to get catgories:". mysqli_error()); 
                                    }

                                    while ( $row = mysqli_fetch_assoc($categories_result) ) {
                                        $catgory_title = $row['cat_title'];
                                        echo "<li><a href='#'>$catgory_title</a></li>";
                                    }

                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include "widget.php";?>

            </div>