@extends('layouts.app')

@section('content')

    <div class="cards">

        <div class="card-single">
            <div>
                {{-- <h1>{{ $student_count }}</h1> --}}
                <h1>{{ 24 }}</h1>
                <span>Students</span>
            </div>
            <div>
                <span class="las la-users"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>2</h1>
                <span>Course</span>
            </div>
            <div>
                <span class="lab la-wpforms"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>12</h1>
                <span>Admitted</span>
            </div>
            <div>
                <span class="las la-stethoscope"></span>
            </div>
        </div>
        
    </div>
    <!--Tabla-->
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Students</h3>

                    <a href="{{ route('create') }}">
                        <button>
                            Generate XML
                            <span class="las la-arrow-right"></span>
                        </button>
                    </a>
                    <a href="{{ route('read') }}">
                        <button>
                            Display XML
                            <span class="las la-arrow-right"></span>
                        </button>
                    </a>
                    <a href="{{ route('download') }}">
                        <button>
                            Download XML
                            <span class="las la-arrow-right"></span>
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jhon Deiby</td>
                                    <td>Salazar Rayo</td>
                                    <td>
                                        <span class="status green"></span> Accepted
                                    </td>
                                </tr>
                                <tr>
                                    <td>Victor Manuel</td>
                                    <td>Ciro Ledesma</td>
                                    <td>
                                        <span class="status red"></span> Rejected
                                    </td>
                                </tr>
                                <tr>
                                    <td>Julian Andres</td>
                                    <td>Quesada Carmona</td>
                                    <td>
                                        <span class="status yellow"></span> Applied
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="customers">

            <div class="card">
                <div class="card-header">
                    <h3>New Students</h3>

                    <button>Show Everything <span class="las la-arrow-right">
                        </span></button>
                </div>

                <div class="card-body">

                    <div class="customer">
                        <div class="info">
                            <img src="admin/avatars/1.png" width="40px" height="40px" alt="">
                            <div>
                                <h4>Ana Maria Acosta</h4>
                                <small>Diarrea</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="las la-user-circle"></span>
                            <span class="lab la-whatsapp"></span>
                            <span class="las la-phone"></span>
                        </div>
                    </div>

                    <div class="customer">
                        <div class="info">
                            <img src="admin/avatars/2.png" 40px " height=" 40px " alt=" ">
                            <div>
                                <h4>Karen Orozco</h4>
                                <small>Gripa</small>
                            </div>
                        </div>
                        <div class=" contact ">
                            <span class=" las la-user-circle "></span>
                            <span class=" lab la-whatsapp "></span>
                            <span class=" las la-phone "></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

@endsection