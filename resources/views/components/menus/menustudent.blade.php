@if(\Illuminate\Support\Facades\Auth::user()->hasRole('STUDENT'))

    <!-- Heading -->
    <h6 class="navbar-heading">
        Mis cosas
    </h6>

    <ul class="navbar-nav">

        @if(!\Carbon\Carbon::now()->gt(\Config::upload_evidences_timestamp()))
            <x-li route="evidence.create" icon='fe fe-plus-circle' name="Crear evidencia"></x-li>
        @endif
        <x-li route="evidence.list" secondaries="evidence.view,evidence.edit" icon='fe fe-briefcase' name="Mis evidencias"></x-li>
        <x-li route="meeting.list" icon='fe fe-users' name="Mis reuniones"></x-li>
        <x-li route="attendee.list" icon='fe fe-book-open' name="Mis asistencias"></x-li>

    </ul>

@endif

<!-- Divider -->
<hr class="navbar-divider my-3">
