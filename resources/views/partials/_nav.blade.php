

<nav class="navbar navbar-default">
            <div class="container">

                <!--LOGO-->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a href="#" class="navbar-brand">Gurpreet Singh</a>
                </div>

                <!--MENU-->
                <div class="collapse navbar-collapse" id="mainNav">
                    <div class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
                    </div>

                    <!--right side-->
                    <div class="nav navbar-nav navbar-right">
                         <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::is('posts')? "active" : "" }}"><a href="/posts">Posts</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </div>
                    
                </div>
            </div>
        </nav>