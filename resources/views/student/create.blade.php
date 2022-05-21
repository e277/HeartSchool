@extends('layouts.student')

@section('content')

   <section class="contact">
      <div class="container">
         <div class="contactForm">
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
         
            <h2>Course Registration Form</h2>
            <p>Fill out the form carefully for registration</p>
            <form action="{{ route('student-apply.store') }}" method="post">
               @csrf
               <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
               <h2>Student name</h2>
               
                  <div class="inputBox">
                     <label for="">First Name</label>
                     <input type="text" name="f_name">
                  </div>
                  <div class="inputBox">
                     <label for="">Middle Initial</label>
                     <input type="text" name="m_initial">
                  </div>
                  <div class="inputBox">
                     <label for="">Last Name</label>
                     <input type="text" name="l_name">
                  </div>
               
         
               <div>Birth Date</div>
               <div>
                  <input type="date" name="dob" id="">
         
                  <div>Gender</div>
                  <select name="gender" id="">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                     <option value="other">Other</option>
                  </select>
               </div>
         
               <div>Address</div>
                  <textarea name="address" id="" cols="30" rows="10" placeholder="Enter Address"></textarea>
                  
                  <div>Student Email</div>
                  <input type="text" name="email" placeholder="example@example.com">
         
                  <div>Mobile Number</div>
                  <input type="number" name="mobile" placeholder="(000) 000-0000">
               
         
               <div>Courses
                  <select name="course" id="">
                     {{-- @foreach ($courses as $course)
                         <option value="{{ $course->id }}">
                           {{ $course->name }}
                        </option>
                     @endforeach --}}
                     <option value="">Select Course</option>
                     <option value="html">HTML</option>
                     <option value="css">CSS</option>
                     <option value="javascript">Javascript</option>
                     <option value="php">PHP</option>
                     <option value="sql">MySQL</option>
                  </select>
               </div>
               
               <div>
                  <p>Additional Comments</p>
                  <textarea name="" id="" cols="30" rows="10"></textarea>
               </div>
               <p>
                  <button type="submit">Submit Application</button>
                  <button type="reset">Clear Fields</button>
               </p>
            </form>
         </div>
      </div>
   </section>

@endsection

