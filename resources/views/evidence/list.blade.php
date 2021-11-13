@extends('layouts.app')

@section('pretitle', 'Comprueba el estado')
@section('title', 'Mis evidencias')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/{{$instance}}">Home</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('tabs')
    <div class="row align-items-center">
        <div class="col">

            <!-- Nav -->
            <ul class="nav nav-tabs nav-overflow header-tabs">
                <li class="nav-item">
                    <a href="project-overview.html" class="nav-link active">
                        Todas
                        <span class="badge rounded-pill bg-secondary-soft">823</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="project-files.html" class="nav-link">
                        Aceptadas
                        <span class="badge rounded-pill bg-secondary-soft">823</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="project-reports.html" class="nav-link">
                        Rechazadas
                        <span class="badge rounded-pill bg-secondary-soft">823</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="project-reports.html" class="nav-link">
                        Pendientes
                        <span class="badge rounded-pill bg-secondary-soft">823</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="contactsListPane" role="tabpanel" aria-labelledby="contactsListTab">

                    <!-- Card -->
                    <div class="card" data-list="{&quot;valueNames&quot;: [&quot;item-name&quot;, &quot;item-title&quot;, &quot;item-email&quot;, &quot;item-phone&quot;, &quot;item-score&quot;, &quot;item-company&quot;], &quot;page&quot;: 10, &quot;pagination&quot;: {&quot;paginationClass&quot;: &quot;list-pagination&quot;}}" id="contactsList">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Form -->
                                    <form>
                                        <div class="input-group input-group-flush input-group-merge input-group-reverse">
                                            <input class="form-control list-search" type="search" placeholder="Buscar">
                                            <span class="input-group-text">
                              <i class="fe fe-search"></i>
                            </span>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-auto me-n3">

                                    <!-- Select -->
                                    <form>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm form-control-flush"><select class="form-select form-select-sm form-control-flush form-control" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="10 per page">10 per page</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="10 per page" data-custom-properties="null" aria-selected="true">10 per page</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="5 per page" role="option" aria-selected="true">
                                                        5 per page
                                                    </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="10 per page" role="option">
                                                        10 per page
                                                    </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="3" data-value="All" role="option">
                                                        All
                                                    </div></div></div></div>
                                    </form>

                                </div>
                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">

                                        <!-- Toggle -->
                                        <button class="btn btn-sm btn-white" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-sliders me-1"></i> Filter <span class="badge bg-primary ms-1 d-none">0</span>
                                        </button>

                                        <!-- Menu -->
                                        <form class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                                            <div class="card-header">

                                                <!-- Title -->
                                                <h4 class="card-header-title">
                                                    Filters
                                                </h4>

                                                <!-- Link -->
                                                <button class="btn btn-sm btn-link text-reset d-none" type="reset">
                                                    <small>Clear filters</small>
                                                </button>

                                            </div>
                                            <div class="card-body">

                                                <!-- List group -->
                                                <div class="list-group list-group-flush mt-n4 mb-4">
                                                    <div class="list-group-item">
                                                        <div class="row">
                                                            <div class="col">

                                                                <!-- Text -->
                                                                <small>Title</small>

                                                            </div>
                                                            <div class="col-auto">

                                                                <!-- Select -->
                                                                <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm"><select class="form-select form-select-sm form-control" name="item-title" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="*">Any</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="*" data-custom-properties="null" aria-selected="true">Any</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="*" role="option" aria-selected="true">
                                                                                Any
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="Designer" role="option">
                                                                                Designer
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="3" data-value="Developer" role="option">
                                                                                Developer
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="4" data-value="Owner" role="option">
                                                                                Owner
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="5" data-value="Founder" role="option">
                                                                                Founder
                                                                            </div></div></div></div>

                                                            </div>
                                                        </div> <!-- / .row -->
                                                    </div>
                                                    <div class="list-group-item">
                                                        <div class="row">
                                                            <div class="col">

                                                                <!-- Text -->
                                                                <small>Lead scrore</small>

                                                            </div>
                                                            <div class="col-auto">

                                                                <!-- Select -->
                                                                <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm"><select class="form-select form-select-sm form-control" name="item-score" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="*">Any</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="*" data-custom-properties="null" aria-selected="true">Any</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="*" role="option" aria-selected="true">
                                                                                Any
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="1/10" role="option">
                                                                                1+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="3" data-value="2/10" role="option">
                                                                                2+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="4" data-value="3/10" role="option">
                                                                                3+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="5" data-value="4/10" role="option">
                                                                                4+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="6" data-value="5/10" role="option">
                                                                                5+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="7" data-value="6/10" role="option">
                                                                                6+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="8" data-value="7/10" role="option">
                                                                                7+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="9" data-value="8/10" role="option">
                                                                                8+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="10" data-value="9/10" role="option">
                                                                                9+
                                                                            </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="11" data-value="10/10" role="option">
                                                                                10
                                                                            </div></div></div></div>

                                                            </div>
                                                        </div> <!-- / .row -->
                                                    </div>
                                                </div>

                                                <!-- Button -->
                                                <button class="btn w-100 btn-primary" type="submit">
                                                    Apply filter
                                                </button>

                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>

                                        <!-- Checkbox -->
                                        <div class="form-check mb-n2">
                                            <input class="form-check-input list-checkbox-all" id="listCheckboxAll" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxAll"></label>
                                        </div>

                                    </th>
                                    <th>
                                        <a class="list-sort text-muted" data-sort="item-name" href="#">Name</a>
                                    </th>
                                    <th>
                                        <a class="list-sort text-muted" data-sort="item-title" href="#">Job title</a>
                                    </th>
                                    <th>
                                        <a class="list-sort text-muted" data-sort="item-email" href="#">Email</a>
                                    </th>
                                    <th>
                                        <a class="list-sort text-muted" data-sort="item-phone" href="#">Phone</a>
                                    </th>
                                    <th>
                                        <a class="list-sort text-muted" data-sort="item-score" href="#">Lead score</a>
                                    </th>
                                    <th colspan="2">
                                        <a class="list-sort text-muted" data-sort="item-company" href="#">Company</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list fs-base">



                                <tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxOne" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxOne"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Dianna Smiley</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Designer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">diana.smiley@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-4890">(988) 568-3568</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-danger-soft">1/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Twitter</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxTwo" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxTwo"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Ab Hadley</a>

                                    </td>
                                    <td class="">

                                        <!-- Text -->
                                        <span class="item-title">Developer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">ab.hadley@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(650) 430-9876</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-success-soft">8/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Google</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxThree" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxThree"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Adolfo Hess</a>

                                    </td>
                                    <td class="">

                                        <!-- Text -->
                                        <span class="item-title">Owner</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">adolfo.hess@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(968) 682-1364</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-success-soft">7/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Google</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxFour" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxFour"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-4.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Daniela Dewitt</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Designer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">daniela.dewitt@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-489">(650) 430-9876</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-warning-soft">4/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Twitch</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxFive" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxFive"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-5.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Miyah Myles</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Founder</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">miyah.myles@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(935) 165-8435</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-danger-soft">3/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Facebook</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxSix" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxSix"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-6.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Ryu Duke</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Designer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">ryu.duke@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(937) 596-0152</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-warning-soft">6/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Netflix</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxSeven" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxSeven"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-7.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Glen Rouse</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Designer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">glen.rouse@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(689) 798-4635</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-success-soft">9/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Netflix</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxEight" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxEight"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Daniela Dewitt</a>

                                    </td>
                                    <td>

                                        <!-- Text -->
                                        <span class="item-title">Developer</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">daniela.dewitt@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(937) 568-8946</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-success-soft">7/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Uber</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxNine" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxNine"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Adolfo Hess</a>

                                    </td>
                                    <td class="">

                                        <!-- Text -->
                                        <span class="item-title">Founder</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">adolfo.hess@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-7890">(568) 498-0365</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-success-soft">10/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Amazon</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr><tr>
                                    <td>

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input list-checkbox" id="listCheckboxTen" type="checkbox">
                                            <label class="form-check-label" for="listCheckboxTen"></label>
                                        </div>

                                    </td>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs align-middle me-2">
                                            <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                                        </div> <a class="item-name text-reset" href="profile-posts.html">Glen Rouse</a>

                                    </td>
                                    <td class="">

                                        <!-- Text -->
                                        <span class="item-title">Owner</span>

                                    </td>
                                    <td>

                                        <!-- Email -->
                                        <a class="item-email text-reset" href="mailto:john.doe@company.com">glen.rouse@company.com</a>

                                    </td>
                                    <td>

                                        <!-- Phone -->
                                        <a class="item-phone text-reset" href="tel:1-123-456-67890">(968) 135-6458</a>

                                    </td>
                                    <td>

                                        <!-- Badge -->
                                        <span class="item-score badge bg-warning-soft">6/10</span>

                                    </td>
                                    <td>

                                        <!-- Link -->
                                        <a class="item-company text-reset" href="team-overview.html">Twitch</a>

                                    </td>
                                    <td class="text-end">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </tr></tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-between">

                            <!-- Pagination (prev) -->
                            <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                <li class="page-item">
                                    <a class="page-link ps-0 pe-4 border-end" href="#">
                                        <i class="fe fe-arrow-left me-1"></i> Prev
                                    </a>
                                </li>
                            </ul>

                            <!-- Pagination -->
                            <ul class="list-pagination pagination pagination-tabs card-pagination"><li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li><li><a class="page" href="#" data-i="2" data-page="10">2</a></li><li><a class="page" href="#" data-i="3" data-page="10">3</a></li></ul>

                            <!-- Pagination (next) -->
                            <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                <li class="page-item">
                                    <a class="page-link ps-4 pe-0 border-start" href="#">
                                        Next <i class="fe fe-arrow-right ms-1"></i>
                                    </a>
                                </li>
                            </ul>

                            <!-- Alert -->
                            <div class="list-alert alert alert-dark alert-dismissible border fade" role="alert">

                                <!-- Content -->
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" id="listAlertCheckbox" type="checkbox" checked="" disabled="">
                                            <label class="form-check-label text-white" for="listAlertCheckbox">
                                                <span class="list-alert-count">0</span> deal(s)
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-auto me-n3">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-white-20">
                                            Edit
                                        </button>

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-white-20">
                                            Delete
                                        </button>

                                    </div>
                                </div> <!-- / .row -->

                                <!-- Close -->
                                <button type="button" class="list-alert-close btn-close" aria-label="Close"></button>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="contactsCardsPane" role="tabpanel" aria-labelledby="contactsCardsTab">

                    <!-- Cards -->
                    <div data-list="{&quot;valueNames&quot;: [&quot;item-name&quot;, &quot;item-title&quot;, &quot;item-email&quot;, &quot;item-phone&quot;, &quot;item-score&quot;, &quot;item-company&quot;], &quot;page&quot;: 9, &quot;pagination&quot;: {&quot;paginationClass&quot;: &quot;list-pagination&quot;}}" id="contactsCards">

                        <!-- Header -->
                        <div class="row align-items-center mb-4">
                            <div class="col">

                                <!-- Form -->
                                <form>
                                    <div class="input-group input-group-lg input-group-merge input-group-reverse">
                                        <input class="form-control list-search" type="search" placeholder="Search">
                                        <span class="input-group-text">
                            <i class="fe fe-search"></i>
                          </span>
                                    </div>
                                </form>

                            </div>
                            <div class="col-auto me-n3">

                                <!-- Select -->
                                <form>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm form-control-flush"><select class="form-select form-select-sm form-control-flush form-control" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="9 per page">9 per page</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="9 per page" data-custom-properties="null" aria-selected="true">9 per page</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="9 per page" role="option" aria-selected="true">
                                                    9 per page
                                                </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="All" role="option">
                                                    All
                                                </div></div></div></div>
                                </form>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">

                                    <!-- Toggle -->
                                    <button class="btn btn-sm btn-white" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-sliders me-1"></i> Filter <span class="badge bg-primary ms-1 d-none">0</span>
                                    </button>

                                    <!-- Menu -->
                                    <form class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                                        <div class="card-header">

                                            <!-- Title -->
                                            <h4 class="card-header-title">
                                                Filters
                                            </h4>

                                            <!-- Link -->
                                            <button class="btn btn-sm btn-link text-reset d-none" type="reset">
                                                <small>Clear filters</small>
                                            </button>

                                        </div>
                                        <div class="card-body">

                                            <!-- List group -->
                                            <div class="list-group list-group-flush mt-n4 mb-4">
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">

                                                            <!-- Text -->
                                                            <small>Title</small>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Select -->
                                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm"><select class="form-select form-select-sm form-control" name="item-title" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="*">Any</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="*" data-custom-properties="null" aria-selected="true">Any</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="*" role="option" aria-selected="true">
                                                                            Any
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="Designer" role="option">
                                                                            Designer
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="3" data-value="Developer" role="option">
                                                                            Developer
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="4" data-value="Owner" role="option">
                                                                            Owner
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="5" data-value="Founder" role="option">
                                                                            Founder
                                                                        </div></div></div></div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">

                                                            <!-- Text -->
                                                            <small>Lead scrore</small>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Select -->
                                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select form-select-sm"><select class="form-select form-select-sm form-control" name="item-score" data-choices="{&quot;searchEnabled&quot;: false}" hidden="" tabindex="-1" data-choice="active"><option value="*">Any</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="*" data-custom-properties="null" aria-selected="true">Any</div></div></div><div class="choices__list dropdown-menu" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item dropdown-item choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="1" data-value="*" role="option" aria-selected="true">
                                                                            Any
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="2" data-value="1/10" role="option">
                                                                            1+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="3" data-value="2/10" role="option">
                                                                            2+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="4" data-value="3/10" role="option">
                                                                            3+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="5" data-value="4/10" role="option">
                                                                            4+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="6" data-value="5/10" role="option">
                                                                            5+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="7" data-value="6/10" role="option">
                                                                            6+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="8" data-value="7/10" role="option">
                                                                            7+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="9" data-value="8/10" role="option">
                                                                            8+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="10" data-value="9/10" role="option">
                                                                            9+
                                                                        </div><div class="choices__item dropdown-item choices__item--selectable" data-select-text="Press to select" data-choice="" data-choice-selectable="" data-id="11" data-value="10/10" role="option">
                                                                            10
                                                                        </div></div></div></div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <button class="btn w-100 btn-primary" type="submit">
                                                Apply filter
                                            </button>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Body -->
                        <div class="list row"><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxOne">
                                                    <label class="form-check-label" for="cardsCheckboxOne"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Dianna Smiley</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Designer</span> at <span class="item-company">Twitter</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Twitter</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-danger-soft">1/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxTwo">
                                                    <label class="form-check-label" for="cardsCheckboxTwo"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Ab Hadley</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Developer</span> at <span class="item-company">Google</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Google</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-success-soft">8/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckBoxThree">
                                                    <label class="form-check-label" for="cardsCheckBoxThree"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Adolfo Hess</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Owner</span> at <span class="item-company">Google</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Google</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-success-soft">7/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxFour">
                                                    <label class="form-check-label" for="cardsCheckboxFour"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Daniela Dewitt</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Designer</span> at <span class="item-position">Twitch</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Twitch</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-warning-soft">4/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxFive">
                                                    <label class="form-check-label" for="cardsCheckboxFive"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Miyah Myles</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Founder</span> at <span class="item-company">Facebook</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Facebook</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-danger-soft">3/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckBoxSix">
                                                    <label class="form-check-label" for="cardsCheckBoxSix"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-6.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Ryu Duke</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Owner</span> at <span class="item-company">Netflix</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Netflix</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-warning-soft">6/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxSeven">
                                                    <label class="form-check-label" for="cardsCheckboxSeven"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-7.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Glen Rouse</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Designer</span> at <span class="item-position">Netflix</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Netflix</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-success-soft">9/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxEight">
                                                    <label class="form-check-label" for="cardsCheckboxEight"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Miyah Myles</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Designer</span> at <span class="item-company">Google</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Google</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-success-soft">10/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><div class="col-12 col-md-6 col-xl-4">

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Header -->
                                        <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Checkbox -->
                                                <div class="form-check form-check-circle">
                                                    <input class="form-check-input list-checkbox" type="checkbox" id="cardsCheckboxNine">
                                                    <label class="form-check-label" for="cardsCheckboxNine"></label>
                                                </div>

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

                                        <!-- Image -->
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>

                                        <!-- Body -->
                                        <div class="text-center mb-5">

                                            <!-- Heading -->
                                            <h2 class="card-title">
                                                <a class="item-name" href="profile-posts.html">Ryu Duke</a>
                                            </h2>

                                            <!-- Text -->
                                            <p class="small text-muted mb-3">
                                                <span class="item-title">Developer</span> at <span class="item-company">Microsoft</span>
                                            </p>

                                            <!-- Buttons -->
                                            <a class="btn btn-sm btn-white" href="tel:1-123-456-7890">
                                                <i class="fe fe-phone me-1"></i> Call
                                            </a>
                                            <a class="btn btn-sm btn-white" href="mailto:john.doe@company.com">
                                                <i class="fe fe-mail me-1"></i> Email
                                            </a>

                                        </div>

                                        <!-- Divider -->
                                        <hr class="card-divider mb-0">

                                        <!-- List group -->
                                        <div class="list-group list-group-flush mb-n3">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Company</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Text -->
                                                        <small>Microsoft</small>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col">

                                                        <!-- Text -->
                                                        <small>Lead Score</small>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Badge -->
                                                        <span class="item-score badge bg-warning-soft">6/10</span>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div></div>

                        <!-- Pagination -->
                        <div class="row g-0">

                            <!-- Pagination (prev) -->
                            <ul class="col list-pagination-prev pagination pagination-tabs justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fe fe-arrow-left me-1"></i> Prev
                                    </a>
                                </li>
                            </ul>

                            <!-- Pagination -->
                            <ul class="col list-pagination pagination pagination-tabs justify-content-center"><li class="active"><a class="page" href="#" data-i="1" data-page="9">1</a></li><li><a class="page" href="#" data-i="2" data-page="9">2</a></li></ul>

                            <!-- Pagination (next) -->
                            <ul class="col list-pagination-next pagination pagination-tabs justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        Next <i class="fe fe-arrow-right ms-1"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <!-- Alert -->
                        <div class="list-alert alert alert-dark alert-dismissible border fade" role="alert">

                            <!-- Content -->
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" id="cardAlertCheckbox" type="checkbox" checked="" disabled="">
                                        <label class="form-check-label text-white" for="cardAlertCheckbox">
                                            <span class="list-alert-count">0</span> deal(s)
                                        </label>
                                    </div>

                                </div>
                                <div class="col-auto me-n3">

                                    <!-- Button -->
                                    <button class="btn btn-sm btn-white-20">
                                        Edit
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-sm btn-white-20">
                                        Delete
                                    </button>

                                </div>
                            </div> <!-- / .row -->

                            <!-- Close -->
                            <button type="button" class="list-alert-close btn-close" aria-label="Close">

                            </button>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataset" class="table table-hover table-responsive">
                        <thead>
                        <tr>
                            <th class="d-none d-sm-none d-md-table-cell d-lg-table-cell">ID</th>
                            <th>Título</th>
                            <th class="d-none d-sm-none d-md-table-cell d-lg-table-cell">Horas</th>
                            <th class="d-none d-sm-none d-md-table-cell d-lg-table-cell">Comité</th>
                            <th class="d-none d-sm-none d-md-table-cell d-lg-table-cell">Creada</th>
                            <th class="d-none d-sm-none d-md-table-cell d-lg-table-cell">Estado</th>
                            <th>Herramientas</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($evidences as $evidence)
                            <tr>
                                <td class="d-none d-sm-none d-md-table-cell d-lg-table-cell">{{$evidence->id}}</td>
                                <td><a href="{{route('evidence.view',['instance' => $instance, 'id' => $evidence->id])}}">{{$evidence->title}}</a></td>
                                <td class="d-none d-sm-none d-md-table-cell d-lg-table-cell">{{$evidence->hours}}</td>
                                <td class="d-none d-sm-none d-md-table-cell d-lg-table-cell">
                                    <x-evidencecomittee :evidence="$evidence"/>
                                </td>
                                <td class="d-none d-sm-none d-md-table-cell d-lg-table-cell"> {{ \Carbon\Carbon::parse($evidence->created_at)->diffForHumans() }} </td>
                                <td class="d-none d-sm-none d-md-table-cell d-lg-table-cell">
                                    <x-evidencestatus :evidence="$evidence"/>
                                </td>

                                <td class="align-middle">
                                    <x-evidenceoptionsstudent :evidence="$evidence"/>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <div class="callout callout-info">
                        <h4>

                            Fecha límite de subidas

                        </h4>

                        <h4>

                            <i class="fas fa-stopwatch"></i>

                            {{\Carbon\Carbon::parse(Config::upload_evidences_timestamp())->format('d/m/Y')}}

                            a las

                            {{\Carbon\Carbon::parse(Config::upload_evidences_timestamp())->format('H:i')}}

                        </h4>

                        <div class="countdown_container" style="display: none">

                            <p>

                                Te quedan

                                <b>
                                    <span id="countdown"></span>
                                </b>

                                para subir evidencias.

                            </p>

                        </div>



                    </div>

                    <div id="accordion">

                        <div class="card card-light">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#acercade" aria-expanded="false">
                                        Acerca de la validación de evidencias
                                    </a>
                                </h4>
                            </div>
                            <div id="acercade" class="collapse" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <p class="text-justify">Todas las evidencias de las jornadas tienen que ser validadas por los respectivos
                                        coordinadores de cada comité.</p>

                                    <p class="text-justify">
                                        Considera que el coordinador de tu comité tiene que valorar tus evidencias y eso
                                        requiere un tiempo.

                                        En caso de que alguna sea rechazada, ten en cuenta que existe un tiempo adicional
                                        desde que modificas tu evidencia y la mandas
                                        hasta que el coordinador la valida.
                                    </p>

                                    <p class="text-justify">
                                        Te recomendamos que no apures al máximo la subida de tus evidencias para que al coordinador
                                        le dé tiempo a subsanar cualquier posible error dentro de plazo.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

    @section('scripts')

        <script>

            $(document).ready(function(){
                countdown("{{\Carbon\Carbon::create(\Carbon\Carbon::now())->diffInSeconds(Config::upload_evidences_timestamp(),false)}}");
            });

        </script>

    @endsection

@endsection
