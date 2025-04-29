    <!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    </head>
    <body class="font-poppins text-[#0A090B]">
        <section id="content" class="flex">
            <div id="sidebar" class="w-[270px] flex flex-col shrink-0 min-h-screen justify-between p-[30px] border-r border-[#EEEEEE] bg-[#FBFBFB]">
                <div class="w-full flex flex-col gap-[30px]">
                    <a href="index.html" class="flex items-center justify-center">
                        <img src="{{asset('assets/images/logo/logo.svg')}}" alt="logo">
                    </a>
                    <ul class="flex flex-col gap-3">
                        <li>
                            <h3 class="font-bold text-xs text-[#A5ABB2]">DAILY USE</h3>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/home-hashtag.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Overview</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 bg-[#2B82FE] transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/note-favorite.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold text-white transition-all duration-300 hover:text-white">Courses</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/profile-2user.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Students</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/sms-tracking.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Messages</p>
                                <div class="notif w-5 h-5 flex shrink-0 rounded-full items-center justify-center bg-[#F6770B]">
                                    <p class="font-bold text-[10px] leading-[15px] text-white">12</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/chart-2.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Analytics</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-3">
                        <li>
                            <h3 class="font-bold text-xs text-[#A5ABB2]">OTHERS</h3>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/3dcube.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Rewards</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/code.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">A.I Plugins</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/setting-2.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Settings</p>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('assets/images/icons/security-safe.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Logout</p>
                            </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <a href="">
                    <div class="w-full flex gap-3 items-center p-4 rounded-[14px] bg-[#0A090B] mt-[30px]">
                        <div>
                            <img src="{{asset('assets/images/icons/crown-round-bg.svg')}}" alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-semibold text-white">Get Pro</p>
                            <p class="text-sm leading-[21px] text-[#A0A0A0]">Unlock features</p>
                        </div>
                    </div>
                </a>
            </div>
            <div id="menu-content" class="flex flex-col w-full pb-[30px]">
                <div class="nav flex justify-between p-5 border-b border-[#EEEEEE]">
                    <form class="search flex items-center w-[400px] h-[52px] p-[10px_16px] rounded-full border border-[#EEEEEE]">
                        <input type="text" class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none" placeholder="Search by report, student, etc" name="search">
                        <button type="submit" class="ml-[10px] w-8 h-8 flex items-center justify-center">
                            <img src="{{asset('assets/images/icons/search.svg')}}" alt="icon">
                        </button>
                    </form>
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[14px]">
                            <a href="" class="w-[46px] h-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                                <img src="{{asset('assets/images/icons/receipt-text.svg')}}" alt="icon">
                            </a>
                            <a href="" class="w-[46px] h-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                                <img src="{{asset('assets/images/icons/notification.svg')}}" alt="icon">
                            </a>
                        </div>
                        <div class="h-[46px] w-[1px] flex shrink-0 border border-[#EEEEEE]"></div>
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col text-right">
                                <p class="text-sm text-[#7F8190]">Howdy</p>
                                <p class="font-semibold">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="w-[46px] h-[46px]">
                                <img src="{{asset('assets/images/photos/default-photo.svg')}}" alt="photo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-10 px-5 mt-5">
                    <div class="breadcrumb flex items-center gap-[30px]">
                        <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Home</a>
                        <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
                        <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Manage Courses</a>
                        <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
                        <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Course Details</a>
                    </div>
                </div>
                <div class="header ml-[70px] pr-[70px] w-[940px] flex items-center justify-between mt-10">
                    <div class="flex items-center gap-6">
                        <div class="w-[150px] h-[150px] flex shrink-0 relative overflow-hidden">
                            <img src="{{Storage::url($course->cover)}}" class="object-contain w-full h-full" alt="icon">
                            <p class="p-[8px_16px] rounded-full bg-[#FFF2E6] font-bold text-sm text-[#F6770B] absolute bottom-0 transform -translate-x-1/2 left-1/2 text-nowrap">{{ $course->category->name }}</p>
                        </div>
                        <div class="flex flex-col gap-5">
                            <h1 class="font-extrabold text-[30px] leading-[45px]">{{$course->name}}</h1>
                            <div class="flex items-center gap-5">
                                <div class="flex gap-[10px] items-center">
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{asset('assets/images/icons/calendar-add.svg')}}" alt="icon">
                                    </div>
                                    <p class="font-semibold">{{$course->created_at->format('d M Y')}}</p>
                                </div>
                                <div class="flex gap-[10px] items-center">
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{asset('assets/images/icons/profile-2user-outline.svg')}}" alt="icon">
                                    </div>
                                    <p class="font-semibold">{{$students->count()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <ul class="mx-[70px] mt-[30px] flex flex-col gap-5">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm font-semibold text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                    
                @endif
                <form method="POST" action="{{ route('dashboard.course.create.question.store', $course) }}"  id="add-question" class="mx-[70px] mt-[30px] flex flex-col gap-5">
                    @csrf
                    <h2 class="text-2xl font-bold">Add New Question</h2>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold">Question</p>
                        <div class="flex items-center w-[500px] h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] focus-within:border-2 focus-within:border-[#0A090B]">
                            <div class="mr-[14px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                <img src="{{asset('assets/images/icons/note-text.svg')}}" class="object-contain w-full h-full" alt="icon">
                            </div>
                            <input type="text" class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none" placeholder="Write the question" name="question">
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold">Answers</p>
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-center gap-4">
                                <div class="flex items-center w-[500px] h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] focus-within:border-2 focus-within:border-[#0A090B]">
                                    <div class="mr-[14px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                        <img src="{{asset('assets/images/icons/edit.svg')}}" class="object-contain w-full h-full" alt="icon">
                                    </div>
                                    <input type="text" class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none" placeholder="Write better answer option" name="answers[]">
                                </div>
                                <label class="font-semibold flex items-center gap-[10px]"
                                    ><input
                                    value="{{ $i }}"
                                    type="radio"
                                    name="is_correct"
                                    class="w-[24px] h-[24px] appearance-none checked:border-[3px] checked:border-solid checked:border-white rounded-full checked:bg-[#2B82FE] ring ring-[#EEEEEE]"
                                    />
                                    Correct
                                </label>
                            </div>  
                        @endfor
                        
                    </div>
                    <button type="submit" class="w-[500px] h-[52px] p-[14px_20px] bg-[#6436F1] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">Save Question</button>
                </form>
            </div>
        </section>
        
    </body>
    </html>