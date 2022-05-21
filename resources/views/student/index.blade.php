@extends('layouts.student')

@section('content')


        <main>
            
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
                                            <td>Course Name</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($students as $student)
                                                <td>{{ $student->f_name }}</td>
                                                <td>{{ $student->l_name }}</td>
                                                <td>{{ $student->course_name }}</td>
                                                <td>{{ $student->status }}</td>
                                            @endforeach
                                            {{-- <td>
                                                <span class="status green"></span> Accepted
                                            </td> --}}
                                        </tr>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </main>

    </div>

</body>

</html>

@endsection