<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">主页<span class="sr-only">(current)</span></a></li>
                <li><a href="#">帮助</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">后台管理<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('ShopCategory.index')}}">商铺分类管理</a></li>
                        <li><a href="{{route('Shop.index')}}">商铺管理</a></li>
                        <li><a href="{{route('activity.index')}}">活动管理</a></li>
                    </ul>
                </li>
            </ul>
            {{--<form method="get" class="navbar-form navbar-right">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" name="keyword" placeholder="">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-default">搜索</button>--}}
            {{--</form>--}}
            <ul class="nav navbar-nav navbar-right">

                @guest('admin')
                    <li><a href="{{route('admins.login')}}">登录</a></li>
                    <li class="dropdown">
                        <a href="{{route('admins.reg')}}">注册</a>
                    </li>
                @endguest
                @auth('admin')
                    <li class="dropdown">
                        {{--<img src="" alt="">--}}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admins.edit')}}">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('admins.logout')}}">注销</a></li>
                        </ul>
                    </li>
                @endauth


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>