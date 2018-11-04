@extends('layouts.main')


@section('content')


        <header class="header-account-page bg-gradient-primary d-flex align-items-end">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12">
                        <!-- Salute + Small stats -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <span class="h2 mb-0 text-white d-block">Morning Heather</span>
                                <span class="text-light">Have a nice day!</span>
                            </div>
                            <div class="col-auto flex-fill">
                                <ul class="list-inline row justify-content-lg-end mb-0">
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                    <i class="bg-green"></i>Sales
                                </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                    20.5%
                                    <small class="far fa-angle-up text-success"></small>
                                </a>
                                    </li>
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                    <i class="bg-orange"></i>Tasks
                                </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                    5.7%
                                    <small class="far fa-angle-up text-warning"></small>
                                </a>
                                    </li>
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                    <i class="bg-red"></i>Sales
                                </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                    -3.24%
                                    <small class="far fa-angle-down text-danger"></small>
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Account navigation -->
                        <div class="d-flex">
                            <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-secondary">
                                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
                            </a>
                            <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                                <div class="btn-group" role="group">
                                    <button id="btn-group-boards" type="button" class="btn btn-secondary btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                                        <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                                        <span class="btn-inner--text d-none d-sm-inline-block">Boards</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                                        <a class="dropdown-item" href="account-overview.html">Overview</a>
                                        <a class="dropdown-item" href="account-projects.html">Projects</a>
                                        <a class="dropdown-item" href="account-tasks.html">Tasks</a>
                                        <a class="dropdown-item" href="account-connections.html">Connections</a>
                                    </div>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="btn-group-settings" type="button" class="btn btn-secondary btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                                        <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                                        <span class="btn-inner--text d-none d-sm-inline-block">Settings</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                                        <a class="dropdown-item" href="account-profile.html">Profile</a>
                                        <a class="dropdown-item" href="account-settings.html">Settings</a>
                                        <a class="dropdown-item" href="account-billing.html">Billing</a>
                                        <a class="dropdown-item" href="account-notifications.html">Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


<section class="slice">
        <form>

            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-4">


                    </div>
                    <div class="col-lg-8">
                      
                            <div class="form-group">
                                    <label class="form-control-label">Recipe Title</label>
                                    <input class="form-control form-control-sm" type="title" placeholder="title">
                            </div>
                     
                       
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-primary">Update password</button>
                            <a href="recover.html" class="btn btn-sm btn-secondary">I forgot my password</a>
                        </div>
                    

                        <!-- Username -->
                        <div class="mt-5 pt-5 delimiter-top">

                            <div class="page-inner-header mb-4">
                                <h5 class="mb-1">Change username</h5>

                                <p class="text-muted mb-0">Changing your username is ireversible and can affect past activites.</p>

                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-change-username">Change username</button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-change-username" tabindex="-1" role="dialog" aria-labelledby="modal-change-username" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title d-flex align-items-center" id="modal-title-change-username">
                                                    <div>
                                                        <div class="icon icon-sm icon-shape icon-teal rounded-circle shadow mr-3">
                                                            <i class="far fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Change username</h6>
                                                    </div>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Old username</label>
                                                            <input class="form-control form-control-sm" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">New username</label>
                                                            <input class="form-control form-control-sm" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-5 pt-4 mt-4 delimiter-top text-center">
                                                    <p class="text-muted text-sm">You will receive an email where you will be asked to confirm this action in order to be completed.</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary text-danger" data-dismiss="modal">Change my username</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Delete -->
                        <div class="mt-5 pt-5 delimiter-top">

                            <div class="page-inner-header mb-4">
                                <h5 class="mb-1 text-danger">Delete account</h5>

                                <p class="text-muted mb-0">Changing your username is ireversible and can affect past activites.</p>

                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-account">Delete account</button>

                            <!-- Modal -->
                            <div class="modal modal-danger fade" id="modal-delete-account" tabindex="-1" role="dialog" aria-labelledby="modal-delete-account" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form class="form-danger">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <i class="far fa-exclamation-circle fa-3x opacity-8"></i>
                                                    <h5 class="text-white mt-4">Should we stop now?</h5>
                                                    <p class="text-sm text-sm">All your data will be erased. You will no longer be billed, and your username will be available to anyone.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label text-white">You email or username</label>
                                                    <input class="form-control form-control-sm" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label text-white">To verify, type <span class="font-italic">delete my account</span> below</label>
                                                    <input class="form-control form-control-sm" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label text-white">Your password</label>
                                                    <input class="form-control form-control-sm" type="password">
                                                </div>
                                                <div class="mt-4">
                                                    <button type="button" class="btn btn-block btn-sm btn-white text-danger">Delete my account</button>
                                                    <button type="button" class="btn btn-block btn-sm btn-link text-light mt-4" data-dismiss="modal">Not this time</button>
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

        </form>
        </section>


@endsection



@section('plugin')

<script src="/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

@endsection