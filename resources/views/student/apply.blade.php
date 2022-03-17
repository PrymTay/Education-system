<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        EDucation Management system
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.1" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mt-5">Build Your Profile</h3>
                    <h5 class="font-weight-normal opacity-6">This information will let us know more about you.</h5>
                    <div class="multisteps-form mb-5">
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                            <div class="multisteps-form__progress">
                                                <button class="multisteps-form__progress-btn js-active" type="button"
                                                    title="User Info">
                                                    <span>About</span>
                                                </button>
                                                <button class="multisteps-form__progress-btn" type="button"
                                                    title="Course">
                                                    <span>Course</span>
                                                </button>
                                                <button class="multisteps-form__progress-btn" type="button"
                                                    title="Academic Evidence">
                                                    <span>Academic Evidence</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="multisteps-form__form needs" novalidate action="#">
                                            <!--single form panel-->
                                            <div class="multisteps-form__panel js-active" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">Let's start with the basic
                                                            information</h5>
                                                        <p>Enter your bio data</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row mt-3">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="avatar avatar-xxl position-relative">
                                                                <img src="../../assets/img/download.png"
                                                                    class="border-radius-md" alt="team-2">
                                                                <a href="javascript:;"
                                                                    class="btn btn-sm btn-icon-only bg-gradient-primary position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                                    <span class="material-icons text-xs top-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" aria-hidden="true"
                                                                        data-bs-original-title="Edit Image"
                                                                        aria-label="Edit Image">
                                                                        edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" required
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" required
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Other Names</label>
                                                                <input type="text"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic">
                                                                <label class="form-label">Email Address</label>
                                                                <input type="email"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-static my-3">
                                                                <label>Date of birth</label>
                                                                <input type="date" class="form-control"
                                                                    onfocus="focused(this)"
                                                                    onfocusout="defocused(this)">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="button-row d-flex mt-4">
                                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                            type="button" title="Next">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single form panel-->
                                            <div class="multisteps-form__panel" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">What are you are you interested
                                                            in doing?</h5>
                                                        <p>Select a school.</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row mt-4">
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>Medicine</h6>
                                                        </div>
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>Computing</h6>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck2">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck2">
                                                                <i class="material-icons">
                                                                    integration_instructions
                                                                </i>
                                                            </label>
                                                            <h6>Eucation</h6>
                                                        </div>
                                                        <div class="col-sm-3 me-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck3">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck3">
                                                                <i class="material-icons">
                                                                    developer_mode
                                                                </i>
                                                            </label>
                                                            <h6>Engineering</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--second row  -->

                                                <div class="multisteps-form__content">
                                                    <div class="row mt-4">
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>College of Design</h6>
                                                        </div>
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>College of Business</h6>
                                                        </div>
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>Dance and Drama</h6>
                                                        </div>
                                                        <div class="col-sm-3 ms-auto">
                                                            <input type="checkbox" class="btn-check"
                                                                id="btncheck1">
                                                            <label
                                                                class="btn btn-lg btn-outline-primary border-2 px-6 py-5"
                                                                for="btncheck1">
                                                                <i class="material-icons">
                                                                    brush
                                                                </i>
                                                            </label>
                                                            <h6>Agriculture</h6>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end second row -->
                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">Next</button>
                                                </div>
                                            </div>

                                            <!--single form panel-->
                                            {{-- <div class="multisteps-form__panel" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">Are you living in a nice area?
                                                        </h5>
                                                        <p>One thing I love about the later sunsets is the chance to go
                                                            for a walk through the neighborhood woods before dinner</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-8 mt-3">
                                                            <div class="input-group input-group-static">
                                                                <label>Street Name</label>
                                                                <input type="text"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4 mt-3">
                                                            <div class="input-group input-group-static">
                                                                <label>Street No</label>
                                                                <input class="multisteps-form__input form-control"
                                                                    type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-7 mt-3">
                                                            <div class="input-group input-group-static">
                                                                <label>City</label>
                                                                <input class="multisteps-form__input form-control"
                                                                    type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-5 ms-auto mt-3 text-start">
                                                            <div>
                                                                <label class="form-label mb-0 ms-0">Country</label>
                                                                <select class="form-control" name="choices-country"
                                                                    id="choices-country">
                                                                    <option value="Argentina">Argentina</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Brasil">Brasil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn btn-outline-dark mb-0 js-btn-prev"
                                                                type="button" title="Prev">Prev</button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0"
                                                                type="button" title="Send">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                                            <div class="multisteps-form__panel" data-animation="FadeIn">
                                        <div class="row text-center mt-4">
                                            <div class="col-10 mx-auto">
                                                <h5 class="font-weight-normal">Provide your academic records below
                                                    ?</h5>
                                                <p>Do attach certificates in pdf format.</p>
                                            </div>
                                        </div>
                                        <h5 class="font-weight-bolder">O-level</h5>
                                        <hr>
                                        <div class="multisteps-form__content mt-3">
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="mt-4 form-label">Select all subjects</label>
                                                    <select class="form-control" name="olevel-tags" id="olevel-tags"
                                                        multiple>
                                                        <option value="Choice 1" selected>General Paper</option>
                                                        <option value="Choice 2">Chemistry</option>
                                                        <option value="Choice 3">Biology</option>
                                                        <option value="Choice 4">Economics</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="mt-4 form-label">Points</label>
                                                    <div class="input-group input-group-dynamic">
                                                
                                                        <input type="number" class="form-control w-100"
                                                            id="olevelpoints" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group input-group-dynamic">
                                                       <b> <label class="form-label">Attach passlip</label></b>
                                                        <div action="/file-upload" class="form-control dropzone dz-clickable" id="dropzone">
                  
                                                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload in pdf format</button></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <h6>A-level</h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="mt-4 form-label">Select all subjects</label>
                                                    <select class="form-control" name="alevel-tags" id="alevel-tags"
                                                        multiple>
                                                        <option value="Choice 1" selected>English</option>
                                                        <option value="Choice 2">Chemistry</option>
                                                        <option value="Choice 3">Biology</option>
                                                        <option value="Choice 4">Economics</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-3">
                                                    <label class="mt-4 form-label">Points Scored</label>
                                                    <div class="input-group input-group-dynamic">
                                                        
                                                        <input type="number" class="form-control w-100"
                                                            id="alevelpoints" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Attach File passlip</label>
                                                        <div action="/file-upload" class="form-control dropzone dz-clickable" id="dropzone">
                  
                                                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload in pdf format</button></div></div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-0 mt-md-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                    title="Send">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script src="../../../assets/js/plugins/dropzone.min.js"></script>
    <script src="../../../assets/js/plugins/quill.min.js"></script>
    <script>
        if (document.getElementById('olevel-tags')) {
            var tags = document.getElementById('olevel-tags');
            const examples = new Choices(tags, {
                removeItemButton: true
            });

            examples.setChoices(
                [{
                        value: 'One',
                        label: 'Expired',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Math',
                        selected: true
                    }
                ],
                'value',
                'label',
                false,
            );
        }

        //A level tags javascript
        if (document.getElementById('alevel-tags')) {
            var tags = document.getElementById('alevel-tags');
            const examples = new Choices(tags, {
                removeItemButton: true
            });

            examples.setChoices(
                [{
                        value: 'One',
                        label: 'Expired',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Subsidiary Mathmatics',
                        selected: true
                    }
                ],
                'value',
                'label',
                false,
            );
        }
        //End of A level tags javascript
        var openFile = function(event) {
            var input = event.target;

            // Instantiate FileReader
            var reader = new FileReader();
            reader.onload = function() {
                imageFile = reader.result;

                document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                    '" class="rounded-circle w-100 shadow" />';
            };
            reader.readAsDataURL(input.files[0]);
        };
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.min.js?v=3.0.1"></script>
</body>

</html>
