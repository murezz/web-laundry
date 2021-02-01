<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="#" data-aos="fade-down">Laundry Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" data-aos="fade-down" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link <?php if ($title === 'Dashboard') echo 'active'; ?>" href="#">Home</a>
                <a class="nav-item nav-link " href="#">Outlet</a>
                <a class="nav-item nav-link " href="#">About</a>
                <a class="nav-item nav-link " href="#">Contact</a>
                <a href="" class="btn btn-danger ml-2">Logout</a>
            </div>
        </div>
    </div>
</nav>