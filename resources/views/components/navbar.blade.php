
                  <!-- menu start -->
                  <div class="menu_side">
                    <div id="navbar_menu">
                      <ul class="first-ul">
                        <li> <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li><a  href="{{ route('about')}}">About</a></li>
                        <li> <a href="{{ route('service')}}">Service</a>
                        </li>
                        <li> <a href="{{ route('posts.index')}}">Blog</a>
                        </li>
                        <li> <a href="{{ route('shop')}}">Shop</a>
                        </li>
                        <li> <a href="{{ route('contact')}}">Contact</a>
                        </li>
                        {{-- <li> <a href="{{ route('login')}}">login</a>
                        </li>
                        <li> <a href="{{ route('register')}}">register</a>
                        </li> --}}


                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="first-ul">Dashboard</a>
                                <a href="{{ route('posts.create')}}" class="first-ul">NEW POST</a>
                                @else
                                    <div>
                                        <a class="first-ul" href="{{ route('login') }}">Login</a>
                                    </div>
                                @if (Route::has('register'))
                                    <div>
                                        <a class="first-ul" href="{{ route('register') }}">Register</a>
                                    </div>
                                @endif
                            @endauth
                        @endif



                      </ul>
                    </div>
                    <div class="search_icon">
                      <ul>
                        <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- menu end -->