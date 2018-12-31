<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">My site</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

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
                    <li><a href='admin'>Admin</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>