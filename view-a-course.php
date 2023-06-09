
<?php include "includes/header.php" ?>

<body>
    <header id="site-header" class="">
        <nav class="navbar navbar-expand-lg  navbar-light ">
            <div class="container">
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="#">
                    <ion-icon style="transform: rotate(-20deg)" size="large" class="book-icon text-warning"
                        name="book-outline"></ion-icon>
                    <span style="font-size:1.5rem">Training</span>
                </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="courses.html" aria-current="page" href="#">Courses</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="courses.html">Training Courses</a></li>
                                <li><a class="dropdown-item" href="#">Courses Offered</a></li>
                                <li><a class="dropdown-item" href="#">Partnership with Non-Profit</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Training Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="services.html">Vedios </a></li>
                                <li><a class="dropdown-item" href="#">Reference Websites</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle imageHolder" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/testi1.jpg" class="img-fluid rounded-circle" alt="">
                                Jambolle KHan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="view-a-course.html">Dashboard</a></li>
                                <li><a class="dropdown-item" href="user-logged-in.html  ">Profile</a></li>
                                <li><a class="dropdown-item" href="index.html">Logout </a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- View-A-Course -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4 border border-warning p-3">
                <div class="instituteLogo p-2 mb-3">
                    <img src="images/icon-4.png" class="img-fluid" alt="">
                </div>
                <div class="instiuteTitle mb-4">
                    <h2 class="fs-5 text-uppercase text-black-50">Training Institute</h2>
                </div>
                <div class="course-path">
                    <button class="btn mb-1 fw-bold " onclick="showList()"><ion-icon id="angle"
                            name="chevron-forward-outline"></ion-icon>Course Material</button>
                    <div class="list-group list-group-flush ps-4" id="list" style="display:none;">
                        <a href="#" class="list-group-item list-group-item-action active" id="nav-home-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                            aria-controls="nav-home" aria-selected="true"" aria-current=" true">
                            <ion-icon name="checkmark-circle-outline" class="text-primary"></ion-icon>
                            Week 1
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" id="nav-profile-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                            aria-controls="nav-profile" aria-selected="false">
                            <ion-icon name="ellipse-outline"></ion-icon>
                            Week 2</a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <ion-icon name="ellipse-outline"></ion-icon>
                            Week 3</a>
                    </div>
                </div>
                &nbsp;&nbsp;<button class="btn   fw-bold  ">Grades</button><br>
                &nbsp;&nbsp;<button class="btn fw-bold  ">Notes</button><br>
                &nbsp;&nbsp;<button class="btn fw-bold  ">Course Info</button><br>



            </div>
            <div class="col-md-6">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="course-path">
                                <button class="btn mb-1 fw-bold " onclick="courseList()"><ion-icon id="innerAngle"
                                        name="chevron-forward-outline"></ion-icon>Introduction To Computer
                                    Science</button>

                                <div class="list-group list-group-flush ps-4" id="courseList" style="display:none;">
                                    <a href="#" class="list-group-item list-group-item-action active" >
                                        <ion-icon name="chevron-forward-outline" class="text-primary"></ion-icon>
                                        Topic 1.0
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action" >
                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                        Topic 2.0</a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                        Topic 3.0</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row border border-warning ">
                            <button class="btn mb-1 fw-bold text-start  "><ion-icon
                                    name="chevron-forward-outline"></ion-icon>Python Introduction</button>
                            <div class="row" style="font-size: .8rem;">
                                <div class="col-md-6">
                                    <ion-icon name="caret-forward-circle-outline"></ion-icon> <span
                                        class="text-dark fw-bold ">49 Min</span> <span>of Video Left</span>
                                </div>
                                <div class="col-md-6">
                                    <ion-icon name="document-text-outline"></ion-icon><span
                                        class="text-dark fw-bold ">5</span> <span>Graded Assignments Left</span>
                                </div>
                            </div>
                            <hr class="text-warning w-100">
                        </div> -->


                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                        tabindex="0">Week 2</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">...</div>
                    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>


    <!-- IonIcons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.js"></script>
    <script>
        var flag = 1
        var list = document.getElementById("list")
        var angle = document.getElementById("angle")
        function showList() {
            if (flag == 1) {
                console.log(list)
                list.style.display = "block"
                angle.style.rotate = "0 0 1 90deg"

                flag = 0
            }
            else {
                list.style.display = "none"
                angle.style.rotate = "0 0 1 360deg"

                flag = 1
            }
        }
        var cl = document.getElementById("courseList")
        var innerAngle = document.getElementById("innerAngle")
        var f = 1
        function courseList() {
            if (f == 1) {
                console.log(list)
                cl.style.display = "block"
                innerAngle.style.rotate = "0 0 1 90deg"

                f = 0
            }
            else {
                cl.style.display = "none"
                innerAngle.style.rotate = "0 0 1 360deg"

                f = 1
            }
        }
    </script>


</body>

</html>