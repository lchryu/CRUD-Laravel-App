<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LCH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a
                    class="{{ request()->is('/') ? 'active' : ''}} nav-link"
                    aria-current="page"
                    href="/">
                    Home
                </a>
                <a
                    class="{{ request()->is('about') ? 'active' : '' }} nav-link"
                    href="/about">
                    About
                </a>
                <a class="nav-link" href="/foods">Food</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
        </div>
    </div>
</nav>
