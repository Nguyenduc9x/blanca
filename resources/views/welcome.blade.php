<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BlogRecipe</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
    <!-- Styles -->

    <!--load all Font Awesome styles -->
    <link href="FrontEnd/all.css" rel="stylesheet">
    <link href="FrontEnd/fontawesome.css" rel="stylesheet">
    <link href="FrontEnd/brands.css" rel="stylesheet">
    <link href="FrontEnd/solid.css" rel="stylesheet">
    <link href="FrontEnd/container.css" rel="stylesheet">
    <link href="FrontEnd/footer.css" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div class="outer-container">
        <header class="site-header">
            <div class="top-header-bar">
                <div class="bar-left">
                    <div class="bar-welcome">
                        <p> Welcome to Recipe Blog </p>
                    </div>
                    <div class="contact-email">
                        <a href="#">Contactemail@gmail.com</a>
                    </div>
                </div>
                <div class="bar-right">
                    <div class="bar-icon">
                        <ul class="header-bar-icon">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                    <div class="bar-search">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site Logo">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">BlogRecipe</a></h1>
                            </div>
                        </div>
                        <div class="navbar">
                            <ul class="navbar-main">
                                <li class="current-menu-item"><a href="index.html">Home</a></li>
                                <li><a href="#">About Me</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Talk Show</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://i.ytimg.com/vi/Q57oyenBDI0/maxresdefault.jpg" class="d-block w-100" alt="..." height="550px" width="1600px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://savorjapan.com/gg/content_image/t0313_006.jpg" class="d-block w-100" alt="..." height="550px" width="1600px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://mlbeacsiwa9k.i.optimole.com/9NFLyPQ.iANQ~34e3e/w:2000/h:864/q:mauto/https://www.mizkanchef.com/wp-content/uploads/2020/09/ramen-tonkotsu.jpg" class="d-block w-100" alt="..." height="550px" width="1600px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="offset-lg-9 col-12 col-lg-3">
                        <a href="#">
                            <div class="yt-subscribe">
                                <img src="upload/yotubechannel.jpg" alt="Youtube Subscribe" width="254px" height="254px">
                                <h3>Subscribe</h3>
                                <p>To my Youtube Channel</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container single-page">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="content-wrap">
                        <header class="post-header">
                            <div class="posted-date">
                                January 30, 2018
                            </div>
                            <h2 class="post-title">Eat Eat Eat</h2>
                            <div class="tags-links">
                                <a href="#">#winter</a>
                                <a href="#">#love</a>
                                <a href="#">#snow</a>
                                <a href="#">#january</a>
                            </div>
                        </header>
                        <figure class="featured-image">
                            <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                        </figure>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. </p>
                        </div>
                        <footer class="entry-footer">
                            <ul class="post-share" id="share1">
                                <label>Share</label>
                                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                            <a class="read-more order-2" href="#">Read more</a>
                            <div class="comments-count order-1 order-lg-3">
                                <a href="#">2 Comments</a>
                            </div>
                        </footer>
                    </div>
                    <div class="content-wrap">
                        <header class="post-header">
                            <div class="posted-date">
                                January 30, 2018
                            </div>
                            <h2 class="post-title">Eat Eat Eat</h2>
                            <div class="tags-links">
                                <a href="#">#winter</a>
                                <a href="#">#love</a>
                                <a href="#">#snow</a>
                                <a href="#">#january</a>
                            </div>
                        </header>
                        <figure class="featured-image">
                            <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                        </figure>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. </p>
                        </div>
                        <footer class="entry-footer">
                            <ul class="post-share" id="share1">
                                <label>Share</label>
                                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                            <a class="read-more order-2" href="#">Read more</a>
                            <div class="comments-count order-1 order-lg-3">
                                <a href="#">2 Comments</a>
                            </div>
                        </footer>
                    </div>
                    <div class="pagination">
                        <ul class="list-pagination">
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="sidebar">
                        <div class="about-me">
                            <h2>I’m Kupy Duc</h2>
                            <p>Tôi đến từ Nam Định, vẫn chưa vợ, là người thật thà chất phác, nhiệt tình trong công việc, không rượu chè bài bạc. Mong muốn được có người dắt đi chơi cuối tuần</p>
                        </div>
                        <div class="recent-posts">
                            <div class="recent-post-wrap">
                                <figure>
                                    <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                                </figure>
                                <header class="entry-header">
                                    <div class="posted-date">
                                        January 30, 2018
                                    </div>
                                    <h3><a href="#">My fall in love story</a></h3>
                                    <div class="tags-links">
                                        <a href="#">#winter</a>
                                        <a href="#">#love</a>
                                        <a href="#">#snow</a>
                                        <a href="#">#january</a>
                                    </div>
                                </header>
                            </div>
                            <div class="recent-post-wrap">
                                <figure>
                                    <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                                </figure>
                                <header class="entry-header">
                                    <div class="posted-date">
                                        January 30, 2018
                                    </div>
                                    <h3><a href="#">My fall in love story</a></h3>
                                    <div class="tags-links">
                                        <a href="#">#winter</a>
                                        <a href="#">#love</a>
                                        <a href="#">#snow</a>
                                        <a href="#">#january</a>
                                    </div>
                                </header>
                            </div>
                            <div class="recent-post-wrap">
                                <figure>
                                    <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                                </figure>
                                <header class="entry-header">
                                    <div class="posted-date">
                                        January 30, 2018
                                    </div>
                                    <h3><a href="#">My fall in love story</a></h3>
                                    <div class="tags-links">
                                        <a href="#">#winter</a>
                                        <a href="#">#love</a>
                                        <a href="#">#snow</a>
                                        <a href="#">#january</a>
                                    </div>
                                </header>
                            </div>
                            <div class="recent-post-wrap">
                                <figure>
                                    <img src="https://i1.wp.com/seonkyounglongest.com/wp-content/uploads/2020/09/Easy-Tonkotsu-26-mini.jpg" alt="">
                                </figure>
                                <header class="entry-header">
                                    <div class="posted-date">
                                        January 30, 2018
                                    </div>
                                    <h3><a href="#">My fall in love story</a></h3>
                                    <div class="tags-links">
                                        <a href="#">#winter</a>
                                        <a href="#">#love</a>
                                        <a href="#">#snow</a>
                                        <a href="#">#january</a>
                                    </div>
                                </header>
                            </div>
                        </div>
                        <div class="tags-list">
                            <a href="#">Music</a>
                            <a href="#">Love</a>
                            <a href="#">Car</a>
                            <a href="#">Stories</a>
                            <a href="#">Photography</a>
                            <a href="#">Music</a>
                            <a href="#">Car</a>
                        </div>
                        <div class="sidebar-ads">
                            <img src="images/xads.jpg.pagespeed.ic.ZtY4ng7OOa.webp" alt="ads">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    @include('footer')
</footer>

</html>
