<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon"/>

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/libs.bundle.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/theme.bundle.css')}}" />

    <!-- Title -->
    <title>@yield('title') | Evidentia Cloud</title>
</head>
<body>

<!-- MODALS -->
<!-- Modal: Members -->
<div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-card card" data-list='{"valueNames": ["name"]}'>
                <div class="card-header">

                    <!-- Title -->
                    <h4 class="card-header-title" id="exampleModalCenterTitle">
                        Add a member
                    </h4>

                    <!-- Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="card-header">

                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge input-group-reverse">
                            <input class="form-control list-search" type="search" placeholder="Buscar">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-body">

                    <!-- List group -->
                    <ul class="list-group list-group-flush list my-n3">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="./profile-posts.html" class="avatar">
                                        <img src="./assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="./profile-posts.html">Miyah Myles</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="./profile-posts.html" class="avatar">
                                        <img src="./assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="./profile-posts.html">Ryu Duke</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="./profile-posts.html" class="avatar">
                                        <img src="./assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="./profile-posts.html">Glen Rouse</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-warning">●</span> Busy
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="./profile-posts.html" class="avatar">
                                        <img src="./assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="./profile-posts.html">Grace Gross</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Kanban task -->
<div class="modal fade" id="modalKanbanTask" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
            <div class="modal-body">

                <!-- Header -->
                <div class="row">
                    <div class="col">

                        <!-- Prettitle -->
                        <h6 class="text-uppercase text-muted mb-3">
                            <a href="#!" class="text-reset">How to Use Kanban</a>
                        </h6>

                        <!-- Title -->
                        <h2 class="mb-2">
                            Update Dashkit to include new components!
                        </h2>

                        <!-- Subtitle -->
                        <p class="text-muted mb-0">
                            This is a description of this task. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna nisi, ultrices ut pharetra eget.
                        </p>

                    </div>
                    <div class="col-auto">

                        <!-- Close -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr class="my-4">

                <!-- Buttons -->
                <div class="mb-4">
                    <div class="row">
                        <div class="col">

                            <!-- Reaction -->
                            <a href="#!" class="btn btn-sm btn-white">
                                😬 1
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                                👍 2
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                                Add Reaction
                            </a>

                        </div>
                        <div class="col-auto me-n3">

                            <!-- Avatar group -->
                            <div class="avatar-group d-none d-sm-flex">
                                <a href="./profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="./profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                    <img src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="./profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                                    <img src="./assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="./profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Miyah Myles">
                                    <img src="./assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                            </div>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                                Share
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Files
                        </h4>

                        <!-- Button -->
                        <a href="#!" class="btn btn-sm btn-white">
                            Add files
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="./project-overview.html" class="avatar">
                                            <img src="./assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="./project-overview.html">Launchday logo</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            1.5mb PNG Dave
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="./project-overview.html" class="avatar">
                                            <img src="./assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="./project-overview.html">Launchday logo</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            1.5mb PNG Dave
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Form -->
                                <form class="mt-1">
                                    <textarea class="form-control form-control-flush form-control" data-autosize rows="1" placeholder="Leave a comment"></textarea>
                                </form>

                            </div>
                            <div class="col-auto align-self-end">

                                <!-- Icons -->
                                <div class="text-muted mb-2">
                                    <a href="#!" class="text-reset me-3">
                                        <i class="fe fe-camera"></i>
                                    </a>
                                    <a href="#!" class="text-reset me-3">
                                        <i class="fe fe-paperclip"></i>
                                    </a>
                                    <a href="#!" class="text-reset">
                                        <i class="fe fe-mic"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <!-- Comments -->
                        <div class="comment mb-3">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm" href="./profile-posts.html">
                                        <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Body -->
                                    <div class="comment-body">

                                        <div class="row">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="comment-title">
                                                    Ab Hadley
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Time -->
                                                <time class="comment-time">
                                                    11:12
                                                </time>

                                            </div>
                                        </div> <!-- / .row -->

                                        <!-- Text -->
                                        <p class="comment-text">
                                            Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="comment">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm" href="./profile-posts.html">
                                        <img src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ms-n2">

                                    <!-- Body -->
                                    <div class="comment-body">

                                        <div class="row">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="comment-title">
                                                    Adolfo Hess
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Time -->
                                                <time class="comment-time">
                                                    11:12
                                                </time>

                                            </div>
                                        </div> <!-- / .row -->

                                        <!-- Text -->
                                        <p class="comment-text">
                                            Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                    </div>
                </div>

                <!-- Card -->
                <div class="card mb-0">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Activity
                        </h4>

                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Johnathan Goldstein
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Johnathan Goldstein
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Johnathan Goldstein
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Kanban task empty -->
<div class="modal fade" id="modalKanbanTaskEmpty" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
            <div class="modal-body">

                <!-- Header -->
                <div class="row">
                    <div class="col">

                        <!-- Prettitle -->
                        <h6 class="text-uppercase text-muted mb-3">
                            <a href="#!" class="text-reset">How to Use Kanban</a>
                        </h6>

                        <!-- Title -->
                        <h2 class="mb-2">
                            Update Dashkit to include new components!
                        </h2>

                        <!-- Subtitle -->
                        <textarea class="form-control form-control-flush form-control-auto" data-autosize rows="1" placeholder="Add a description..."></textarea>

                    </div>
                    <div class="col-auto">

                        <!-- Close -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr class="my-4">

                <!-- Buttons -->
                <div class="mb-4">
                    <div class="row">
                        <div class="col">

                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                                Add Reaction
                            </a>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                                Share
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropzone dropzone-multiple" data-dropzone='{"url": "https://"}'>

                            <!-- Fallback -->
                            <div class="fallback">
                                <div class="form-group">
                                    <label class="form-label" for="customFileUpload">Choose file</label>
                                    <input class="form-control" type="file" id="customFileUpload" multiple>
                                </div>
                            </div>

                            <!-- Preview -->
                            <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Image -->
                                            <div class="avatar">
                                                <img class="avatar-img rounded" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                                            </div>

                                        </div>
                                        <div class="col ms-n3">

                                            <!-- Heading -->
                                            <h4 class="mb-1" data-dz-name>...</h4>

                                            <!-- Text -->
                                            <small class="text-muted" data-dz-size></small>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item" data-dz-remove>
                                                        Remove
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Form -->
                                <form class="mt-1">
                                    <textarea class="form-control form-control-flush" data-autosize rows="1" placeholder="Leave a comment"></textarea>
                                </form>

                            </div>
                            <div class="col-auto align-self-end">

                                <!-- Icons -->
                                <div class="text-muted mb-2">
                                    <a href="#!" class="text-reset me-3">
                                        <i class="fe fe-camera"></i>
                                    </a>
                                    <a href="#!" class="text-reset me-3">
                                        <i class="fe fe-paperclip"></i>
                                    </a>
                                    <a href="#!" class="text-reset">
                                        <i class="fe fe-mic"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- OFFCANVAS -->

<!-- Offcanvas: Search -->
<div class="offcanvas offcanvas-start" id="sidebarOffcanvasSearch" tabindex="-1">
    <div class="offcanvas-body" data-list='{"valueNames": ["name"]}'>

        <!-- Form -->
        <form class="mb-4">
            <div class="input-group input-group-merge input-group-rounded input-group-reverse">
                <input class="form-control list-search" type="search" placeholder="Buscar">
                <div class="input-group-text">
                    <span class="fe fe-search"></span>
                </div>
            </div>
        </form>

        <!-- List group -->
        <div class="my-n3">
            <div class="list-group list-group-flush list-group-focus list">
                <a class="list-group-item" href="./team-overview.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="./assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./team-overview.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="./assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./project-overview.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="./assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Homepage Redesign
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./project-overview.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="./assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Travels & Time
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./project-overview.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="./assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Safari Exploration
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./profile-posts.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Dianna Smiley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                                <span class="text-success">●</span> Online
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
                <a class="list-group-item" href="./profile-posts.html">
                    <div class="row align-items-center">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                        </div>
                        <div class="col ms-n2">

                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                                <span class="text-danger">●</span> Offline
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Offcanvas: Activity -->
<div class="offcanvas offcanvas-start" id="sidebarOffcanvasActivity" tabindex="-1">
    <div class="offcanvas-header">

        <!-- Title -->
        <h4 class="offcanvas-title">
            Notifications
        </h4>

        <!-- Navs -->
        <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#modalActivityAction">Action</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#modalActivityUser">User</a>
            </li>
        </ul>

    </div>
    <div class="offcanvas-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="modalActivityAction">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Launchday 1.4.0 update email sent
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Sent to all 1,851 subscribers over a 24 hour period
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-archive"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    New project "Goodkit" created
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Looks like there might be a new theme soon.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-code"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dashkit 1.5.0 was deployed.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    A successful to deploy to production was executed.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-git-branch"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    "Update Dependencies" branch was created.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    This branch was created off of the "master" branch.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Launchday 1.4.0 update email sent
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Sent to all 1,851 subscribers over a 24 hour period
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-archive"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    New project "Goodkit" created
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Looks like there might be a new theme soon.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-code"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dashkit 1.5.0 was deployed.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    A successful to deploy to production was executed.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-git-branch"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    "Update Dependencies" branch was created.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    This branch was created off of the "master" branch.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Launchday 1.4.0 update email sent
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Sent to all 1,851 subscribers over a 24 hour period
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-archive"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    New project "Goodkit" created
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Looks like there might be a new theme soon.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-code"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dashkit 1.5.0 was deployed.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    A successful to deploy to production was executed.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title fs-lg bg-primary-soft rounded-circle text-primary">
                                        <i class="fe fe-git-branch"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    "Update Dependencies" branch was created.
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    This branch was created off of the "master" branch.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                </div>

            </div>
            <div class="tab-pane fade" id="modalActivityUser">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dianna Smiley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Uploaded the files "Launchday Logo" and "New Design".
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Ab Hadley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Shared the "Why Dashkit?" post with 124 subscribers.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    1h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-offline">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Adolfo Hess
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Exported sales data from Launchday's subscriber data.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    3h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dianna Smiley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Uploaded the files "Launchday Logo" and "New Design".
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Ab Hadley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Shared the "Why Dashkit?" post with 124 subscribers.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    1h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-offline">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Adolfo Hess
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Exported sales data from Launchday's subscriber data.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    3h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dianna Smiley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Uploaded the files "Launchday Logo" and "New Design".
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Ab Hadley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Shared the "Why Dashkit?" post with 124 subscribers.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    1h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-offline">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Adolfo Hess
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Exported sales data from Launchday's subscriber data.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    3h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Dianna Smiley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Uploaded the files "Launchday Logo" and "New Design".
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-online">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Ab Hadley
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Shared the "Why Dashkit?" post with 124 subscribers.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    1h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm avatar-offline">
                                    <img class="avatar-img rounded-circle" src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                                </div>

                            </div>
                            <div class="col ms-n2">

                                <!-- Heading -->
                                <h5 class="mb-1">
                                    Adolfo Hess
                                </h5>

                                <!-- Text -->
                                <p class="small text-gray-700 mb-0">
                                    Exported sales data from Launchday's subscriber data.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    3h ago
                                </small>

                            </div>
                        </div> <!-- / .row -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NAVIGATION -->
<nav class="navbar navbar-vertical fixed-start navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="./index.html">
            <img src="{{ asset('dist/img/logo_light.svg') }}" class="navbar-brand-img mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle">CF</span>
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                    <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="./account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">



                    <a href="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}"  class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}" method="POST" style="display: none;">
                        @csrf
                    </form>



                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                    <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <div class="input-group-text">
                        <span class="fe fe-search"></span>
                    </div>
                </div>
            </form>

            <!-- Navigation -->

            <x-menus.menucommon/>

            <x-menus.menustudent/>

            <x-menus.menusecretary/>

            <x-menus.menucoordinator/>

            <x-menus.menuoptions/>

            <!-- Push content down -->
            <div class="mt-auto"></div>


            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle">CF</span>
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="./account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">

                        <a href="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}"  class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>

                </div>

                <!-- Icon -->
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
                </a>

            </div>

        </div> <!-- / .navbar-collapse -->

    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="main-content">

    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline me-4 d-none d-md-flex">
                <div class="input-group input-group-flush input-group-merge input-group-reverse" data-list="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                    <!-- Input -->
                    <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Buscar" aria-label="Search">

                    <!-- Prepend -->
                    <div class="input-group-text">
                        <i class="fe fe-search"></i>
                    </div>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-focus list my-n3"><a class="list-group-item" href="./team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Airbnb
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Medium Corporation
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Homepage Redesign
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Travels &amp; Time
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Safari Exploration
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Dianna Smiley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a><a class="list-group-item" href="./profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Ab Hadley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a></div>
                        </div>
                    </div> <!-- / .dropdown-menu -->

                </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

                <!-- Dropdown -->
                <div class="dropdown me-4 d-none d-md-flex">

                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon active">
            <i class="fe fe-bell"></i>
          </span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                        <div class="card-header">

                            <!-- Title -->
                            <h5 class="card-header-title">
                                Notifications
                            </h5>

                            <!-- Link -->
                            <a href="#!" class="small">
                                View all
                            </a>

                        </div> <!-- / .card-header -->
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                                                and 3 others.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Adolfo Hess</strong> commented
                                                <blockquote class="mb-0">
                                                    “I don’t think this really makes sense to do without approval from Johnathan
                                                    since he’s the one...”
                                                </blockquote>
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ryu Duke</strong> reacted to your post with a 😍
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Glen Rouse</strong> commented
                                                <blockquote class="mb-0">
                                                    “I don’t think this really makes sense to do without approval from Johnathan
                                                    since he’s the one...”
                                                </blockquote>
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ms-n2">

                                            <!-- Content -->
                                            <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </div>

                <!-- Dropdown -->
                <div class="dropdown">

                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar-title rounded-circle">CF</span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="./account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">

                        <a href="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}"  class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('instance.logout',['instance' => \Instantiation::instance()]) }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </nav>

    <!-- HEADER -->
    <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">

                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            @yield('pretitle')
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            @yield('title')
                        </h1>

                    </div>
                    <div class="col-auto">

                        @yield('options')

                    </div>
                </div> <!-- / .row -->

                @yield('tabs')

            </div> <!-- / .header-body -->

        </div>
    </div> <!-- / .header -->

    <!-- CARDS -->
    <div class="container-fluid">

        @yield('content')

        {{--

        <div class="row">
            <div class="col-12 col-lg-6 col-xl">

                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Value
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      $24,500
                    </span>

                                <!-- Badge -->
                                <span class="badge bg-success-soft mt-n1">
                      +3.5%
                    </span>
                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Hours -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Total hours
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      763.5
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Exit -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Exit %
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      35.5%
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Chart -->
                                <div class="chart chart-sparkline">
                                    <canvas class="chart-canvas" id="sparklineChart"></canvas>
                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Time -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Avg. Time
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      2:37
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-clock text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Convertions -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Conversions
                        </h4>

                        <!-- Caption -->
                        <span class="text-muted me-3">
                  Last year comparision:
                </span>

                        <!-- Switch -->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="cardToggle" data-toggle="chart" data-target="#conversionsChart" data-trigger="change" data-action="add" data-dataset="1" />
                            <label class="form-check-label" for="cardToggle"></label>
                        </div>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="conversionsChart" class="chart-canvas"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">

                <!-- Traffic -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Traffic Channels
                        </h4>

                        <!-- Tabs -->
                        <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                            <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                                <a href="#" class="nav-link active" data-bs-toggle="tab">
                                    All
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                                <a href="#" class="nav-link" data-bs-toggle="tab">
                                    Direct
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart chart-appended">
                            <canvas id="trafficChart" class="chart-canvas" data-toggle="legend" data-target="#trafficChartLegend"></canvas>
                        </div>

                        <!-- Legend -->
                        <div id="trafficChartLegend" class="chart-legend"></div>

                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-4">

                <!-- Projects -->
                <div class="card card-fill">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Projects
                        </h4>

                        <!-- Link -->
                        <a href="project-overview.html" class="small">View all</a>

                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="project-overview.html" class="avatar avatar-4by3">
                                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="project-overview.html">Homepage Redesign</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="project-overview.html" class="avatar avatar-4by3">
                                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="project-overview.html">Travels & Time</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="project-overview.html" class="avatar avatar-4by3">
                                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="project-overview.html">Safari Exploration</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="project-overview.html" class="avatar avatar-4by3">
                                            <img src="assets/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="project-overview.html">Personal Site</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->
            </div>
            <div class="col-12 col-xl-8">

                <!-- Sales -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Sales
                        </h4>

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                            <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="0">
                                <a class="nav-link active" href="#" data-bs-toggle="tab">
                                    All
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="1">
                                <a class="nav-link" href="#" data-bs-toggle="tab">
                                    Direct
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="2">
                                <a class="nav-link" href="#" data-bs-toggle="tab">
                                    Organic
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="salesChart" class="chart-canvas"></canvas>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Goals
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    Export
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-project">
                                        Goal
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-progress">
                                        Progress
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-date">
                                        Due date
                                    </a>
                                </th>
                                <th class="text-end">
                                    Team
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td class="goal-project">
                                    Update the API
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    55%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">07/24/18</time>
                                </td>
                                <td class="text-end">
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Release v1.2-Beta
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    25%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">08/26/18</time>
                                </td>
                                <td class="text-end">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    GDPR Compliance
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/19/18</time>
                                </td>
                                <td class="text-end">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    v1.2 Documentation
                                </td>
                                <td class="goal-status">
                                    <span class="text-danger">●</span> Cancelled
                                </td>
                                <td class="goal-progress">
                                    0%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/25/18</time>
                                </td>
                                <td class="text-end">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fe fe-more-vertical"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Plan design offsite
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/30/18</time>
                                </td>
                                <td class="text-end">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-5">

                <!-- Activity -->
                <div class="card card-fill">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Recent Activity
                        </h4>

                        <!-- Button -->
                        <a class="small" href="#!">View all</a>

                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dianna Smiley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files "Launchday Logo" and "New Design".
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Ab Hadley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Shared the "Why Dashkit?" post with 124 subscribers.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            1h ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-offline">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Adolfo Hess
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Exported sales data from Launchday's subscriber data.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            3h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-7">

                <!-- Checklist -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Scratchpad Checklist
                        </h4>

                        <!-- Badge -->
                        <span class="badge bg-secondary-soft">
                  23 Archived
                </span>

                    </div>
                    <div class="card-body">

                        <!-- Checklist -->
                        <div class="checklist">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistOne">
                                <label class="form-check-label">Delete the old mess in functions files.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistTwo">
                                <label class="form-check-label">Refactor the core social sharing modules.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistThree">
                                <label class="form-check-label">Create the release notes for the new pages so customers get psyched.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistFour">
                                <label class="form-check-label">Send Dianna those meeting notes.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistFive">
                                <label class="form-check-label">Share the documentation for the new unified API.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checklistSix" checked>
                                <label class="form-check-label">Clean up the Figma file with all of the avatars, buttons, and other
                                    components.</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Input -->
                                <textarea class="form-control form-control-flush form-control-auto" data-autosize rows="1" placeholder="Create a task"></textarea>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <button class="btn btn-sm btn-primary">
                                    Add
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->

        --}}
    </div>

</div><!-- / .main-content -->

<!-- JAVASCRIPT -->
<!-- Map JS -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Vendor JS -->
<script src="{{ asset('dist/js/vendor.bundle.js')}}"></script>

<!-- Theme JS -->
<script src="{{ asset('dist/js/theme.bundle.js')}}"></script>

</body>
</html>


{{--

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Software libre para la gestión de evidencias de trabajo en jornadas docentes" />

    <title>@yield('title') | Evidentia Cloud</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.css')}}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css')}}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- Filepond -->
    <link rel="stylesheet" href="{{ asset('dist/css/filepond.css') }}" >

    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}" >

    <!-- Own style -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}" >

</head>



<body class="hold-transition sidebar-mini layout-navbar-fixed">

<div class="wrapper">

    @auth
        @if(Request::is('admin') || Request::is('admin/*'))
            <x-navbars.navbaradmin/>
        @else
            <x-navbars.navbarcommon/>
        @endif
    @endauth

    @guest
        <x-navbars.navbarguest/>
    @endguest

    <aside class="main-sidebar sidebar-dark-lightblue">

        <x-lilogo/>

        <div class="sidebar">

            <x-menus.menuguest/>

            @auth

                <div class="user-panel d-flex">
                    <div class="info" >
                        <p style="color: #D0D4DA; margin: 0px; font-size: 15px">
                            {{Auth::user()->surname}},
                            <br>
                            {{Auth::user()->name}}
                        </p>
                    </div>
                </div>

                @if(Request::is('admin') || Request::is('admin/*'))

                    <x-menus.menuadmin/>

                @else

                    <x-liavatar/>

                    <x-menus.menucommon/>
                    <x-menus.menusecretary/>
                    <x-menus.menucoordinator/>
                    <x-menus.menuregistercoordinator/>
                    <x-menus.menupresident/>
                    <x-menus.menustudent/>
                    <x-menus.menulecture/>

                    <x-menus.menuoptions/>

                @endif

            @endauth

        </div>

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding: 0px 8px">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <ol class="breadcrumb mb-2">
                            @section('breadcrumb')
                            @show
                        </ol>
                        <h1 class="m-0 text-dark"><i class="@yield('title-icon')"></i>&nbsp;&nbsp;@yield('title')</h1>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Hecho con <i class="fas fa-heart"></i>
        </div>
        <!-- Default to the left -->
        VERSIÓN {{env('EVIDENTIA_VERSION','')}} · GNU/GPL 3.0 · <a href="https://github.com/drorganvidez/evidentia"><i class="fab fa-github"></i> Repositorio en GitHub</a>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- Selectors -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- BS-Stepper -->
<script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>

<!-- File Input -->
<!-- <link href="{{asset('dist/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css" /> -->
<!-- <link href="{{asset('dist/themes/explorer/theme.css')}}" media="all" rel="stylesheet" type="text/css" /> -->

<!-- Handlebars -->
<script src="{{asset('dist/js/handlebars-v4.7.7.js')}}" type="text/javascript"></script>

<script src="{{asset('dist/js/plugins/piexif.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dist/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dist/js/plugins/purify.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{asset('dist/js/fileinput.js')}}"></script>
<script src="{{asset('dist/themes/fas/theme.js')}}"></script>
<script src="{{asset('dist/themes/explorer/theme.js')}}"></script>
<script src="{{asset('dist/js/fileinput_locales/es.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.js')}}"></script>



<script>


    $(document).ready(function(){

        /*
        $('.knob').knob()


        $('tableSelector').DataTable({
            "dom": '<"pull-left"f><"pull-right"l>tip'
        });
         */

        $('table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });

        $('.todo-list').sortable({
            placeholder: 'sort-highlight',
            handle: '.handle',
            forcePlaceholderSize: true,
            zIndex: 999999
        })

        // Esto sirve para inicializar funcionalidades especiales JavaScript

        $(function () {
            // Summernote
            $('.textarea').summernote({
                height: 150,
                minHeight: 150
            })
        })


        $('#summernote').summernote({
            //placeholder: 'Incluye una breve descripción de tu evidencia',
            height: 300,
            minHeight: 300
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('.select2').select2()

        //Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Bootstrap Duallistbox
        var demo = $('.duallistbox').bootstrapDualListbox();
        demo.bootstrapDualListbox('setSelectOrMinimalHeight',200);

    });

    // estados
    @if (session('success'))

        $(document).Toasts('create', {
            title: '¡Felicidades!',
            icon: 'fas fa-check-circle',
            class: 'bg-success',
            autohide: true,
            delay: 7000,
            body: '{!!  session("success") !!}'
        });

    @endif

    @if (session('error'))

        $(document).Toasts('create', {
            title: '¡Error!',
            icon: 'icon fas fa-ban',
            class: 'bg-danger',
            autohide: true,
            delay: 7000,
            body: '{!!  session("error") !!}'
        });

    @endif

    @if (session('warning'))

        $(document).Toasts('create', {
            title: '¡Aviso!',
            icon: 'icon fas fa-ban',
            class: 'bg-danger',
            autohide: true,
            delay: 7000,
            body: '{!!  session("warning") !!}'
        });

    @endif

    @if (session('light'))

        $(document).Toasts('create', {
            title: 'Restablecer contraseña',
            icon: 'fas fa-info',
            class: 'bg-light',
            autohide: true,
            delay: 7000,
            body: '{!!  session("light") !!}'
        });

    @endif


    $(".filepond--file-wrapper").on('click', '.filepond--file-action-button.filepond--action-revert-item-processing', function () {
        console.log("asdfasjdf ñlasjdfalsdjfa sdfaa");
    });

    $('.filepond--action-revert-item-processing').on('click',function(){
        printData();
    })

    function make_id(length) {
        var result           = '';
        var characters       = '123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
        }
        return result;
    }

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function countdown(distance){

        var distance_int = parseInt(distance);

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Time calculations for days, hours, minutes and seconds
            var seconds = parseInt(distance_int, 10);

            var days = Math.floor(seconds / (3600*24));
            seconds  -= days*3600*24;
            var hrs   = Math.floor(seconds / 3600);
            seconds  -= hrs*3600;
            var mnts = Math.floor(seconds / 60);
            seconds  -= mnts*60;

            document.getElementById("countdown").innerHTML = days+" días, "+hrs+" horas, "+mnts+" minutos y" +
                " "+seconds+" segundos";

            $(".countdown_container").fadeIn();

            // If the count down is over, write some text
            if (distance_int < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "Tiempo finalizado";
            }

            distance_int = distance_int-1;

        }, 1000);
    }

</script>

<script src="{{asset('dist/js/filepond-plugin-file-validate-size.js')}}"></script>
<script src="{{asset('dist/js/filepond-plugin-file-validate-type.js')}}"></script>
<script src="{{asset('dist/js/filepond.js')}}"></script>

@yield('scripts')

</body>

</html>

--}}
