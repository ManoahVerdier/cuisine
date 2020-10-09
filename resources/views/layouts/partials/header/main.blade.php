<header>
    <div class="container-fluid bg-primary" id="header-main">
        <div class="row">
            <div class="col-6 col-md-3">
                <div id="logo" class="px-md-3 px-0 mt-3 mb-3">
                    <a href="{{url('/')}}" class="d-inline-block h-50 w-100">
                        <img class=" mx-auto" src="{{asset('images/layouts/logo.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="col-9 d-none d-md-block">
                <nav class="navbar navbar-expand-lg row h-100 align-self-center">
                    <div class="col-3 align-self-center">
                        <a class="mb-0 nav-link text-white dropdown-toggle h5 pb-3 pl-3 text-center" href="#" id="produits" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produit
                        </a>
                        <div class="mt-3 dropdown-menu bg-white" aria-labelledby="produits" id="produits-sub">
                            <div class="container px-0">
                                <div class="row w-100 mx-0">
                                    <div class="col-12 text-left pl-0">
                                        <a class="dropdown-item pl-3" href="{{route('produit-ms-erp')}}">MS-ERP</a>
                                    </div>
                                    <div class="col-12 text-left pl-0">
                                        <a class="dropdown-item pl-3" href="{{route('produit-appli')}}">Application mobile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 align-self-center">
                        <a class="mb-0 nav-link text-white dropdown-toggle h5 pb-3 pl-3 text-center" href="#" id="fonctionnalites" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fonctionnalités
                        </a>
                        <div class="mt-3 dropdown-menu bg-white" aria-labelledby="fonctionnalites" id="fonctionnalites-sub">
                            <div class="container px-0">
                                <div class="row w-100 mx-0">
                                    <div class="col-12 text-left pl-0">
                                        <a class="dropdown-item pl-3" href="{{route('fonction-ms-erp')}}">MS-ERP</a>
                                    </div>
                                    <div class="col-12 text-left pl-0">
                                        <a class="dropdown-item pl-3" href="{{route('fonction-appli')}}">Application mobile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 align-self-center">
                        <a class="mb-0 nav-link text-white h5 pb-3 pl-3 text-center" href="{{route('contact',['demo'=>1])}}" id="demo" role="button">
                            Démo
                        </a>
                    </div>
                    <div class="col-3 align-self-center">
                    <a class="mb-0 nav-link text-white h5 pb-3 pl-3 text-center" href="{{route('contact')}}" id="contact" role="button">
                            Contact
                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-2 d-md-none offset-4 px-0 text-center">
                <button id="show-menu" class="btn btn-blank px-1 my-3" onclick="$('#menu').toggleClass('hidden')"><div class="blue"><img height="16px" width="16px" src="{{asset('/images/layouts/menu_img.png')}}"/></div></button>
            </div>
        </div>
    </div>
</header>

<div id='menu' class="position-fixed h-100 w-100 hidden">
    <div class='wrap w-100 h-100'>
        <div class="d-md-inline-block w-70 h-100 float-left d-none" id='menu-background' onclick="$('#menu').toggleClass('hidden')"></div>
        <div id="inner-menu" class="d-inline-block w-md-30 w-100 float-right bg-light-grey h-100">
            <div class="container">
                <div class='row w-100 mb-3'>
                    <div class="col-12 text-right pr-0">
                        <button class="btn btn-blank" id='close-menu' onclick="$('#menu').toggleClass('hidden')">X</button>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg px-1 navbar-light position-relative">

                    <div class="collapse navbar-collapse collapse show" id="menu-nav">
                        <div class="logo w-100 text-center mb-5">
                            <a href="{{url('/')}}" class="d-inline-block h-50 w-100">
                                <img class=" mx-auto" src="{{asset('images/layouts/logo.png')}}"/>
                            </a>
                        </div>
                        <ul class="navbar-nav mt-2 mt-lg-0 row w-100 mx-0 muli-bold">
                            <li class="nav-item col-12 text-left dropdown position-relative border-bottom border-primary pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle h5 pb-3 pl-3" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produit
                                </a>
                                <div class="dropdown-menu bg-primary" aria-labelledby="produits" id="produits-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                            <div class="col-12 text-left pl-0">
                                                <a class="dropdown-item pl-3 text-white" href="{{route('produit-ms-erp')}}">MS-ERP</a>
                                            </div>
                                            <div class="col-12 text-left pl-0">
                                                <a class="dropdown-item pl-3 text-white" href="{{route('produit-appli')}}">Application mobile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 text-left dropdown position-relative border-bottom border-primary pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle h5 pb-3 pl-3" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Fonctionnalités
                                </a>
                                <div class="dropdown-menu bg-primary" aria-labelledby="fonctionnalites" id="fonctionnalites-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                            <div class="col-12 text-left pl-0">
                                                <a class="dropdown-item pl-3" href="{{route('fonction-ms-erp')}}">MS-ERP</a>
                                            </div>
                                            <div class="col-12 text-left pl-0">
                                                <a class="dropdown-item pl-3" href="{{route('fonction-appli')}}">Application mobile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 text-left position-relative border-bottom border-primary pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle w-100 d-inline-block py-2 h5 pb-3 pl-3" href="#" id="infos-pratiques" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demo</a>
                            </li>
                            <li class="nav-item col-12 text-left border-bottom border-primary py-3 pb-2 px-0">
                                <a class="pl-3 w-100 d-inline-block py-2 h5 dark-grey" href="{{route('contact')}}">Contact</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>