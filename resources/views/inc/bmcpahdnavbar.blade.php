<div class="sticky-top">
    <!--<header class="header">
        <div class="container">
            <p><span class="glyphicon glyphicon-earphone"></span> (632) 584-4256 to 60 | <span class="glyphicon glyphicon-envelope"></span> refamed_info@blainegroup.com.ph</p>  
        </div>
    </header>-->
    <nav class="navbar  navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar" href="{{ url('/bmcindex') }}">
                <img src="images/logo/bmc-pahd.png" style="width: 180px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto fw">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ url('/bmcpahdindex') }}">
                            <b style="color:rgb(208, 74, 150);">HOME</b>
                        </a>
                        </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:rgb(208, 74, 150);">ABOUT US</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcpcabouthistory') }}">
                                <b style="color:#251F5D;">History</b>
                                </a>
                            <a class="dropdown-item" href="{{ url('/bmcpcaboutdivision') }}">
                                <b style="color:#251F5D;">Personal and Home Care Division</b>
                            </a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:rgb(208, 74, 150);">PRODUCTS</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcpahdproductpersonalcare') }}">
                                <b style="color:#251F5D;">PERSONAL CARE</b>
                                </a>
                            <a class="dropdown-item" href="{{ url('/bmcpahdproducthomecare') }}">
                                <b style="color:#251F5D;">HOME CARE</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcpahdproductrawmaterial') }}">
                                <b style="color:#251F5D;">OTHER RAW MATERIALS</b>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:rgb(208, 74, 150);">TECHNICAL SERVICES</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcpctechnicaltolling') }}">
                                <b style="color:#251F5D;">Expert Tolling Services</b>
                                </a>
                            <a class="dropdown-item" href="{{ url('/bmcpcbranddevelopment') }}">
                                <b style="color:#251F5D;">Brand Development</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcpcmatsourcing') }}">
                                <b style="color:#251F5D;">Material Sourcing</b>
                            </a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ url('/bmcpahdcontactus') }}">
                            <b style="color: rgb(208, 74, 150);">CONTACT US</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>    
