{{--@extends('frontend.layouts.master')--}}
{{--@section('content')--}}
{{--    <div class="container-fluid mt-5 mb-3 pt-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="d-flex justify-content-between">--}}
{{--                        <div class="section-title border-right-0 mb-0" style="width: 180px;">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>--}}
{{--                        </div>--}}
{{--                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0 owl-loaded owl-drag" style="width: calc(100% - 180px); padding-right: 100px;">--}}


{{--                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1686px, 0px, 0px); transition: all 2s ease 0s; width: 5058px;"><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item active" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <!-- News Detail Start -->--}}
{{--                    <div class="position-relative mb-3">--}}
{{--                        <img class="img-fluid w-100" src="{{env('STORAGE_PATH')}}/{{$news->thumbnail}}"  style="object-fit: cover;">--}}
{{--                        <div class="bg-white border border-top-0 p-4">--}}
{{--                            <div class="mb-3">--}}
{{--                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">{{@$news->category->category_name}}</a>--}}
{{--                                <a class="text-body" href="">{{date('M d, Y', strtotime($news->date))}}</a>--}}
{{--                            </div>--}}
{{--                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$news->title}}</h1>--}}
{{--                            <p>--}}
{{--                                {!! $news->details !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">--}}
{{--                                <span>{{@$news->author->name}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>--}}
{{--                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- News Detail End -->--}}

{{--                    <!-- Comment List Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-4">--}}
{{--                            <div class="media mb-4">--}}
{{--                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">--}}
{{--                                <div class="media-body">--}}
{{--                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>--}}
{{--                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore--}}
{{--                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>--}}
{{--                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="media">--}}
{{--                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">--}}
{{--                                <div class="media-body">--}}
{{--                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>--}}
{{--                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore--}}
{{--                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>--}}
{{--                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>--}}
{{--                                    <div class="media mt-4">--}}
{{--                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>--}}
{{--                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor--}}
{{--                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed--}}
{{--                                                eirmod ipsum.</p>--}}
{{--                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Comment List End -->--}}

{{--                    <!-- Comment Form Start -->--}}
{{--                    <!-- Comment Form Start -->--}}

{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-4">--}}
{{--                            @if(auth()->guard('visitor')->check())--}}
{{--                                <form id="commentForm" action="{{route('comment.store')}}">--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <span id="showMessage"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="name">Name *</label>--}}
{{--                                                <input readonly type="text" class="form-control" id="name" value="{{auth()->guard('visitor')->user()->name}}" name="name" required>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="email">Email *</label>--}}
{{--                                                <input readonly type="email" class="form-control" id="email" value="{{auth()->guard('visitor')->user()->email}}" name="email" required>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="message">Message *</label>--}}
{{--                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control" required></textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group mb-0">--}}
{{--                                        <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            @else--}}
{{--                                <a href="{{route('comment.index')}}?url={{request()->fullUrl()}}" class="btn btn-primary">Login</a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <!-- Comment Form End -->--}}
{{--                </div>--}}

{{--                <div class="col-lg-4">--}}
{{--                    <!-- Social Follow Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-3">--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">--}}
{{--                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Fans</span>--}}
{{--                            </a>--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">--}}
{{--                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                            </a>--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">--}}
{{--                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Connects</span>--}}
{{--                            </a>--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">--}}
{{--                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                            </a>--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">--}}
{{--                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Subscribers</span>--}}
{{--                            </a>--}}
{{--                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">--}}
{{--                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Social Follow End -->--}}

{{--                    <!-- Ads Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Ads End -->--}}

{{--                    <!-- Popular News Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-3">--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Popular News End -->--}}

{{--                    <!-- Newsletter Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>--}}
{{--                            <div class="input-group mb-2" style="width: 100%;">--}}
{{--                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <small>Lorem ipsum dolor sit amet elit</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Newsletter End -->--}}

{{--                    <!-- Tags Start -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-3">--}}
{{--                            <div class="d-flex flex-wrap m-n1">--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Tags End -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


{{--@section('script')--}}
{{--    <script>--}}
{{--        $('#commentForm').on('submit', function (e){--}}
{{--            e.preventDefault();--}}
{{--            let reqObject = {--}}
{{--                 // name : $('#name').val(),--}}
{{--                 // email : $('#email').val(),--}}
{{--                message : $('#message').val(),--}}
{{--                _token : '{{csrf_token()}}',--}}
{{--                title : '{{$news->id}}'--}}
{{--            }--}}
{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: $(this).attr('action'),--}}
{{--                data: reqObject,--}}
{{--                success: function(res){--}}
{{--                    if(parseInt(res.status) === 2000){--}}
{{--                        $('#showMessage').text(res.message);--}}
{{--                    }else{--}}
{{--                        alert(res.message);--}}
{{--                    }--}}
{{--                },--}}
{{--                error : function (dsdsd){--}}
{{--                    console.log(dsdsd);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}



































@extends('frontend.layouts.master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0 owl-loaded owl-drag" style="width: calc(100% - 180px); padding-right: 100px;">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1686px, 0px, 0px); transition: all 2s ease 0s; width: 5058px;"><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item active" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div><div class="owl-item cloned" style="width: 843px;"><div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{env('STORAGE_PATH')}}/{{$news->thumbnail}}"  style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">{{@$news->category->category_name}}</a>
                                <a class="text-body" href="">{{date('M d, Y', strtotime($news->date))}}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$news->title}}</h1>
                            <p>
                                {!! $news->details !!}
                            </p>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                <span>{{@$news->author->name}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->



                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">{{count($comments)}} Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            @foreach($comments as $comment)
                                <div class="media mb-4">
                                    <img src="{{asset('frontend/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold" href="">{{@$comment->visitor->name}}</a> <small><i>{{date('M,D,Y',strtotime($comment->created_at))}}</i></small></h6>
                                        {{@$comment->comment}}
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                    <!-- Comment List End -->



                    <!-- Comment Form Start -->

                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            @if(auth()->guard('visitor')->check())
                                <form id="commentForm" action="{{route('comment.store')}}">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <span id="showMessage"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Name *</label>
                                                <input readonly type="text" class="form-control" id="name" value="{{auth()->guard('visitor')->user()->name}}" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input readonly type="email" class="form-control" id="email" value="{{auth()->guard('visitor')->user()->email}}" name="email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message *</label>
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                    </div>
                                </form>
                            @else
                                <a href="{{route('comment.index')}}?url={{request()->fullUrl()}}" class="btn btn-primary">Login</a>
                            @endif
                        </div>
                    </div>


                    <!-- Comment Form End -->
                </div>


                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Share Post</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Twitter</span>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}&title={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on LinkedIn</span>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($news->title) }}%20{{ urlencode(Request::fullUrl()) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #25D366;">
                                <i class="fab fa-whatsapp text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on WhatsApp</span>
                            </a>
                            <a href="https://www.youtube.com/share?url={{ urlencode(Request::fullUrl()) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on YouTube</span>
                            </a>

                            <a href="https://vimeo.com/share?url={{ urlencode(Request::fullUrl()) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Vimeo</span>
                            </a>
                            <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(Request::fullUrl()) }}&media={{ urlencode($news->image) }}&description={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #E60023;" target="_blank">
                                <i class="fab fa-pinterest-p text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Pinterest</span>
                            </a>
                            <a href="https://www.reddit.com/submit?url={{ urlencode(Request::fullUrl()) }}&title={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #FF4500;" target="_blank">
                                <i class="fab fa-reddit-alien text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Reddit</span>
                            </a>
                            <a href="https://www.tumblr.com/share/link?url={{ urlencode(Request::fullUrl()) }}&name={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #35465C;" target="_blank">
                                <i class="fab fa-tumblr text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Tumblr</span>
                            </a>
                            <a href="https://t.me/share/url?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($news->title) }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0088cc;" target="_blank">
                                <i class="fab fa-telegram-plane text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Share on Telegram</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->



                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->



                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular News End -->



                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->



                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $('#commentForm').on('submit', function (e){
            e.preventDefault();
            let reqObject = {
                // name : $('#name').val(),
                // email : $('#email').val(),
                message : $('#message').val(),
                _token : '{{csrf_token()}}',
                title : '{{$news->id}}'
            }
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: reqObject,
                success: function(res){
                    if(parseInt(res.status) === 2000){
                        $('#showMessage').text(res.message);
                    }else{
                        alert(res.message);
                    }
                },
                error : function (dsdsd){
                    console.log(dsdsd);
                }
            });
        });
    </script>
@endsection

















