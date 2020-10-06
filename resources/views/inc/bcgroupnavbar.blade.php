<div class="sticky-top">
    <!--<header class="header">
        <div class="container">
            <p><span class="glyphicon glyphicon-earphone"></span> (632) 584-4256 to 60 | <span class="glyphicon glyphicon-envelope"></span> refamed_info@blainegroup.com.ph</p>  
        </div>
    </header>-->
    <nav class="navbar  navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar" href="{{ url('/') }}">
                <img src="images/logo/blainegrouplogo.png" style="width: 160px" alt="">
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
                        <a class="nav-link " href="{{ url('/') }}">
                            <b style="color:#251F5D;">HOME</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:#251F5D;">OUR COMPANIES</b>
                        </a>
                         <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bcrawmats') }}">
                                    <img src="images/logo/BC.png" style="width:60px;" alt="">&nbsp;&nbsp;&nbsp;<b style="color:#251F5D;">BLAINE CORPORATION </b>
                                </a>
                            <a class="dropdown-item" href="{{ url('/rrlcindex') }}">
                                    <img src="images/logo/rrlc.jpg" style="width:50px;" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#251F5D;">REFAMED RESEARCH LABORATORY CORPORATION</b>
                                </a>
                            <a class="dropdown-item" href="{{ url('/bmcindex') }}">
                                <img src="images/logo/BMC.jpg" style="width:60px;" alt="">&nbsp;&nbsp;<b style="color:#251F5D;"> BLAINE MANUFACTURING CORPORATION </b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ url('bcaboutus') }}">
                            <b style="color:#251F5D;">ABOUT US</b>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ url('bcnews') }}">
                            <b style="color:#251F5D;">NEWS</b>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ url('bccareers') }}">
                            <b style="color:#251F5D;">CAREERS</b>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ url('bccontactus') }}">
                            <b style="color:#251F5D;">CONTACT US</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>    
