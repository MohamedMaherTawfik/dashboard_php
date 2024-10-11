<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="" dir="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="Wafaa Hegazy">
    <!--Page Name-->
    <title>Not Crash | Home</title>
    <!--Page Icon-->
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon" />
    <!--Bootstrap with RTL-->
    <!-- <link rel="stylesheet" href="css/lib/bootstrap-rtl.min.css"> -->
    <!--Bootstrap with LTR-->
    <link rel="stylesheet" href="css/lib/bootstrap-ltr.min.css">
    <!--Css Files & Libraries-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/lib/all.min.css">
    <link rel="stylesheet" href="css//lib/animate.css">
    <link rel="stylesheet" href="css/lib/jquery.fancybox.css">
    <link rel="stylesheet" href="css/lib/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!--With LTR -->
    <!-- <link rel="stylesheet" href="css/style-en.css"> -->
</head>

<body>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  >Add header data</button>
    <!--Start header-->
    <header data-scroll-index="0">
        <!--Start navs-container -->
        <div class="navs-container">
            <!--Start main-nav-->
            <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <div class="container">
                    <?php
                    $result=mysqli_query($connection,' SELECT * FROM `header` ');
                    $row=mysqli_fetch_assoc($result);
                    ?>
                    <a class="navbar-brand" href="index.html">
                        <img src="images/<?php echo $row['logo'] ?>" alt=""  />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-scroll-nav="0">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="2">services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="3">portfolio</a>
                            </li>
                        </ul>
                        <a href="#" class="butn lang-btn">Ar</a>
                        <button type="button" class="butn contact-btn" data-toggle="modal"
                            data-target="#contactModal">Contact us</button>
                    </div>
                </div>
            </nav>
        </div>  
<?php
        if(isset($_GET['insert_msg'])){
    echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>
        <div class="container">
            <!--Start inner-header -->
            <div class="inner-header">
                <div class="row">
                    <div class="col-md-10 col-lg-7">
                        <div class="text-box ">
                            <div class="content wow text-focus-in ">
                                <p class="subtitle">maher</p>
                                <h1 class="title mt-3"><?php echo $row['title'] ?> <br> Products</h1>
                                <p class="p mt-3">
                                    <?php echo $row['description'] ?>
                                </p>
                                <div class="btns-wrapper mt-4">
                                    <a href="#" data-scroll-goto="1" class="main-btn">Explore</a>
                                    <a href="https://www.youtube.com/watch?v=HmZKgaHa3Fg" data-fancybox
                                        class="video-btn"><span class="icon"><i class="fas fa-play"></i></span> Watch
                                        video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>

    <form action="insert_data.php" method="POST" enctype="multipart/form-data">
<!-- Start Modal Form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" class="form-control" name="image">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title">
                    <!-- <label for="subtitle">subtitle</label>
                    <input type="text" class="form-control" name="subtitle"> -->
                    <label for="description">description</label>
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="add_data">ADD</button>
        </div>
        </div>
    </div>
    </div>
</form>