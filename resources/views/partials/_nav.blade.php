<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Smile Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class={{ Request::is('/') ? 'active' : '' }}><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class={{ Request::is('blog') ? 'active' : '' }}><a href="/blog">Blog <span class="sr-only">(current)</span></a></li>
                <li class={{ Request::is('about') ? 'active' : '' }}><a href="/about">About</a></li>
                <li class={{ Request::is('contact') ? 'active' : '' }}><a href="/contact">Contact</a></li>

            </ul>

         <!--   <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('posts.index')}}">Posts</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul> -->
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action"><a href="{{route('posts.index')}}">Posts</a></li>
                                <li class="list-group-item list-group-item-action"><a href="{{route('categories.index')}}">Categories</a></li>
                                <li class="list-group-item list-group-item-action"><a href="{{route('tags.index')}}">Tags</a></li>
                                <li class="list-group-item list-group-item-action">
                                    <a class="dropdown-item" href="{{ route('posts.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>