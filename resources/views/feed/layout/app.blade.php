<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('forum/feed.css') }}" />
    <title>Laravel Quora</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css"/>
    <!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> <!-- 'classic' theme -->

</head>

<body class="bg-gray postion-relative">

    <!-- ================= Appbar ================= -->
    <div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height: 56px; z-index: 5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- search -->
                <div class="col d-flex align-items-center">
                    <!-- logo -->
                    <a href="{{route('feed.index')}}"><i class="fab fa-quora text-danger" style="font-size: 3rem"></i></a>
                    <!-- search bar -->
                    <div class="input-group ms-3" type="button">
                        <!-- mobile -->
                        <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
                                <i class="fas fa-search text-muted"></i>
                            </div>
                        </span>
                        <!-- desktop -->
                        <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <p class="m-0 fs-7 text-dark ps-3">
                                    @if($search)
                                   {{$search}}
                                   @else
                                   Search Laravel Quora
                                   @endif
                                </p>
                            </div>
                        </span>
                        <!-- search menu -->
                        <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu" style="width: 20em; max-height: 600px">
                            <!-- search input -->
                            <li>
                                <form action="" method="get" class="d-flex">
                                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item" name="search" placeholder="Search Laravel Quora..." value="{{$search}}" autofocus />
                                <input type="submit" class="rounded-pill bg-primary text-white" value="Search">
                                </form>
                            </li>
                            <!-- search 1 -->
                            <li class="my-4">
                                <div class="alert fade show dropdown-item p-1 m-0 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="
                                                    width: 35px;
                                                    height: 35px;
                                                    object-fit: cover;
                                                " />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                            <!-- search 2 -->
                            <li class="my-4">
                                <div class="alert fade show dropdown-item p-1 m-0 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                                    width: 35px;
                                                    height: 35px;
                                                    object-fit: cover;
                                                " />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                            <!-- search 3 -->
                            <li class="my-4">
                                <div class="alert fade show dropdown-item p-1 m-0 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="
                                                    width: 35px;
                                                    height: 35px;
                                                    object-fit: cover;
                                                " />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- nav -->
                <div class="col d-none d-xl-flex justify-content-center">
                    <!-- home -->
                    <div class="mx-4 nav__btn nav__btn-active">
                        <button type="button" class="btn px-4">
                            <a href="{{route('feed.index')}}"><i class="fas fa-home text-muted fs-4"></i></a>
                        </button>
                    </div>
                    <!-- market -->
                    <div class="mx-4 nav__btn">
                        <button type="button" class="btn px-4">
                            <i class="fas fa-store text-muted fs-4"></i>
                        </button>
                    </div>
                    <!-- group -->
                    <div class="mx-4 nav__btn">
                        <button type="button" class="btn px-4">
                            <i type="button" class="position-relative fas fa-users text-muted fs-4">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem">
                                    1
                                    <span class="visually-hidden"></span>
                                </span>
                            </i>
                        </button>
                    </div>
                    <!-- gaming -->
                    <div class="mx-4 nav__btn">
                        <button type="button" class="btn px-4">
                            <i class="fas fa-gamepad text-muted fs-4"></i>
                        </button>
                    </div>
                </div>
                <!-- menus -->
                <div class="col d-flex align-items-center justify-content-end">
                    <!-- avatar -->
                    <div class="align-items-center justify-content-center d-none d-xl-flex">
                        <img src="{{asset('images/'.Auth::user()->profile_pic)}}" class="rounded-circle me-2" alt="avatar" style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                " />
                        <p class="m-0">{{Auth::user()->name}}</p>
                    </div>
                    <!-- main menu -->
                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="mainMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <!-- main menu dd -->
                    <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="mainMenu" style="width: 23em; max-height: 600px">
                        <!-- menu -->
                        <div>
                            <!-- header -->
                            <li class="p-1 mx-2">
                                <h2>Menu</h2>
                            </li>
                            <!-- search -->
                            <li class="p-1">
                                <div class="input-group-text bg-gray border-0 rounded-pill" style="
                                            min-height: 40px;
                                            min-width: 230px;
                                        ">
                                    <i class="fas fa-search me-2 text-muted"></i>
                                    <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Menu" />
                                </div>
                            </li>
                            <!-- social items -->
                            <h4 class="m-2">Social</h4>
                            <!-- s1 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Campus</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- s2 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Events</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- s3 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Friends</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- s4 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Groups</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- s5 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">News Feed</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- s6 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Pages</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <hr />
                            <!-- ent items -->
                            <h4 class="m-2">Entertainment</h4>
                            <!-- e1 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Campus</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- e2 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Events</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                            <!-- e3 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="icon from fb" class="rounded-circle" style="
                                                    width: 48px;
                                                    height: 48px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="m-0">Friends</p>
                                        <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Odio, commodi.</span>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <hr />
                        <!-- create -->
                        <div>
                            <!-- header -->
                            <li class="p-1 mx-2">
                                <h2>Create</h2>
                            </li>
                            <!-- c-1 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Post</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-2 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Story</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-3 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Video</p>
                                    </div>
                                </a>
                            </li>
                            <hr />
                            <!-- c-4 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-flag"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Page</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-5 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Add</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-6 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Group</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-7-->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Event</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-8 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-shopping-basket"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">
                                            Marketplace Listing
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-9 -->
                            <li class="my-2 p-1">
                                <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="rounded-circle bg-gray p-1 d-flex align-items-center justify-content-center me-3" style="width: 38px; height: 38px">
                                        <i class="fas fa-suitcase"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Job</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                    </ul>
                    <!-- chat -->
                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="chatMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-comment"></i>
                    </div>
                    <!-- chat  dd -->
                    <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="chatMenu" style="width: 23em; max-height: 600px">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Message</h2>
                                <div>
                                    <!-- setting -->
                                    <i class="fas fa-ellipsis-h text-muted mx-2" type="button" data-bs-toggle="dropdown"></i>
                                    <!-- setting dd -->
                                    <ul class="dropdown-menu shadow" style="width: 18em">
                                        <!-- title -->
                                        <div class="p-2">
                                            <h5>Chat Settings</h5>
                                            <span class="text-muted fs-7">Customize your Messenger
                                                experience.</span>
                                        </div>
                                        <hr />
                                        <!-- incoming sound -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-phone-alt me-3"></i>
                                                    <p class="m-0">
                                                        Incoming call sounds
                                                    </p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- message sound -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-volume-off me-4 fs-4"></i>
                                                    <p class="m-0">
                                                        Message sounds
                                                    </p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- popup message -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-spinner me-3"></i>
                                                    <p class="m-0">
                                                        Pop-up new messages
                                                    </p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                            <span class="ms-5 text-muted fs-7">Automatically open new
                                                messages.</span>
                                        </li>
                                        <hr class="m-0" />
                                        <!-- item 1 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-toggle-off me-3"></i>
                                                    <p class="m-0">
                                                        Turn Off Active
                                                        Status
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 2 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="far fa-comment-alt me-3"></i>
                                                    <p class="m-0">
                                                        Message Request
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 3 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-share-square me-3"></i>
                                                    <p class="m-0">
                                                        Message delivery
                                                        settings
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 4 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-shield-alt me-3"></i>
                                                    <p class="m-0">
                                                        Block settings
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <i class="fas fa-expand-arrows-alt text-muted mx-2" type="button"></i>
                                    <!-- new message -->
                                    <i class="fas fa-edit text-muted mx-2" type="button" data-bs-toggle="modal" data-bs-target="#newChat"></i>
                                </div>
                            </div>
                        </li>
                        <!-- search -->
                        <li class="p-1">
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Messenger" />
                            </div>
                        </li>
                        <!-- message 1 -->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">Mike</p>
                                        <span class="fs-7 text-muted">Lorem ipsum &#8226; 7d</span>
                                    </div>
                                </div>
                                <!-- small avatar -->
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="
                                                width: 15px;
                                                height: 15px;
                                                object-fit: cover;
                                            " />
                                </div>
                            </div>
                        </li>
                        <!-- message 2 -->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Tuan
                                            <span class="fs-7 text-muted">Lorem ipsum &#8226;
                                                7d</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- small avatar -->
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle" style="
                                                width: 15px;
                                                height: 15px;
                                                object-fit: cover;
                                            " />
                                </div>
                            </div>
                        </li>
                        <!-- message 3 -->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">Jerry</p>
                                        <span class="fs-7 text-muted">Lorem ipsum &#8226; 7d</span>
                                    </div>
                                </div>
                                <!-- small avatar -->
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle" style="
                                                width: 15px;
                                                height: 15px;
                                                object-fit: cover;
                                            " />
                                </div>
                            </div>
                        </li>
                        <!-- message 4 -->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">Tony</p>
                                        <span class="fs-7 text-muted">Lorem ipsum &#8226; 7d</span>
                                    </div>
                                </div>
                                <!-- small avatar -->
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle" style="
                                                width: 15px;
                                                height: 15px;
                                                object-fit: cover;
                                            " />
                                </div>
                            </div>
                        </li>
                        <!-- message 5 -->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">Phu</p>
                                        <span class="fs-7 text-muted">Lorem ipsum &#8226; 7d</span>
                                    </div>
                                </div>
                                <!-- small avatar -->
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle" style="
                                                width: 15px;
                                                height: 15px;
                                                object-fit: cover;
                                            " />
                                </div>
                            </div>
                        </li>
                        <hr class="m-0" />
                        <a href="#" class="text-decoration-none">
                            <p class="fw-bold text-center pt-3 m-0">
                                See All in Messenger
                            </p>
                        </a>
                    </ul>
                    <!-- notifications -->
                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-bell"></i>
                    </div>
                    <!-- notifications dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu" style="
                                width: 23em;
                                max-height: 600px;
                                overflow-y: auto;
                            ">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Notifications</h2>
                                <div>
                                    <i class="fas fa-ellipsis-h pointer p-2 rounded-circle bg-gray" type="button" data-bs-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-check me-3 text-muted"></i>
                                            <p class="m-0">
                                                Mark all as read
                                            </p>
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-cog me-3 text-muted"></i>
                                            <p class="m-0">
                                                Privacy Checkup
                                            </p>
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-desktop me-3 text-muted"></i>
                                            <p class="m-0">
                                                Privacy Shortcuts
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex" type="button">
                                <p class="rounded-pill bg-gray p-2">All</p>
                                <p class="ms-3 rounded-pill bg-primary p-2 text-white">
                                    Unread
                                </p>
                            </div>
                        </li>
                        <!-- news -->
                        <div class="d-flex justify-content-between mx-2">
                            <h5>New</h5>
                            <a href="#" class="text-decoration-none">See All</a>
                        </div>
                        <!-- news 1 -->
                        <li class="my-2 p-1">
                            <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Harum unde amet at nulla quae
                                            porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 2 -->
                        <li class="my-2 p-1">
                            <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Harum unde amet at nulla quae
                                            porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 3 -->
                        <li class="my-2 p-1">
                            <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Harum unde amet at nulla quae
                                            porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 4 -->
                        <li class="my-2 p-1">
                            <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Harum unde amet at nulla quae
                                            porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 5 -->
                        <li class="my-2 p-1">
                            <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle" style="
                                                    width: 58px;
                                                    height: 58px;
                                                    object-fit: cover;
                                                " />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Harum unde amet at nulla quae
                                            porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- secondary menu -->
                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <!-- secondary menu dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded d-flex" type="button" id="profile-div">
                            <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                        width: 45px;
                                        height: 45px;
                                        object-fit: cover;
                                    " />
                            <div>
                                <p class="m-0">{{Auth::user()->name}}</p>
                                <p class="m-0 text-muted text-decoration-none">
                                    See your profile
                                </p>
                            </div>
                        </li>
                        <hr />
                        <!-- feedback -->
                        <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                            <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3">
                                <p class="m-0">Give Feedback</p>
                                <p class="m-0 text-muted fs-7">
                                    Help us improve the new Flexbook.
                                </p>
                            </div>
                        </li>
                        <hr />
                        <!-- options -->
                        <!-- 1 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                        <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                            <p class="m-0">
                                                Settings & Privacy
                                            </p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Checkup
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Shortcuts
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">
                                                    Activity Log
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">
                                                    News Feed Preferences
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 2 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i class="fas fa-question-circle bg-gray p-2 rounded-circle"></i>
                                        <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                            <p class="m-0">
                                                Help & Support
                                            </p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Checkup
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Shortcuts
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">
                                                    Activity Log
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">
                                                    News Feed Preferences
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 3 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i class="fas fa-moon bg-gray p-2 rounded-circle"></i>
                                        <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                            <p class="m-0">
                                                Display & Accessibility
                                            </p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Checkup
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">
                                                    Privacy Shortcuts
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">
                                                    Activity Log
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">
                                                    News Feed Preferences
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="
                                                            width: 38px;
                                                            height: 38px;
                                                        ">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 4 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item" id="logout-item">
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf

                                        <div class="d-flex text-decoration-none text-dark">
                                            <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                            <!-- <button class="ms-3 d-flex justify-content-between align-items-center w-100"> -->
                                                <input type="submit" class="m-0 ms-3 mt-1 bg-white mask" value="Log Out" style="border: 1px solid white;">
                                            <!-- </button> -->
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
    <!-- =============== New Chat Mobile =============== -->
    <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-75 shadow" style="transform: translateX(-80px)">
            <div class="modal-content border-0">
                <!-- head -->
                <div class="modal-header align-items-start">
                    <div>
                        <h6 class="modal-title text-dark mb-2" id="newChat1Label">
                            New Message
                        </h6>
                        <label class="text-dark">To:</label>
                        <input type="text" class="border-0" />
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body shadow m-0 chat-border">
                    <p class="m-0 text-primary ms-4">Suggested</p>
                </div>
                <!-- footer -->
                <div class="modal-footer border-0" style="min-height: 300px"></div>
            </div>
        </div>
    </div>
    <!-- ================= Chat Modal Mobile ================= -->
    <!-- chat 1 -->
    <div class="modal fade" id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content='
              <div>
                <div class="popover-body d-flex flex-column p-0">
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-comment me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-user me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-fill-drip me-3 fs-4"></i>
                    <p class="m-0">Color</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-smile-beam me-3 fs-4"></i>
                    <p class="m-0">Emoji</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-pencil-alt me-3 fs-4"></i>
                    <p class="m-0">Nicknames</p>
                  </div>
                </div>
              </div>
              ' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="
                                        width: 38px;
                                        height: 38px;
                                        object-fit: cover;
                                    " />
                            <span class="position-absolute bottom-0 translate-middle p-1 bg-success border border-light rounded-circle" style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">
                                Mike <i class="fas fa-angle-down"></i>
                            </p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 2 -->
    <div class="modal fade" id="singleChat2" tabindex="-1" aria-labelledby="singleChat2Label" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content='
                <div>
                  <div class="popover-body d-flex flex-column p-0">
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-comment me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-user me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-fill-drip me-3 fs-4"></i>
                      <p class="m-0">Color</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-smile-beam me-3 fs-4"></i>
                      <p class="m-0">Emoji</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-pencil-alt me-3 fs-4"></i>
                      <p class="m-0">Nicknames</p>
                    </div>
                  </div>
                </div>
                ' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 38px;
                                        height: 38px;
                                        object-fit: cover;
                                    " />
                            <span class="position-absolute bottom-0 translate-middle p-1 bg-success border border-light rounded-circle" style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">
                                Tuan <i class="fas fa-angle-down"></i>
                            </p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 3 -->
    <div class="modal fade" id="singleChat3" tabindex="-1" aria-labelledby="singleChat3Label" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content='
                    <div>
                      <div class="popover-body d-flex flex-column p-0">
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-comment me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-user me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-fill-drip me-3 fs-4"></i>
                          <p class="m-0">Color</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-smile-beam me-3 fs-4"></i>
                          <p class="m-0">Emoji</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-pencil-alt me-3 fs-4"></i>
                          <p class="m-0">Nicknames</p>
                        </div>
                      </div>
                    </div>
                    ' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 38px;
                                        height: 38px;
                                        object-fit: cover;
                                    " />
                            <span class="position-absolute bottom-0 translate-middle p-1 bg-success border border-light rounded-circle" style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">
                                Jerry <i class="fas fa-angle-down"></i>
                            </p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 4 -->
    <div class="modal fade" id="singleChat4" tabindex="-1" aria-labelledby="singleChat4Label" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content='
                      <div>
                        <div class="popover-body d-flex flex-column p-0">
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-comment me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-user me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <hr>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-fill-drip me-3 fs-4"></i>
                            <p class="m-0">Color</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-smile-beam me-3 fs-4"></i>
                            <p class="m-0">Emoji</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-pencil-alt me-3 fs-4"></i>
                            <p class="m-0">Nicknames</p>
                          </div>
                        </div>
                      </div>
                      ' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 38px;
                                        height: 38px;
                                        object-fit: cover;
                                    " />
                            <span class="position-absolute bottom-0 translate-middle p-1 bg-success border border-light rounded-circle" style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">
                                Tony <i class="fas fa-angle-down"></i>
                            </p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 5 -->
    <div class="modal fade" id="singleChat5" tabindex="-1" aria-labelledby="singleChat5Label" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content='
                          <div>
                            <div class="popover-body d-flex flex-column p-0">
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-comment me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-user me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-fill-drip me-3 fs-4"></i>
                                <p class="m-0">Color</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-smile-beam me-3 fs-4"></i>
                                <p class="m-0">Emoji</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-pencil-alt me-3 fs-4"></i>
                                <p class="m-0">Nicknames</p>
                              </div>
                            </div>
                          </div>
                          ' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                        width: 38px;
                                        height: 38px;
                                        object-fit: cover;
                                    " />
                            <span class="position-absolute bottom-0 translate-middle p-1 bg-success border border-light rounded-circle" style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">
                                Phu <i class="fas fa-angle-down"></i>
                            </p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">
                            Lorem, ipsum dolor
                        </p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2" style="
                                        width: 28px;
                                        height: 28px;
                                        object-fit: cover;
                                    " />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= Main ================= -->
    @yield('content')

    <!-- ================= Chat Icon ================= -->
    <div class="fixed-bottom right-100 p-3" style="z-index: 6; left: initial" type="button" data-bs-toggle="modal" data-bs-target="#newChat">
        <i class="fas fa-edit bg-white rounded-circle p-3 shadow"></i>
    </div>
    <style>
        #scrollBtn {
  display: none;
  position: fixed;
  bottom: 74px;
  right: 17px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#scrollBtn:hover {
  background-color: #555;
}
    </style>
    <button onclick="topFunction()" id="scrollBtn" class="rounded-circle shadow" title="Go to top"><i class="fas fa-arrow-up "></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="{{ asset('forum/feed.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script>
        var panel = document.getElementById('panel');
        // console.log('great');
        // Simple example, see optional options for more configuration.
const pickr = Pickr.create({
    el: '.color-picker',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});
pickr.on('change', (...args) => {
    let color = args[0].toRGBA();
    // console.log(color);
    // $('#textarea').css('background-color', `rgba(${color[0]},${color[1]},${color[2]},${color[3]})`);
    // this.panel.style.backgroundColor = `rgba(${color[0]},${color[1]},${color[2]},${color[3]})`;

});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- <script>
        $(document).on('click', '#saveLike', function(){
        var _post = $(this).data('post');
        var _type = $(this).data('type');
        var vm = $(this);
        // alert(vm);

        $.ajax({
            url: "getLike",
            type: "post",
            dataType: 'json',
            data: {
                post: _post,
                type: _type,
                _token: "{{ csrf_token() }}"
            },
            beforeSend: function(){
                vm.addClass('btn btn-outline-primary');
            },
            success: function (res){
                if(res.bool == true){
                    vm.removeClass('btn btn-outline-primary').addClass('btn btn-primary');
                    vm.removeAttr('id');
                    var _prevCount = $("." + _type + "-count").text();
                    alert(_prevCount);
                    _prevCount++;
                    $("." + _type + "-count").text(_prevCount);
                }
            }
        })
    })
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script>
        $('#textarea').emojioneArea({
            pickerPosition: 'bottom'
        });
    </script>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
        $(document).ready(function() {
            toastr.options = {
                'timeOut': 5000,
                'closeButton': true,
                'progressBar': true,
                'loaderBg': '#9EC600',
                'showHideTransition': 'fade',
            }
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

            $('#logout-item').click(function(){
                $('#logout-form').submit();
            })

            $('#profile-div').click(function(){
                window.location.href = "http://127.0.0.1:8000/profile"
            });
        });

        // Get the button
let mybutton = document.getElementById("scrollBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

    </script>
</body>

</html>