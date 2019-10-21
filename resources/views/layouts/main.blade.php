<!DOCTYPE HTML>
<html>
<head>
    <title>trang chủ</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/fontawesome.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('backend/css/all.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('backend/js/main.js')}}}" type="text/css"></script>
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
</head>
<body>

<div class="header">
    <a href="#" id="menu-toggle" class="">
        <i class="fa fa-bars"></i></a>
        <span>Dashboard</span>
    </a>
</div>
<div class="main">
    <div id="sidenav">
        <div class="main-header">
            <div class="logo">
                <a href="#">Dashboard</a>
                <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
            </div>
            <aside class="menu">
                <ul>
                    <div class="user-panel">
                        <div class="float-left image">
                            <img src="{{asset('backend/image/anhdaidien.jpg')}}" class="rounded-circle" width="50px" style="margin: 0 24px;">
                        </div>
                        <div class=" info">
                            <p style="color: #ffffff;font-weight: bold; margin-bottom: 0px;">Admin</p>
                            <i class="fa fa-circle text-success">Online</i>
                        </div>
                    </div>
                    <div id="sidle-menu">
                        <ul>
                            <li class="active"><a href="#"><i class="fas fa-home"> Home</i></a></li>
                            <li><a href="#"><i class="fas fa-user-tie"> Administration</i></a>
                                <ul class="submenu">
                                    <li><a href="#">Decentralization</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Function</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-user"> My Account</i></a>
                                    <ul class="submenu">
                                        <li><a href="#"><i class="fab fa-product-hunt"> Product portfolio</i><i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"> Fashion</i></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"> Electronic device</i></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-running"> Sport</i></a></li>
                                        </ul>
                                        </li>
                                            <li><a href="#"><i class="fas fa-comment-alt"> Comments</i></a></li>
                                            <li><a href="#" ><i class="fa fa-shopping-cart"> Categories</i></a></li>
                                            <li><a href="#"><i class="fas fa-newspaper"> Create New Post</i></a></li>
                                    </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"> Category</i></a>
                                <ul class="submenu">
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Galleries</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Links</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-address-card"> Contact</i></a></li>
                            <li><a href="#"><i class="fas fa-truck"> Sale</i></a>
                                <ul class="submenu">
                                    <li><a href="#">New Sales</a></li>
                                    <li><a href="#">Expired Sales</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"> Blog</i></a></li>
                            <li><a href="#" class="logout"><i class="fas fa-user-friends">User</i></a>
                                <ul class="submenu">
                                    <li><a href="#">All User</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </ul>
            </aside>
        </div>
    </div>
    <div class="content-web">
            <nav class="navbar navbar-expand-lg navbar-light py-0" style="background-color: #3c8dbc;">
                <div class="openNav">
                    <a href="#" class="nav-icon pull-right"><i class="fa fa-bars" style="color: white;background: rgba(0,0,0,0.1);padding: 19px 20px;"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby = "navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img class="rounded-circle" src="{{asset('backend/image/anhdaidien.jpg')}}" style="width: 30px;" alt="user-image" > <span class="pl-2">American</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <a href="#">
                                <img src="{{asset('backend/image/anhdaidien.jpg')}}" alt="user-image" style="padding: 0px 5px;">
                                <p style="text-align: center;color: #343a40;margin-bottom: 0px;">American-General Shop</p>
                                <small style="padding: 40px;color: #343a40; ">Member since no. 2019</small>
                            </a>
                        </li>
                        <li class="user-body" style="text-align: center;height: 40px; background-color: #f9f9f9; padding: 10px; margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#" style="padding-left: 5px; color: #343a40;">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#" style="padding: 38px; color: #343a40;">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#" style=" color: #343a40;">Friends</a>
                                </div>
                            </div>
                        </li>
                        <li class="user-footer" >
                            <div class="fa-pull-left">
                                <a href="#" class="btn btn-default btn-light">Profile</a>
                            </div>
                            <div class="fa-pull-right">
                                <a href="#" class="btn btn-default btn-light">Sign out</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="pl-3"><a href="#" ><i class="fa fa-cogs" aria-hidden="true"></i></a></div>

            </nav>
    </div>
</div>
<footer class="main-footer">
    <div class="pull-left hidden-xs">
{{--        <p>Nguyenmy97bn@gmail.com</p>--}}
    </div>
</footer>

</body>
</html>
