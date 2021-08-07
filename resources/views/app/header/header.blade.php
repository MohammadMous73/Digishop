<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">فروشگاه دیجیتال</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">راهنما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">تماس با من</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
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
{{--<div class="input-group rounded">--}}
{{--    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"--}}
{{--           aria-describedby="search-addon" />--}}
{{--    <span class="input-group-text border-0" id="search-addon">--}}
{{--    <i class="fas fa-search"></i>--}}
{{--  </span>--}}
{{--</div>--}}

<div class="btn-light px-3 mt-3 border rounded btn btn-sm" style="position: absolute;left: 40px">
    <a class="nav-link text-dark" href="#">سبد کالا</a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 8%">

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-5">
            <li class="nav-item active">
                <a class="nav-link" href="#">لب تاپ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">تبلت</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">موبایل</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">کامپیوتر های یکپارچه</a>
            </li>

        </ul>


    </div>

</nav>



