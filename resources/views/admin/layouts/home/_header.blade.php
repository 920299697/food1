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
                       aria-expanded="false">客户端<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('menuCategory.index')}}">菜品分类管理</a></li>
                        <li><a href="{{route('menu.index')}}">菜品管理</a></li>
                        {{--<li><a href="{{route('menu.index')}}">活动管理</a></li>--}}
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form method="get" class="navbar-form navbar-left">
                    <div class="form-group">
                        菜品名称：
                        <input type="text" class="form-control" name="keyword" size="4" placeholder="菜品名称">
                        &nbsp;
                        价格区间：
                        <input type="text" class="form-control" name="keyword" size="1" placeholder="元"> ---
                        <input type="text" class="form-control" name="keyword" size="1" placeholder="元">
                    </div>
                    &nbsp;
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>

                @guest
                    <li><a href="{{route('Users.login')}}">登录</a></li>
                    <li class="dropdown">
                        <a href="{{route('Users.reg')}}">注册</a>
                    </li>
                @endguest
                @auth
                    <li class="dropdown">
                        {{--<img src="" alt="">--}}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('Users.index')}}">个人中心</a></li>
                            <li><a href="#">我的店铺</a></li>
                            <li><a href="{{route('Users.edit')}}">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('Users.logout')}}">注销</a></li>
                        </ul>
                    </li>
                @endauth


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>