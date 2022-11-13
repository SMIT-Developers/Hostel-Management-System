<div id="layoutSidenav" class=" h-100">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dash Board</div>
                    <a class="nav-link" href="http://127.0.0.1:8000/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home
                    </a>
                    {{-- <div class="sb-sidenav-menu-heading"></div> --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Students
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link"  href="http://127.0.0.1:8000/admin/student">Boy's details</a>
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/GirlsDetails">Girl's details</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Hostels
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    

                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Hostel details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/BoyHostelD">Boy's hostel details</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/GirlHostelD">Girl's hostel details</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/AddHostel">Add hostel</a>
                                    {{-- <a class="nav-link" href="register.html">Add room</a> --}}
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/ChangeHostel">Change hostel</a>
                                    
                                </nav>
                            </div>

                            



                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                               Hoetels
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                             <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Hostel details</a>
                                    <a class="nav-link" href="404.html">Add hostel</a>
                                    <a class="nav-link" href="500.html">Add room</a>
                                    <a class="nav-link" href="500.html">Change hostel</a>
                                </nav> 
                            </div> --}}

                        </nav>

                    </div>

                <div>
                    <a class="nav-link" href="http://127.0.0.1:8000/admin/ViewApp">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        View appels
                    </a>
                </div>



                    <div class="sb-sidenav-menu-heading">Accounts</div>
                    <a class="nav-link" href="http://127.0.0.1:8000/admin/WardenProSet">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Warden profile Settings
                    </a>
                    <a class="nav-link" href="http://127.0.0.1:8000/admin/StudentProSet">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Student profile Settings
                    </a>
                </div>
            </div>
            
        </nav>
    </div>
   

