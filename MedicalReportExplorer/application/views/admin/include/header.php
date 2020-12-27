<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?=base_url()?>asset/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?=base_url()?>Admin">Admin Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    

                </div>
            </form>
            <!-- Navbar-->
            <a class="navbar" style="color:white;"><?=$this->session->userdata('username')?></a>
            <ul class="navbar-nav ml-auto ml-md-0">
                
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>                    

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>Logout">Logout</a>
                    </div>
                </li>
            </ul>
            


        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?=base_url()?>Admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>



                            
                            <div class="sb-sidenav-menu-heading">PAGES</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArea" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseArea" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-user">View User</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-contract"></i></div>
                                Contacts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseContact" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-contact">View Contacts</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppointment" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-contract"></i></div>
                                Appointments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseAppointment" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-appointment">View Appointments</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProperty" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Urine R/ME
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseProperty" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-urine">Add Urine R/ME</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-urine">View Urine R/ME</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDivision" aria-expanded="false" aria-controls="collapseDivision">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Complete Blood Count
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseDivision" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-blood">Add Complete Blood Count</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-blood">View Complete Blood Count</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThana" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Haematology
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseThana" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-haematology">Add Haematology</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-haematology">View Haematology</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUSG" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                USG
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseUSG" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-usg">Add USG</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-usg">View USG</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCoagulation" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Coagulation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseCoagulation" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-coagulation">Add Coagulation</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-coagulation">View Coagulation</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseImmunology" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Immunology
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseImmunology" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-immunology">Add Immunology</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-immunology">View Immunology</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSerology" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Serology
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseSerology" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-serology">Add Serology</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-serology">View Serology</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBiochemistry" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Biochemistry
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseBiochemistry" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Admin/add-biochemistry">Add Biochemistry</a>
                                    <a class="nav-link" href="<?=base_url()?>Admin/view-biochemistry">View Biochemistry</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>