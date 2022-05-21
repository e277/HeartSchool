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
                                    <td>Date Of Birth</td>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Course Name</th>
                                    <th>Comments</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($students as $student)
                                        <td>{{ $student->f_name }}</td>
                                        <td>{{ $student->l_name }}</td>
                                        <td>{{ $student->dob }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->course_name }}</td>
                                        <td>{{ $student->comments }}</td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">{{ accept }}</option>
                                                <option value="">{{ accept }}</option>
                                                <option value="">{{ accept }}</option>
                                            </select>
                                        </td>
                                        @endforeach
                                    <td>
                                        <span class="status green"></span> Accepted
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