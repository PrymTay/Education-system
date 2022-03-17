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
                                                    title="parentInformation">
                                                    <span>Parent Information</span>
                                                </button>

                                                <button class="multisteps-form__progress-btn" type="button" title="NOK">
                                                    <span>Next of kin</span>
                                                </button>
                                                <button class="multisteps-form__progress-btn" type="button"
                                                    title="Iacademic evidence">
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
                                                        <div class="col-6 col-sm-8 mt-4 mt-sm-0 text-start">
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
                                                                <label class="form-label"> Pysical Address</label>
                                                                <input type="text"
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
                                            <!--single form panel for parent information-->
                                            <div class="multisteps-form__panel" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">Parent Bio data
                                                        </h5>
                                                        <p>Please fill the fields below.</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                  
                                                    <div class="row mt-4">


                                                        <div class="col-6">
                                                            <div class="input-group input-group-dynamic mb-5">
                                                                <label class="form-label">Mother's
                                                                    information</label>
                                                            </div>
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
                                                                    class="form-control multisteps-form__input ">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label"> Email Address</label>
                                                                <input type="text"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Physical Address</label>
                                                                <input type="text" required
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="tel"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-static my-3">
                                                                <label>Date of birth</label>
                                                                <input type="date" class="form-control"
                                                                    onfocus="focused(this)"
                                                                    onfocusout="defocused(this)">
                                                            </div>
                                                            
                                                            <div class="input-group input-group-dynamic mb-5">
                                                                <label class="form-label">Living status</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-check mb-3 col-3">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="Falive">
                                                                    <label class="custom-control-label"
                                                                        for="Falive">Alive</label><br />
                                                                </div>

                                                                <div class="form-check mb-3 col-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="FDead">
                                                                    <label class="custom-control-label"
                                                                        for="Fdead">Dead</label><br />
                                                                </div>


                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group input-group-dynamic mb-5">
                                                                <label class="form-label">Father's
                                                                    information</label>
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" required
                                                                    class="form-control multisteps-form__input"
                                                                    name="Ffirstname">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" required name="Flastname"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Other Names</label>
                                                                <input type="text" name="Fothernames"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label"> Email Address</label>
                                                                <input type="text" name="Femail"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Physical Address</label>
                                                                <input type="text" required name="Faddress"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="tel" name="Fnumber"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-static my-3">
                                                                <label>Date of birth</label>
                                                                <input type="date" class="form-control" name="Fdob"
                                                                    onfocus="focused(this)"
                                                                    onfocusout="defocused(this)">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-5">
                                                                <label class="form-label">Living status</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-check mb-3 col-3">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="Falive">
                                                                    <label class="custom-control-label"
                                                                        for="Falive">Alive</label><br />
                                                                </div>

                                                                <div class="form-check mb-3 col-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="FDead">
                                                                    <label class="custom-control-label"
                                                                        for="Fdead">Dead</label><br />
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">Next</button>
                                                </div>
                                            </div>
                                            <!--end single form panel for parent information -->
                                            <!--single form panel for next of kin-->
                                            <div class="multisteps-form__panel" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">Next of kin Bio data
                                                        </h5>
                                                        <p>Please fill the fields below.</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row mt-4">

                                                        <div class="col-6">
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
                                                                <label class="form-label"> Email Address</label>
                                                                <input type="text"
                                                                    class="form-control multisteps-form__input">
                                                            </div>

                                                            <div class="input-group input-group-static my-3">
                                                                <label>Date of birth</label>
                                                                <input type="date" class="form-control"
                                                                    onfocus="focused(this)"
                                                                    onfocusout="defocused(this)">
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group input-group-dynamic mb-3">
                                                                <label class="form-label">Relationship with
                                                                    Applicant</label>
                                                            </div><br />
                                                            <div class="row">
                                                                <div class="form-check mb-3 col-3">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="mother">
                                                                    <label class="custom-control-label"
                                                                        for="mother">Mother</label><br />
                                                                </div>

                                                                <div class="form-check mb-3 col-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="father">
                                                                    <label class="custom-control-label"
                                                                        for="father">Father</label><br />
                                                                </div>
                                                                <div class="form-check mb-3 col-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="relationship" id="guardian">
                                                                    <label class="custom-control-label"
                                                                        for="guardian">Guardian</label><br />

                                                                </div>

                                                            </div>





                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Physical Address</label>
                                                                <input type="text" required
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="tel"
                                                                    class="form-control multisteps-form__input">
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">Next</button>
                                                </div>
                                            </div>
                                            <!--end single form panel for next ok kin -->

                                            <!--single form panel for academic evidence -->
                                            <div class="multisteps-form__panel" data-animation="FadeIn">
                                                <div class="row text-center mt-4">
                                                    <div class="col-10 mx-auto">
                                                        <h5 class="font-weight-normal">Academic Evidence
                                                        </h5>
                                                        <p>Please fill the fields below.</p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row mt-4">
                                                        <div class="input-group input-group-static mb-5">
                                                            <label class="form-label">Fill this if applying for <strong>ordinary level </strong> education</label>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Science</label>
                                                                <input type="number"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">SST</label>
                                                                <input type="number" 
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group input-group-dynamic mb-4">
                                                                <label class="form-label">Mathematics</label>
                                                                <input type="number"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                            <div class="input-group input-group-dynamic">
                                                                <label class="form-label"> Science</label>
                                                                <input type="text"
                                                                    class="form-control multisteps-form__input">
                                                            </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-control mb-0">Upload results</label>
                                                            <div action="/file-upload" class="form-control border dropzone" id="results"></div>
                                                          </div>
                                                          <div class="input-group input-group-static mb-5">
                                                            <label class="form-label">Fill this if applying for <strong>advanced level </strong> education</label>
                                                        </div>

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
                                                      
                                                    </div>
                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">Next</button>
                                                </div>
                                            </div>
                                            <!--end single form panel for academic  evidence -->
                                            

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
