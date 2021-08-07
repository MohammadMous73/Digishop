<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white fw-bold" href="#">فروشگاه دیجیتال</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">سبد کالا</a>
            </li>
        </ul>
        <div style="position: absolute;left: 15px">
            <form method="post" action="http://127.0.0.1:8000/logout">
                @csrf
                <input type="submit" class="btn-sm btn-danger btn rounded" value="خروج">
            </form>
        </div>
    </div>
</nav>
