<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img img-fluid w-100" src="https://youmatter.world/app/uploads/sites/2/2019/03/employer-branding-definition.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="img img-fluid w-100" src="https://healthpayerintelligence.com/images/site/article_headers/_normal/GettyImages-1059099048.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="img img-fluid w-100" src="https://f.hubspotusercontent30.net/hubfs/3277184/employer%20branding.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar-nav">
            <li class="nav-item <?= !isset($_GET['page']) ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= $_GET['page'] == 'aboutUs' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php?page=aboutUs">Abous Us</a>
            </li>
            <li class="nav-item <?= $_GET['page'] == 'dataPegawai' ? 'active' : '' ?> dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="http://example.com"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown">Data</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?page=dataPegawai">Pegawai</a>
                </div>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav ml-md-auto mr-5">
        <?php if (isset($_SESSION['MEMBER'])) { ?>
            <li class="nav-item <?= $_GET['page'] == 'dataPegawai' ? 'active' : '' ?> dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="http://example.com"
                    id="logins"
                    data-toggle="dropdown"><?= ucfirst($_SESSION['MEMBER']['fullname']) ?></a>
                <div class="dropdown-menu p-3" aria-labelledby="logins">
                    <p><b><?= ucfirst($_SESSION['MEMBER']['fullname']) ?></b></p>
                    <p class="text-dark"><?= ucfirst($_SESSION['MEMBER']['role']) ?></p>
                    <form method="post" action="">
                        <a class="btn btn-danger mt-2" href="logout.php">Logout</a>
                    </form>
                </div>
            </li>
        <?php }else { ?>
            <li class="nav-item active">
                <a class="nav-link bg-primary" href="index.php?page=login">Login
                    <span class="sr-only">(current)</span></a>
            </li>
        <?php } ?>
        <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"
        href="http://example.com" id="navbarDropdownMenuLink"
        data-toggle="dropdown">Dropdown link</a> <div class="dropdown-menu
        dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"> <a
        class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
        href="#">Another action</a> <a class="dropdown-item" href="#">Something else
        here</a> <div class="dropdown-divider"></div> <a class="dropdown-item"
        href="#">Separated link</a> </div> </li> -->
    </ul>
</div>
</nav>