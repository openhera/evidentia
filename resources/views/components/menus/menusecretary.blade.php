@if(\Illuminate\Support\Facades\Auth::user()->hasRole('SECRETARY'))

    <!-- Heading -->
    <h6 class="navbar-heading">
        Reuniones y bonos
    </h6>

    <ul class="navbar-nav">

        <x-li route="secretary.meeting.manage" icon='fe fe-edit-3' name="Gestionar reuniones" secondaries="secretary.meeting.manage.request.create,secretary.meeting.manage.request.list,secretary.meeting.manage.signaturesheet.create,secretary.meeting.manage.signaturesheet.list,secretary.meeting.manage.minutes.list,secretary.meeting.manage.minutes.create,secretary.meeting.manage.minutes.create.step1,secretary.meeting.manage.minutes.create.step2,secretary.meeting.manage.minutes.create.step3,secretary.meeting.manage.minutes.edit,secretary.meeting.manage.signaturesheet.view,secretary.meeting.manage.request.edit,secretary.meeting.manage.signaturesheet.edit"></x-li>
        <x-li route="secretary.bonus.list" secondaries="secretary.bonus.create,secretary.bonus.edit" icon='fe fe-gift' name="Gestionar bonos"></x-li>
        <x-li route="secretary.defaultlist.list" secondaries="secretary.defaultlist.create,secretary.defaultlist.edit" icon='fe fe-list' name="Gestionar listas"></x-li>

    </ul>

    <!-- Divider -->
    <hr class="navbar-divider my-3">

@endif

