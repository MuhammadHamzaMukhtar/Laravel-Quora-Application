@extends('feed.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-evenly">
        <!-- ================= Sidebar ================= -->
        <div class="col-12 col-lg-3">
            <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar" style="max-width: 360px; width: 100%; z-index: 4">
                <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                    <!-- top -->
                    <!-- avatar -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">{{Auth::user()->name}}</p>
                            </div>
                        </a>
                    </li>
                    <!-- top 1 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Friends</p>
                            </div>
                        </a>
                    </li>
                    <!-- top 2 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Groups</p>
                                <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"></i>
                                <span class="fs-7 text-primary"> 1 new</span>
                            </div>
                        </a>
                    </li>
                    <!-- top 3 -->
                    <li class="dropdown-item p-1">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Pages</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- top 4 -->
                    <li class="dropdown-item p-1">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/MN44Sm-CTHN.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Marketplace</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- top 5 -->
                    <li class="dropdown-item p-1">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Watch</p>
                                    <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"></i>
                                    <span class="fs-7 text-primary"> 9+ new videos</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- see more -->
                    <li class="p-1" type="button">
                        <div id="accordionFlushExample">
                            <div>
                                <!-- see more button -->
                                <div class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="p-2">
                                        <i class="fas fa-chevron-down rounded-circle p-2" style="background-color: #d5d5d5 !important"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">See More</p>
                                    </div>
                                </div>
                                <!-- content -->
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div>
                                        <!-- item 1 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png" alt="from fb" class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Campus</p>
                                            </div>
                                        </div>
                                        <!-- item 2 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png" alt="from fb" class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Events</p>
                                            </div>
                                        </div>
                                        <!-- item 3 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png" alt="from fb" class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Newsfeed</p>
                                            </div>
                                        </div>
                                        <!-- end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <hr class="m-0" />
                    <!-- shortcuts -->
                    <!-- heading -->
                    <div class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-2
                  text-muted
                  edit-heading
                ">
                        <h4 class="m-0 pointer">Your Shorcuts</h4>
                        <p class="m-0 text-primary me-3 pointer edit-button" type="button" data-bs-toggle="modal" data-bs-target="#shortCutModal">
                            Edit
                        </p>
                        <!-- modal -->
                        <div class="modal fade" id="shortCutModal" tabindex="-1" aria-labelledby="shortCutModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- head -->
                                    <div class="modal-header align-items-center">
                                        <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                                            Edit Your ShortCuts
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body">
                                        <p class="text-muted">
                                            Shortcuts provide quick access to what you do most on
                                            Facebook. Your Shortcuts are sorted automatically, but
                                            you can pin something so it's always shown at the top
                                            or hide it from the list.
                                        </p>
                                        <!-- Search -->
                                        <div class="p-1">
                                            <div class="
                              input-group-text
                              bg-gray
                              border-0
                              rounded-pill
                            " style="min-height: 40px; min-width: 230px">
                                                <i class="fas fa-search me-2 text-muted"></i>
                                                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search your Pages, groups, games, and events" />
                                            </div>
                                        </div>
                                        <!-- short-1 -->
                                        <li class="my-1 p-1">
                                            <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                                                <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                                                    <div class="p-2">
                                                        <img src="https://source.unsplash.com/random/1" alt="from fb" class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                                                    </div>
                                                    <div>
                                                        <p class="m-0">Lorem Ipsum</p>
                                                    </div>
                                                </div>
                                                <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                                                    <option selected value="1">
                                                        Short Automatically
                                                    </option>
                                                    <option value="2">Pin To Top</option>
                                                    <option value="3">Hide</option>
                                                </select>
                                            </div>
                                        </li>
                                        <!-- short-2 -->
                                        <li class="my-1 p-1">
                                            <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                                                <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                                                    <div class="p-2">
                                                        <img src="https://source.unsplash.com/random/2" alt="from fb" class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                                                    </div>
                                                    <div>
                                                        <p class="m-0">Lorem Ipsum</p>
                                                    </div>
                                                </div>
                                                <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                                                    <option selected value="1">
                                                        Short Automatically
                                                    </option>
                                                    <option value="2">Pin To Top</option>
                                                    <option value="3">Hide</option>
                                                </select>
                                            </div>
                                        </li>
                                        <!-- short-3 -->
                                        <li class="my-1 p-1">
                                            <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                                                <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                                                    <div class="p-2">
                                                        <img src="https://source.unsplash.com/random/3" alt="from fb" class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                                                    </div>
                                                    <div>
                                                        <p class="m-0">Lorem Ipsum</p>
                                                    </div>
                                                </div>
                                                <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                                                    <option selected value="1">
                                                        Short Automatically
                                                    </option>
                                                    <option value="2">Pin To Top</option>
                                                    <option value="3">Hide</option>
                                                </select>
                                            </div>
                                        </li>
                                        <!-- end -->
                                    </div>
                                    <!-- footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light text-primary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- short 1 -->
                    <li class="dropdown-item p-1">
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="https://source.unsplash.com/random/1" alt="from fb" class="rounded border border-1 border-secondary" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Lorem Ipsum</p>
                            </div>
                        </a>
                    </li>
                    <!-- short-2 -->
                    <li class="dropdown-item p-1">
                        <a href="" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="https://source.unsplash.com/random/2" alt="from fb" class="rounded border border-1 border-secondary" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Lorem Ipsum</p>
                            </div>
                        </a>
                    </li>
                    <!-- short-3 -->
                    <li class="dropdown-item p-1">
                        <a href="" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                            <div class="p-2">
                                <img src="https://source.unsplash.com/random/3" alt="from fb" class="rounded border border-1 border-secondary" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Lorem Ipsum</p>
                            </div>
                        </a>
                    </li>
                    <!-- see more -->
                    <li class="p-1" type="button">
                        <div id="accordionFlushExample">
                            <div>
                                <!-- see more button -->
                                <div class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#shortModal" aria-expanded="false" aria-controls="shortModal">
                                    <div class="p-2">
                                        <i class="fas fa-chevron-down rounded-circle p-2" style="background-color: #d5d5d5 !important"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">See More</p>
                                    </div>
                                </div>
                                <!-- content -->
                                <div id="shortModal" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div>
                                        <!-- item 1 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://source.unsplash.com/random/4" alt="from fb" class="rounded border border-1 border-secondary" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Campus</p>
                                            </div>
                                        </div>
                                        <!-- item 2 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://source.unsplash.com/random/5" alt="from fb" class="rounded border border-1 border-secondary" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Events</p>
                                            </div>
                                        </div>
                                        <!-- item 3 -->
                                        <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                                            <div class="p-2">
                                                <img src="https://source.unsplash.com/random/6" alt="from fb" class="rounded border border-1 border-secondary" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                            </div>
                                            <div>
                                                <p class="m-0">Newsfeed</p>
                                            </div>
                                        </div>
                                        <!-- end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- terms -->
                <div class="p-2 mt-5">
                    <p class="text-muted fs-7">
                        Privacy &#8226; Terms &#8226; Advertising &#8226; Ad Choices
                        &#8226; Cookies &#8226; Flexbook © 2021
                    </p>
                </div>
            </div>
        </div>
        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-6 pb-5">
            <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px; max-width: 680px">
                <!-- stories -->
                <div class="mt-5 d-flex justify-content-between position-relative">
                    <!-- s 1 -->
                    <div class="mx-1 bg-white rounded story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/collection/happy-people" class="card-img-top" alt="story posts" style="min-height: 125px; object-fit: cover" />
                        <div class="
                    d-flex
                    align-items-center
                    justify-content-center
                    position-relative
                  " style="min-height: 65px">
                            <p class="mb-0 text-center fs-7 fw-bold">Create Story</p>
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <i class="
                        fas
                        fa-plus-circle
                        fs-3
                        text-primary
                        bg-white
                        p-1
                        rounded-circle
                      "></i>
                            </div>
                        </div>
                    </div>
                    <!-- s 2 -->
                    <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/random/2" class="card-img-top rounded" alt="story posts" style="min-height: 190px; object-fit: cover" />
                    </div>
                    <!-- s 3 -->
                    <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/random/3" class="card-img-top rounded" alt="story posts" style="min-height: 190px; object-fit: cover" />
                    </div>
                    <!-- s 4 -->
                    <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/random/4" class="card-img-top rounded" alt="story posts" style="min-height: 190px; object-fit: cover" />
                    </div>
                    <!-- s 5 -->
                    <div class="d-none d-lg-block rounded mx-1 story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/random/5" class="card-img-top rounded" alt="story posts" style="min-height: 190px; object-fit: cover" />
                    </div>
                    <!-- s 6 -->
                    <div class="d-none d-lg-block rounded mx-1 story" type="button" style="width: 6em; height: 190px">
                        <img src="https://source.unsplash.com/random/6" class="card-img-top rounded" alt="story posts" style="min-height: 190px; object-fit: cover" />
                    </div>
                    <!-- next icon -->
                    <div class="
                  position-absolute
                  top-50
                  start-100
                  translate-middle
                  pointer
                  d-none d-lg-block
                ">
                        <i class="
                    fas
                    fa-arrow-right
                    p-3
                    border
                    text-muted
                    bg-white
                    rounded-circle
                  "></i>
                    </div>
                </div>
                <!-- create post -->
                <div class="bg-white p-3 mt-3 rounded border shadow">
                    <!-- avatar -->
                    <div class="d-flex" type="button">
                        <div class="p-1">
                            <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                        </div>
                        <input type="text" class="form-control rounded-pill border-0 bg-gray pointer" disabled placeholder="What's on your mind, {{Auth::user()->name}}?" data-bs-toggle="modal" data-bs-target="#createModal" />
                    </div>
                    <!-- create modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header align-items-center">
                                    <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                                        Create Post
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <div class="modal-body">
                                    <div class="my-1 p-1">
                                        <div class="d-flex flex-column">
                                            <!-- name -->
                                            <div class="d-flex align-items-center">
                                                <div class="p-2">
                                                    <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="from fb" class="rounded-circle" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                </div>
                                                <div>
                                                    <p class="m-0 fw-bold">{{Auth::user()->name}}</p>
                                                    <select class="form-select border-0 bg-gray w-75 fs-7" aria-label="Default select example">
                                                        <option selected value="1">Public</option>
                                                        <option value="2">Pin To Top</option>
                                                        <option value="3">Hide</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <form action="{{route('feed.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <!-- text -->
                                                <div>
                                                    <textarea name="description" cols="30" rows="5" class="form-control border-0"></textarea>
                                                </div>
                                                <!-- emoji  -->
                                                <div class="d-flex            justify-content-between                            align-items-center">
                                                    <img src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png" class="pointer" alt="fb text" style="width: 30px; height: 30px; object-fit: cover;" />
                                                    <i class="far fa-laugh-wink fs-5 text-muted pointer"></i>
                                                </div>
                                                <!-- options -->
                                                <div class="d-flex                            justify-content-between border border-1 border-light rounded p-3 mt-3">
                                                    <p class="m-0" id="display_pic">Add to your post</p>
                                                    <div>
                                                        <label for="pic_file">
                                                            <i class="fas fa-images fs-5 text-success pointer mx-1"></i>
                                                        </label>
                                                        <input type="file" name="image" id="pic_file">
                                                        <i class="fas fa-user-check fs-5 text-primary pointer
                                  mx-1
                                "></i>
                                                        <i class="
                                  far
                                  fa-smile
                                  fs-5
                                  text-warning
                                  pointer
                                  mx-1
                                "></i>
                                                        <i class="
                                  fas
                                  fa-map-marker-alt
                                  fs-5
                                  text-info
                                  pointer
                                  mx-1
                                "></i>
                                                        <i class="
                                  fas
                                  fa-microphone
                                  fs-5
                                  text-danger
                                  pointer
                                  mx-1
                                "></i>
                                                        <i class="
                                  fas
                                  fa-ellipsis-h
                                  fs-5
                                  text-muted
                                  pointer
                                  mx-1
                                "></i>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <!-- end -->
                                </div>
                                <!-- footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Post
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <!-- actions -->
                    <div class="d-flex flex-column flex-lg-row mt-3">
                        <!-- a 1 -->
                        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                            <i class="fas fa-video me-2 text-danger"></i>
                            <p class="m-0 text-muted">Live Video</p>
                        </div>
                        <!-- a 2 -->
                        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                            <i class="fas fa-photo-video me-2 text-success"></i>
                            <p class="m-0 text-muted">Photo/Video</p>
                        </div>
                        <!-- a 3 -->
                        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                            <i class="fas fa-smile me-2 text-warning"></i>
                            <p class="m-0 text-muted">Feeling/Activity</p>
                        </div>
                    </div>
                </div>
                <!-- create room -->
                <div class="
                bg-white
                p-3
                mt-3
                rounded
                border
                shadow
                d-flex
                justify-content-between
                position-relative
              ">
                    <!-- btn -->
                    <div>
                        <button class="btn rounded-pill btn-info">
                            <i class="fas fa-video me-3"></i>Create Room
                        </button>
                    </div>
                    <!-- slider mobile -->
                    <div class="d-xxl-none">
                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                        <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                        <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                    </div>
                    <!-- slider desktop -->
                    <div class="d-none d-xxl-block" style="max-width: 450px">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/6" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/7" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/8" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/9" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div class="carousel-item">
                                    <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/6" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/7" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/8" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                    <img src="https://source.unsplash.com/random/9" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider btn -->
                    <div class="
                  position-absolute
                  start-0
                  top-50
                  translate-middle
                  d-none d-xxl-block
                " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <div class="
                    p-2
                    bg-white
                    border
                    rounded-circle
                    d-flex
                    justify-content-center
                    align-items-center
                    pointer
                    story
                  " style="width: 30px; height: 30px">
                            <i class="fas fa-chevron-left text-muted"></i>
                        </div>
                    </div>

                    <div class="
                  position-absolute
                  start-100
                  top-50
                  translate-middle
                  d-none d-xxl-block
                " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <div class="
                    p-2
                    bg-white
                    border
                    rounded-circle
                    d-flex
                    justify-content-center
                    align-items-center
                    pointer
                    story
                  " style="width: 30px; height: 30px">
                            <i class="fas fa-chevron-right text-muted"></i>
                        </div>
                    </div>
                </div>
                <!-- posts -->
                @foreach($posts as $post)
                <div class="bg-white p-4 rounded shadow mt-3">
                    <!-- author -->
                    <div class="d-flex justify-content-between">
                        <!-- avatar -->
                        <div class="d-flex">
                            <img src="{{ asset('images/'.$post->user->profile_pic) }}" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <div>
                                <p class="m-0 fw-bold">{{$post->user->name}}</p>
                                <span class="text-muted fs-7">{{$post->updated_at->diffForHumans()}}</span>
                            </div>
                        </div>
                        @if($post->user_id === Auth::user()->id)
                        <div>
                            <!-- edit -->
                            <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <!-- edit menu -->
                            <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
                                <li class="d-flex align-items-center">
                                    <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#"  data-toggle="modal" data-target="#edit{{$post->id}}">
                                        Edit Post</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
                                        Delete Post</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    <!-- post content -->
                    <div class="mt-3">
                        <!-- content -->
                        <div>
                            <p>
                                {{$post->description}}
                            </p>
                            @if($post->pic !== 'NULL')
                            <!-- <img src="{{asset('images/'.$post->pic)}}" alt="post image" class="img-fluid rounded" /> -->
                            <embed src="{{ asset('images/'.$post->pic) }}" width="600" height="500" alt="pdf" />
                            @endif
                        </div>
                        <div class="post__comment mt-3 position-relative">
                            <!-- likes -->
                            <div class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    " style="height: 50px; z-index: 5">
                                <div class="me-2">
                                    <i class="text-primary fas fa-thumbs-up"></i>
                                    <!-- <i class="text-danger fab fa-gratipay"></i>
                                    <i class="text-warning fas fa-grin-squint"></i> -->
                                </div>
                                <p class="m-0 text-muted fs-7">{{$post->is_liked}} likes</p>
                            </div>
                            <!-- comments start-->
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item border-0">
                                    <!-- comment collapse -->
                                    <h2 class="accordion-header" id="headingTwo">
                                        <div class="accordion-button collapsed
                                            pointer
                                            d-flex
                                            justify-content-end" data-bs-toggle="collapse" data-bs-target="#collapsePost1{{$post->id}}" aria-expanded="false" aria-controls="collapsePost1">
                                            <p class="m-0">{{$post->total_comments}} Comments</p>
                                        </div>
                                    </h2>
                                    <hr />
                                    <!-- comment & like bar -->
                                    <div class="d-flex justify-content-around">
                                        <label class="
                                            dropdown-item
                                            rounded
                                            d-flex
                                            justify-content-center
                                            align-items-center
                                            pointer
                                            text-muted
                                            p-1
                                        ">

                                            <i class="fas fa-thumbs-up me-3 btn btn-outline-primary form-control"></i>

                                            <input type="checkbox" name="" data-id="{{$post->id}}" class="toggle" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$post->is_liked == 1 ? 'checked'
                                            : ''}} hidden>
                                            <!-- <input type="text" name="" class="like" value="{{$post->id}}">
                                            <p class="m-0">Like</p> -->
                                        </label>
                                        <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1{{$post->id}}" aria-expanded="false" aria-controls="collapsePost1">
                                            <i class="fas fa-comment-alt me-3 btn btn-outline-warning  form-control"></i>
                                            <!-- <p class="m-0">Comment</p> -->
                                        </div>
                                    </div>
                                    <!-- comment expand -->
                                    <div id="collapsePost1{{$post->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <hr />
                                        <div class="accordion-body">
                                            <!-- comment 1 -->
                                            @foreach($comments as $comment)
                                            @if($comment->feed_id === $post->id)
                                            <div class="d-flex align-items-center my-1">
                                                <!-- avatar -->
                                                <img src="{{asset('images/'.$comment->user->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                    <!-- comment menu of author -->
                                                    @if($comment->user_id === Auth::user()->id)
                                                    <div class="d-flex justify-content-end">
                                                        <!-- icon -->
                                                        <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                        <!-- menu -->
                                                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                                            <li class="d-flex align-items-center">
                                                                <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">
                                                                    Edit Comment</a>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                                                    Delete Comment</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex">
                                                        <p class="fw-bold m-0 me-2">{{$comment->user->name}}</p>
                                                        <span class="text-muted fs-7">{{$comment->updated_at->diffForHumans()}}</span>
                                                    </div>
                                                    <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                        {{$comment->comment_text}}
                                                    </p>
                                                    <!-- comment & like bar -->
                                                    <div class="d-flex justify-content-around">
                                                        <label class="
                                            dropdown-item
                                            rounded
                                            d-flex
                                            justify-content-center
                                            align-items-center
                                            pointer
                                            text-muted
                                            p-1 
                                        ">
                                                            <i class="fas fa-thumbs-up me-3"></i>
                                                            <input type="checkbox" name="" data-id="{{$comment->id}}" class="comment_toggle" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$comment->is_liked == 1 ? 'checked' : ''}} hidden><span class="text-muted fs-7">{{$comment->is_liked}}</span>

                                                            <!-- <input type="text" name="" class="like" value="{{$post->id}}">
                                            <p class="m-0">Like</p> -->
                                                        </label>
                                                        <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost2" aria-expanded="false" aria-controls="collapsePost2">
                                                            <i class="fas fa-comment-alt me-3"></i>
                                                            <p class="m-0">Reply</p>
                                                        </div>
                                                    </div>

                                                    <!-- comment expand -->
                                                    <div id="collapsePost2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body1">
                                                            @foreach($comment->children as $child)
                                                            <div class="d-flex align-items-center my-1">
                                                                <!-- avatar -->
                                                                <img src="{{asset('images/'.$child->user->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                                                <!-- comment text -->
                                                                <div class="p-3 rounded comment__input w-100">
                                                                    <!-- comment menu of author -->
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold m-0 me-2">{{$child->user->name}}</p>
                                                                        <span class="text-muted fs-7">{{$child->updated_at->diffForHumans()}}</span>
                                                                    </div>
                                                                    <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                                        {{$child->comment_text}}
                                                                    </p>
                                                                    <!-- comment & like bar -->
                                                                    <div class="d-flex justify-content-around">
                                                                        <label class="
                                            dropdown-item
                                            rounded
                                            d-flex
                                            justify-content-center
                                            align-items-center
                                            pointer
                                            text-muted
                                            p-1 
                                        ">
                                                                            <i class="fas fa-thumbs-up me-3"></i>
                                                                            <input type="checkbox" name="" data-id="{{$child->id}}" class="child_comment_toggle" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$child->is_liked == 1 ? 'checked' : ''}} hidden><span class="text-muted fs-7">{{$child->is_liked}}</span>

                                                                            <!-- <input type="text" name="" class="like" value="{{$post->id}}">
                                            <p class="m-0">Like</p> -->
                                                                        </label>
                                                                        <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost3" aria-expanded="false" aria-controls="collapsePost3">
                                                                            <i class="fas fa-comment-alt me-3"></i>
                                                                            <p class="m-0">Reply</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- comment expand -->
                                                                    <div id="collapsePost3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                                                        <div class="accordion-body2">
                                                                            <form action="{{route('addReply', ['comment_id' => $comment->id, 'post_id' => $post->id])}}" method="POST" class="d-flex my-1">
                                                                                @csrf
                                                                                <!-- avatar -->
                                                                                <div>
                                                                                    <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                                                </div>
                                                                                <!-- input -->
                                                                                <input type="text" name="reply" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                                                <button type="submit" class="bg-dark rounded-pill ms-2"><i class="fas fa-chevron-right text-primary"></i></button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                            <form action="{{route('addReply', ['comment_id' => $comment->id, 'post_id' => $post->id])}}" method="POST" class="d-flex my-1">
                                                                @csrf
                                                                <!-- avatar -->
                                                                <div>
                                                                    <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                                </div>
                                                                <!-- input -->
                                                                <input type="text" name="reply" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                                <button type="submit" class="bg-dark rounded-pill ms-2"><i class="fas fa-chevron-right text-primary"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            <!-- create comment -->
                                            <form action="{{route('comments_store', $post->id)}}" method="POST" class="d-flex my-1">
                                                @csrf
                                                <!-- avatar -->
                                                <div>
                                                    <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                </div>
                                                <!-- input -->
                                                <input type="text" name="comment" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                <button type="submit" class="bg-dark rounded-pill ms-2"><i class="fas fa-chevron-right text-primary"></i></button>
                                            </form>
                                            <!-- end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="edit{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('feed.update', $post->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="" id="" value="{{$post->id}}">
                                    <p>Edit Description : <input type="text" class="form-control" value="{{$post->description}}" name="e_description">
                                    </p>
                                    <p>Edit Image : <input type="file" class="form-control" value="" name="e_pic">
                                    </p>
                                    @if(pathinfo($post->pic, PATHINFO_EXTENSION) == 'pdf')
                                    <p>
                                        <embed src="{{asset('images/'.$post->pic)}}" type="" width="200px" height="150px">
                                    </p>
                                    @else
                                    <p>
                                        <img src="{{asset('images/'.$post->pic)}}" alt="" srcset="" width="200px" height="150px">
                                    </p>
                                    @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <p>
                                    <input class="btn btn-info" type="submit" value="Update Post" name='edit'>
                                </p>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- ================= Chatbar ================= -->
        <div class="col-12 col-lg-3">
            <div class="
              d-none d-xxl-block
              h-100
              fixed-top
              end-0
              overflow-hidden
              scrollbar
            " style="
              max-width: 360px;
              width: 100%;
              z-index: 4;
              padding-top: 56px;
              left: initial !important;
            ">
                <div class="p-3 mt-4">
                    <!-- sponsors -->
                    <h5 class="text-muted">Sponsored</h5>
                    <!-- s 1 -->
                    <li class="dropdown-item my-2 d-flex justify-content-between">
                        <!-- img -->
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                            <img src="https://source.unsplash.com/random/1" alt="ads" style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                            <div>
                                <p class="m-0">Lorem ipsum</p>
                                <span class="text-muted fs-7">loremipsum.com</span>
                            </div>
                        </a>
                        <!-- icon -->
                        <div class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  " type="button" style="width: 38px; height: 38px">
                            <i class="fas fa-ellipsis-h text-muted p-2" data-bs-toggle="dropdown"></i>
                            <!-- menu -->
                            <ul class="dropdown-menu">
                                <!-- item 1 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="far fa-window-close"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Hide Ad</p>
                                            <span class="text-muted fs-7">Never see this add again.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- item 2 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Report Ad</p>
                                            <span class="text-muted fs-7">Tell us a problem with this add.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- item 3 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="fas fa-info-circle"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Why am I seeing this ad?</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- s 2 -->
                    <li class="dropdown-item my-2 d-flex justify-content-between">
                        <!-- img -->
                        <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                            <img src="https://source.unsplash.com/random/2" alt="ads" style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                            <div>
                                <p class="m-0">Lorem ipsum</p>
                                <span class="text-muted fs-7">loremipsum.com</span>
                            </div>
                        </a>
                        <!-- icon -->
                        <div class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  " type="button" style="width: 38px; height: 38px">
                            <i class="fas fa-ellipsis-h text-muted p-2" data-bs-toggle="dropdown"></i>
                            <!-- menu -->
                            <ul class="dropdown-menu">
                                <!-- item 1 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="far fa-window-close"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Hide Ad</p>
                                            <span class="text-muted fs-7">Never see this add again.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- item 2 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Report Ad</p>
                                            <span class="text-muted fs-7">Tell us a problem with this add.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- item 3 -->
                                <li class="dropdown-item">
                                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                                        <i class="fas fa-info-circle"></i>
                                        <div class="ms-3">
                                            <p class="m-0">Why am I seeing this ad?</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- contacts -->
                    <hr class="m-0" />
                    <div class="my-3 d-flex justify-content-between align-items-center">
                        <p class="text-muted fs-5 m-0">Contacts</p>
                        <!-- icons -->
                        <div class="text-muted">
                            <!-- video room -->
                            <i class="fas fa-video mx-2 pointer" type="button" data-bs-toggle="modal" data-bs-target="#videoRoomD"></i>
                            <!-- video room modal -->
                            <div class="modal fade" id="videoRoomD" tabindex="-1" aria-labelledby="videoRoomDLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark">
                                        <!-- header -->
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- body -->
                                        <div class="
                            modal-body
                            d-flex
                            flex-column
                            align-items-center
                            justify-content-center
                          " style="min-height: 400px">
                                            <i class="fas fa-video fs-0"></i>
                                            <h3 class="text-white">Schedule A Room For Later</h3>
                                            <p class="text-white text-center w-50 mx-auto">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Ut deserunt alias laudantium itaque eius enim
                                                natus culpa eligendi consectetur maiores!
                                            </p>
                                            <button class="btn btn-lg btn-primary rounded-pill">
                                                Schedule Room
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new chat -->
                            <i class="fas fa-search mx-2 pointer" type="button" data-bs-toggle="modal" data-bs-target="#newChat"></i>
                            <!-- chat settings -->
                            <i class="fas fa-ellipsis-h pointer text-muted mx-2" type="button" data-bs-toggle="dropdown"></i>
                            <!-- chat setting dd -->
                            <ul class="dropdown-menu shadow" style="width: 18em">
                                <!-- title -->
                                <div class="p-2">
                                    <h5>Chat Settings</h5>
                                    <span class="text-muted fs-7">Customize your Messenger experience.</span>
                                </div>
                                <hr />
                                <!-- incoming sound -->
                                <li>
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-phone-alt me-3"></i>
                                            <p class="m-0">Incoming call sounds</p>
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
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-volume-off me-4 fs-4"></i>
                                            <p class="m-0">Message sounds</p>
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
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-spinner me-3"></i>
                                            <p class="m-0">Pop-up new messages</p>
                                        </div>
                                        <!-- toggle -->
                                        <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        </div>
                                    </div>
                                    <span class="ms-5 text-muted fs-7">Automatically open new messages.</span>
                                </li>
                                <hr class="m-0" />
                                <!-- item 1 -->
                                <li>
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-toggle-off me-3"></i>
                                            <p class="m-0">Turn Off Active Status</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- item 2 -->
                                <li>
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-comment-alt me-3"></i>
                                            <p class="m-0">Message Request</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- item 3 -->
                                <li>
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-share-square me-3"></i>
                                            <p class="m-0">Message delivery settings</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- item 4 -->
                                <li>
                                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                                        <!-- icon -->
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-shield-alt me-3"></i>
                                            <p class="m-0">Block settings</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- friend 1 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Mike</p>
                        </div>
                    </li>
                    <!-- friend 2 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tuan</p>
                        </div>
                    </li>
                    <!-- friend 3 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Jerry</p>
                        </div>
                    </li>
                    <!-- friend 4 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tony</p>
                        </div>
                    </li>
                    <!-- friend 5 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Phu</p>
                        </div>
                    </li>
                    <!-- friend 6 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                                  <div>
                                    <div class="popover-body d-flex p-2">
                                      <div>
                                        <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                                      </div>
                                      <div >
                                        <h5>Mike</h5>
                                        <div class="d-flex">
                                          <i class="fas fa-user-friends m-1 text-muted"></i>
                                          <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                        </div>
                                        <div class="d-flex">
                                        <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                        <p>Studies at MIT</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Mike</p>
                        </div>
                    </li>
                    <!-- friend 7 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tuan</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tuan</p>
                        </div>
                    </li>
                    <!-- friend 8 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                                            <div>
                                              <div class="popover-body d-flex p-2">
                                                <div>
                                                  <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                                </div>
                                                <div >
                                                  <h5>Jerry</h5>
                                                  <div class="d-flex">
                                                    <i class="fas fa-user-friends m-1 text-muted"></i>
                                                    <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                                  </div>
                                                  <div class="d-flex">
                                                  <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                                  <p>Studies at MIT</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Jerry</p>
                        </div>
                    </li>
                    <!-- friend 9 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tony</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tony</p>
                        </div>
                    </li>
                    <!-- friend 10 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                                    <div>
                                      <div class="popover-body d-flex p-2">
                                        <div>
                                          <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                                        </div>
                                        <div >
                                          <h5>Phu</h5>
                                          <div class="d-flex">
                                            <i class="fas fa-user-friends m-1 text-muted"></i>
                                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                          </div>
                                          <div class="d-flex">
                                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                          <p>Studies at MIT</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Phu</p>
                        </div>
                    </li>
                    <!-- friend 11 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Mike</p>
                        </div>
                    </li>
                    <!-- friend 12 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tuan</p>
                        </div>
                    </li>
                    <!-- friend 13 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Jerry</p>
                        </div>
                    </li>
                    <!-- friend 14 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Tony</p>
                        </div>
                    </li>
                    <!-- friend 15 -->
                    <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
                        <!-- avatar -->
                        <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    ' data-bs-html="true">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                                    <span class="visually-hidden"></span>
                                </span>
                            </div>
                            <p class="m-0">Phu</p>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- <script>
    $(document).ready(function() {
        $('.like').hide();

        $('.like').click(function() {
            var feed_id = $(this).val();
            // alert(feed_id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/getLike',
                data: {
                    'feed_id': feed_id
                },
                success: function(data) {
                    console.log(data);
                },
            });
        })


    })
</script> -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#pic_file').hide();

        $('.fa-thumbs-up').click(function() {
            $(this).removeClass('btn-outline-primary');
            $(this).addClass('btn-primary');
        })

        $(function() {
            // alert('hey');

            $('.toggle').change(function() {
                // alert('hey');

                var status = $(this).prop('checked') == true ? 1 : 0;
                var feed_id = $(this).data('id');
                // alert
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/getLike',
                    data: {
                        'status': status,
                        'feed_id': feed_id
                    },
                    success: function(data) {
                        console.log('Success')
                    }
                })
            })
        })

        $(function() {
            // alert('hey');

            $('.comment_toggle').change(function() {
                // alert('hey');

                var status = $(this).prop('checked') == true ? 1 : 0;
                var comment_id = $(this).data('id');
                // alert
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/getComment',
                    data: {
                        'status': status,
                        'comment_id': comment_id
                    },
                    success: function(data) {
                        console.log('Success')
                    }
                })
            })
        })

        $(function() {
            // alert('hey');

            $('.child_comment_toggle').change(function() {
                // alert('hey');

                var status = $(this).prop('checked') == true ? 1 : 0;
                var child_comment_id = $(this).data('id');
                // alert(child_comment_id);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/getChildComment',
                    data: {
                        'status': status,
                        'child_comment_id': child_comment_id
                    },
                    success: function(data) {
                        console.log('Success')
                    }
                })
            })
        })
    })
</script>
@endsection