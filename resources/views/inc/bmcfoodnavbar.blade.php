<div class="sticky-top">
    <!--<header class="header">
        <div class="container">
            <p><span class="glyphicon glyphicon-earphone"></span> (632) 584-4256 to 60 | <span class="glyphicon glyphicon-envelope"></span> refamed_info@blainegroup.com.ph</p>  
        </div>
    </header>-->
    <nav class="navbar  navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar" href="{{ url('/bmcindex') }}">
                <img src="images/logo/bmc-food-logo.png" style="width: 180px" alt="">
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
                    <a class="nav-link " href="{{ url('/bmcfoodhome') }}">
                        <b style="color:  #097610;">HOME</b>
                    </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:  #097610;">ABOUT US</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcfoodabouthistory') }}">
                                <b>History</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodaboutdivision') }}">
                                <b>Food Division</b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:  #097610;">PRODUCTS</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcfoodspices') }}">
                                <b>Spices</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfooddehydratedherbs') }}">
                                <b>Dehydrated Herbs</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodoleoresins') }}">
                                <b>Oleoresins</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodiqf') }}">
                                <b>Individually Quick Frozen (IQF) Herbs</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfooddaregal') }}">
                                <b>Daregal Chili Collections</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodnutritional') }}">
                                <b>Nutritional and Functional Ingredients</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodrawmats') }}">
                                <b>Other Raw Materials</b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown">
                            <b style="color:  #097610;">TECHNICAL SERVICES</b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/bmcfoodtechnicalproduct') }}">
                                <b>Product Customization</b>
                            </a>
                            <a class="dropdown-item" href="{{ url('/bmcfoodtechnicaltolling') }}">
                                <b>Expert Tolling Services</b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#">
                            <b style="color:  #097610;">CONTACT US</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>    
