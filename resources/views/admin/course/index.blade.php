@extends('layouts.app')

@section('content')
     
    <!--Tabla-->
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Students</h3>

                    <button>Show Everything <span class="las la-arrow-right">
                        </span></button>
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
    </div>


@endsection