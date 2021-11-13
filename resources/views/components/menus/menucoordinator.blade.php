@if(\Illuminate\Support\Facades\Auth::user()->hasRole('COORDINATOR'))

    <!-- Heading -->
    <h6 class="navbar-heading">
        Comité
    </h6>

    <ul class="navbar-nav">

        <x-li route="coordinator.evidence.list.all"
              secondaries="coordinator.evidence.view,coordinator.evidence.list.all,coordinator.evidence.list.pending,coordinator.evidence.list.accepted,coordinator.evidence.list.rejected"
              icon='fe fe-trello' name="Gestionar evidencias"/>

        <x-li route="suggestionsmailbox" icon='fe fe-trello' name="Gestionar tareas"></x-li>
        <x-li route="suggestionsmailbox" icon='fe fe-trello' name="Gestionar comité"></x-li>

    </ul>

    <!-- Divider -->
    <hr class="navbar-divider my-3">

@endif

