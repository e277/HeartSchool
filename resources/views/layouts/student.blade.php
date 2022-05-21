<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>

    <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
        @guest
            {{-- <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
            @if (Route::has('register'))
                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <span>{{ Auth::user()->name }}</span>

            <a href="{{ route('logout') }}"
               class="no-underline hover:underline"
               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        @endguest
    </nav>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            
            <h2><span class="las la-clinic-medical"></span> <span>Student</span></h2>
        
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('student-apply.index') }}" class="active">
                    <span class="las la-home"></span>
                    <span>Home</span></a>
                </li>
                
                <li>
                    <a href="{{ route('student-course.create') }}">
                    <span class="las la-book-medical"></span>
                    <span>Course Registration</span></a>
                </li>

                <li>
                    <a href="{{ route('student.create-payment') }}">
                    <span class="las la-user"></span>
                    <span>Payment</span></a>
                </li>


            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>Baord
            </h2>

            <div class="action">
                <div class="profile">
                    <img src="{{ asset('admin/img/avatar.png') }}" alt="Profile Image" onclick="menuToggle()">
                </div>
                <div class="menu">
                    {{-- <h3>{{ Auth::user()->name }}<br><span>Student</span></h3> --}}
                    <ul>
                        <li><img src="admin/icons/user.png" alt=""><a href="{{ route('student-profile.index') }}">My Profile</a></li>
                        <li><img src="admin/icons/edit.png" alt=""><a href="{{ route('student-profile.create') }}">Edit Profile</a></li>
                        <li><img src="admin/icons/envelope.png" alt=""><a href="#">Inbox</a></li>
                        <li><img src="admin/icons/settings.png" alt=""><a href="#">Settings</a></li>
                        <li><img src="admin/icons/question.png" alt=""><a href="#">Help</a></li>
                        <li><img src="admin/icons/logout.png" alt="">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                
                                <button style="    background: transparent; border: none; outline: none; font-weight: 500; font-size: 1.05em;">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <script>
                function menuToggle() {
                    const toggleMenu = document.querySelector('.menu');
                    toggleMenu.classList.toggle('active')
                }
            </script>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>