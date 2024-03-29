<head>
    <script src="assets/js/headerjs.js"></script>
</head>
<script>
$(document).ready(function () {
    var username = sessionStorage.getItem("usernamee");
    $('#displayusername').append('<div value='+username+'>Hello:&nbsp &nbsp'+username+'</div>')
})
</script>
<style media="screen">
.navbar-expand-md .navbar-brand {
    min-width: 13.625rem;
}
.navbar-nav-link{
    margin: 0px !important;
}
#displayusername{
    color: #fff;
    font-size: 16px;
}
.dropdown-toggle::after {
    font-family: icomoon;
    display: inline-block;
    border: 0;
    vertical-align: middle;
    font-size: .6875rem;
    margin-left: .46875rem;
    line-height: 1;
    position: relative;
    content: "";
    font-size: 16px;
    color: #fff;
}
</style>
<img src="global_assets/images/logo_light1.png" alt="" style="width: 100%;height: 100%;">
<div class="navbar navbar-expand-md" style="background-color:#222c31">
    <div class="navbar-brand">
        <a href="index-2.html" class="d-inline-block" style="margin-top: 9px;">
            <img src="assets/images/WM_1.png" alt="" style="height: 26px;width: 74px;">
        </a>
    </div>
    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav" style="margin-bottom: 0px;">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block" style="color:white">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <!-- <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                <i class="icon-git-compare"></i>
                <span class="d-md-none ml-2">Git updates</span>
                <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
            </a> -->

            <div class="dropdown-menu dropdown-content wmin-md-350">
                <!-- <div class="dropdown-content-header">
                <span class="font-weight-semibold">Git updates</span>
                <a href="#" class="text-default"><i class="icon-sync"></i></a>
            </div> -->

            <div class="dropdown-content-body dropdown-scrollable">
                <ul class="media-list">
                    <li class="media">
                        <div class="mr-3">
                            <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                        </div>

                        <div class="media-body">
                            Drop the IE <a href="#">specific hacks</a> for temporal inputs
                            <div class="text-muted font-size-sm">4 minutes ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="mr-3">
                            <a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
                        </div>

                        <div class="media-body">
                            Add full font overrides for popovers and tooltips
                            <div class="text-muted font-size-sm">36 minutes ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="mr-3">
                            <a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
                        </div>

                        <div class="media-body">
                            <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                            <div class="text-muted font-size-sm">2 hours ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="mr-3">
                            <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
                        </div>

                        <div class="media-body">
                            <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                            <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="mr-3">
                            <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                        </div>

                        <div class="media-body">
                            Have Carousel ignore keyboard events
                            <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="dropdown-content-footer bg-light">
                <a href="#" class="text-grey mr-auto">All updates</a>
                <div>
                    <a href="#" class="text-grey" data-popup="tooltip" title="" data-original-title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                    <a href="#" class="text-grey ml-2" data-popup="tooltip" title="" data-original-title="Bug tracker"><i class="icon-bug2"></i></a>
                </div>
            </div>
        </div>
    </li>
</ul>

<!-- <span class="badge bg-success ml-md-3 mr-md-auto">Online</span> -->

<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <!-- <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
        <i class="icon-people"></i>
        <span class="d-md-none ml-2">Users</span>
    </a> -->

    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
        <!-- <div class="dropdown-content-header">
        <span class="font-weight-semibold">Users online</span>
        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
    </div> -->

    <div class="dropdown-content-body dropdown-scrollable">
        <ul class="media-list">
            <!-- <li class="media">
            <div class="mr-3">
            <img src="global_assets/images/demo/users/face18.jpg" width="36" height="36" class="rounded-circle" alt="">
        </div>
        <div class="media-body">
        <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
        <span class="d-block text-muted font-size-sm">Lead web developer</span>
    </div>
    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
</li> -->

<li class="media">
    <div class="mr-3">
        <img src="global_assets/images/demo/users/face24.jpg" width="36" height="36" class="rounded-circle" alt="">
    </div>
    <div class="media-body">
        <a href="#" class="media-title font-weight-semibold">Will Brason</a>
        <span class="d-block text-muted font-size-sm">Marketing manager</span>
    </div>
    <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
</li>

<li class="media">
    <div class="mr-3">
        <img src="global_assets/images/demo/users/face17.jpg" width="36" height="36" class="rounded-circle" alt="">
    </div>
    <div class="media-body">
        <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
        <span class="d-block text-muted font-size-sm">Project manager</span>
    </div>
    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
</li>

<li class="media">
    <div class="mr-3">
        <img src="global_assets/images/demo/users/face19.jpg" width="36" height="36" class="rounded-circle" alt="">
    </div>
    <div class="media-body">
        <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
        <span class="d-block text-muted font-size-sm">Business developer</span>
    </div>
    <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
</li>

<li class="media">
    <div class="mr-3">
        <img src="global_assets/images/demo/users/face16.jpg" width="36" height="36" class="rounded-circle" alt="">
    </div>
    <div class="media-body">
        <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
        <span class="d-block text-muted font-size-sm">UX expert</span>
    </div>
    <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
</li>
</ul>
</div>

<div class="dropdown-content-footer bg-light">
    <a href="#" class="text-grey mr-auto">All users</a>
    <a href="#" class="text-grey"><i class="icon-gear"></i></a>
</div>
</div>
</li>

<li class="nav-item dropdown">
    <!-- <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
    <i class="icon-bubbles4"></i>
    <span class="d-md-none ml-2">Messages</span>
    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
</a> -->

<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
    <div class="dropdown-content-header">
        <span class="font-weight-semibold">Messages</span>
        <a href="#" class="text-default"><i class="icon-compose"></i></a>
    </div>

    <div class="dropdown-content-body dropdown-scrollable">
        <ul class="media-list">
            <li class="media">
                <div class="mr-3 position-relative">
                    <img src="global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>

                <div class="media-body">
                    <div class="media-title">
                        <a href="#">
                            <span class="font-weight-semibold">James Alexander</span>
                            <span class="text-muted float-right font-size-sm">04:58</span>
                        </a>
                    </div>

                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                </div>
            </li>

            <li class="media">
                <div class="mr-3 position-relative">
                    <img src="global_assets/images/demo/users/face3.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>

                <div class="media-body">
                    <div class="media-title">
                        <a href="#">
                            <span class="font-weight-semibold">Margo Baker</span>
                            <span class="text-muted float-right font-size-sm">12:16</span>
                        </a>
                    </div>

                    <span class="text-muted">That was something he was unable to do because...</span>
                </div>
            </li>

            <li class="media">
                <div class="mr-3">
                    <img src="global_assets/images/demo/users/face24.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                    <div class="media-title">
                        <a href="#">
                            <span class="font-weight-semibold"></span>
                            <span class="text-muted float-right font-size-sm">22:48</span>
                        </a>
                    </div>

                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                </div>
            </li>

            <li class="media">
                <div class="mr-3">
                    <img src="global_assets/images/demo/users/face4.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                    <div class="media-title">
                        <a href="#">
                            <span class="font-weight-semibold">Beatrix Diaz</span>
                            <span class="text-muted float-right font-size-sm">Tue</span>
                        </a>
                    </div>

                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                </div>
            </li>

            <li class="media">
                <div class="mr-3">
                    <img src="global_assets/images/demo/users/face25.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                    <div class="media-title">
                        <a href="#">
                            <span class="font-weight-semibold">Richard Vango</span>
                            <span class="text-muted float-right font-size-sm">Mon</span>
                        </a>
                    </div>

                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                </div>
            </li>
        </ul>
    </div>

    <div class="dropdown-content-footer justify-content-center p-0">
        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="" data-original-title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
    </div>
</div>
</li>

</ul>


<!-- <ul style="float: right;width: 100%;">
<li class="nav-item dropdown dropdown-user" style="float: right;list-style-type: none;">
<div class="">
<p  id="displayusername">  </p>
<button id="logoutbtnid" class="logoutbtn"> Logout </button>
</div>
</li>
</ul> -->
<ul style="float: right;width: 100%;">
    <!-- <li class="nav-item " style="list-style-type: none;color:#fff">
        <p style="line-height:50px">Help <span><img src-"assets/images/help.svg" style="width:25px;"></span></p>
    </li> -->
    <!-- <li class="nav-item dropdown dropdown-user" style="float: right;list-style-type: none;">
<p style="line-height:50px">Help <span><img src-"assets/images/help.svg" style="width:25px;"></span></p>
    </li> -->
    <li class="nav-item dropdown dropdown-user" style="float: right;list-style-type: none;">
        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

            <!-- <img src="global_assets/images/people-user.png" width="38" height="38" class="rounded-circle" alt=""> -->

            <span id="displayusername"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" style="background-color:#324148;">
            <!-- <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Create profile</a> -->
            <!-- <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
            <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a> -->
            <button id="logoutbtnid" class="dropdown-item logoutbtn"><i class="icon-switch2"></i> Logout</button>
        </div>
    </li>
</ul>

</div>
</div>
