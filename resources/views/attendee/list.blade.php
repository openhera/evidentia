@extends('layouts.app')

@section('title', 'Mis asistencias')

@section('title-icon', 'fas fa-hiking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/{{$instance}}">Home</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">
                    <table id="dataset" class="table table-hover table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Evento</th>
                            <th scope="col">Horas</th>
                            <th scope="col">Fecha de inicio</th>
                            <th scope="col">Fecha de fin</th>
                            <th scope="col">Asistencia</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($attendees as $attendee)
                            <tr scope="row">
                                <td><a href="{{$attendee->event->url}}" target="_blank">{!! $attendee->event->name !!}</a></td>
                                <td>{{$attendee->event->hours}}</td>
                                <td>{{ \Carbon\Carbon::parse($attendee->event->start_datetime) }}</td>
                                <td>{{ \Carbon\Carbon::parse($attendee->event->end_datetime) }}</td>
                                <td><x-attendeestatus :attendee="$attendee"/></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm">

                <div class="card-body">

                    <div class="callout callout-info">
                        <h4>

                            Fecha límite para el registro de eventos y asistencias

                        </h4>

                        <h4>

                            <i class="fas fa-stopwatch"></i>

                            {{\Carbon\Carbon::parse(Config::attendee_timestamp())->format('d/m/Y')}}

                            a las

                            {{\Carbon\Carbon::parse(Config::attendee_timestamp())->format('H:i')}}

                        </h4>

                        <div class="countdown_container" style="display: none">

                            <p>

                                Quedan

                                <b>
                                    <span id="countdown"></span>
                                </b>

                                para registrar eventos y asistencias desde Eventbrite.

                            </p>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@section('scripts')

    <script>

        $(document).ready(function(){
            countdown("{{\Carbon\Carbon::create(\Carbon\Carbon::now())->diffInSeconds(Config::attendee_timestamp(),false)}}");
        });

    </script>

@endsection

@endsection
