<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href=/shop/main>PrOjEcT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">NEW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SALE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BRAND</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    FOOTWEARS 
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                    <li><a class="dropdown-item" href="#">Category</a>
                        <ul>
                            <li><a class="dropdown-item" href="#">ALL</a></li>
                            <li><a class="dropdown-item" href="#">SNEAKERS</a></li>
                            <li><a class="dropdown-item" href="#">BOOTS</a></li>
                            <li><a class="dropdown-item" href="#">SANDAL & SLIDE</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">BRAND</a></li>
                    <ul>
                        <li><a class="dropdown-item" href="#">NIKE</a></li>
                        <li><a class="dropdown-item" href="#">VANS</a></li>
                        <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                        <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                        <li><a class="dropdown-item" href="#">JORDAN</a></li>
                    </ul>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CLOTHING 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                        <li><a class="dropdown-item" href="#">Category</a>
                            <ul>
                                <li><a class="dropdown-item" href="#">OUTER</a></li>
                                <li><a class="dropdown-item" href="#">TOP</a></li>
                                <li><a class="dropdown-item" href="#">BOTTOM</a></li>
                            </ul>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">BRAND</a></li>
                        <ul>
                            <li><a class="dropdown-item" href="#">NIKE</a></li>
                            <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                            <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                            <li><a class="dropdown-item" href="#">JORDAN</a></li>
                        </ul>
                    </ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ACCESSORIES 
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                    <li><a class="dropdown-item" href="#">Category</a>
                        <ul>
                            <li><a class="dropdown-item" href="#">CAP</a></li>
                            <li><a class="dropdown-item" href="#">BAGS</a></li>
                            <li><a class="dropdown-item" href="#">SOCKS</a></li>
                            <li><a class="dropdown-item" href="#">ETC</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">BRAND</a></li>
                    <ul>
                        <li><a class="dropdown-item" href="#">NIKE</a></li>
                        <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                        <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                        <li><a class="dropdown-item" href="#">JORDAN</a></li>
                    </ul>
                </ul>
            </li>
            <li class="nav-item">
                <?php if (isset($_SESSION[_STR_LOGIN_ID])) { ?>
                <li class="nav-item"> <!--로그인 O -->
                    <span class="nav-link" style="color: white;"> WELCOME <?php echo $_SESSION[_STR_LOGIN_ID]; ?>😀</span>          
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/user/my">MY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #FEFF86;" href="/user/logout">LOG OUT</a>
                </li>
            <?php } else { ?>
                <li class="nav-item"> <!--로그인 X -->
                    <a class="nav-link" href="/user/login">LOGIN</a>
                </li>                
        <?php } ?>
            </li>

            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button id="searchBtn" class="btn btn-outline-light" type="submit">SEARCH</button>
            <script>
                const searchBtn = document.getElementById("searchBtn");
                searchBtn.addEventListener("click", () => {
                alert("검색 기능은 현재 준비 중입니다.");
                });
            </script>
            </form>
        </div>
        </div>
    </nav>