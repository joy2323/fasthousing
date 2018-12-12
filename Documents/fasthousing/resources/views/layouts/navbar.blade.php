
<nav class="navbar-light navbar navbar-expand-lg fixed-top pt-1 pb-1">
                    <div class="navbar-header" role="navigation">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('img/logo1.png')}}" class="img-fluid mx-auto nav-logo">
                        </a>


                        <form class="input-group d-flex mr-2 mtop-nav-search">

                            <div class="input-group">
                                <input type="text" class="form-control search-placeholder" placeholder="Search for property..." aria-label="Search input" aria-describedby="basic-addon2">
                                <div class="input-group-prepend search-height">
                                    <span class="input-group-text btn btn-outline-dark bg-dark border-right-15 orange-hover" id="basic-addon2"><a href="#" class="search-append"><i class="fa fa-search"></i></a></span>
                                </div>
                            </div>
                        </form>






                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>



                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="text-center navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-no-border nav-link btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Rent
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#longTermProperties">1 Year/more</a>
                                        <a class="dropdown-item" href="#shortTermProperties">Short Let</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#cta">List Property</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-light" href="#footer">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-light" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item">
                            
                                <a class="nav-link btn-outline-light" href="{{ route('login') }}">Login<span class="ml-1"><i class="fa fa-user-circle"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>