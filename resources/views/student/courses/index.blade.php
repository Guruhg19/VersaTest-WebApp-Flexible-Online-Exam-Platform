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
                                    <img src="{{asset('assets/images/icons/crown.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Certificates</p>
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
                                    <img src="{{asset('assets/images/icons/profile-2user.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Portfolio</p>
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
                <div class="flex flex-col px-5 mt-5">
                    <div class="flex items-center justify-between w-full">
                        <div class="flex flex-col gap-1">
                            <p class="font-extrabold text-[30px] leading-[45px]">My Courses</p>
                            <p class="text-[#7F8190]">Finish all given tests to grow</p>
                        </div>
                    </div>
                </div>
                <div class="course-list-container flex flex-col px-5 mt-[30px] gap-[30px]">
                    <div class="course-list-header flex flex-nowrap justify-between pb-4 pr-10 border-b border-[#EEEEEE]">
                        <div class="flex shrink-0 w-[300px]">
                            <p class="text-[#7F8190]">Course</p>
                        </div>
                        <div class="flex justify-center shrink-0 w-[150px]">
                            <p class="text-[#7F8190]">Date Created</p>
                        </div>
                        <div class="flex justify-center shrink-0 w-[170px]">
                            <p class="text-[#7F8190]">Category</p>
                        </div>
                        <div class="flex justify-center shrink-0 w-[120px]">
                            <p class="text-[#7F8190]">Action</p>
                        </div>
                    </div>
                    
                    @forelse ($my_courses as $my_course)
                        <div class="flex justify-between pr-10 list-items flex-nowrap">
                            <div class="flex shrink-0 w-[300px]">
                                <div class="flex items-center gap-4">
                                    <div class="flex w-16 h-16 overflow-hidden rounded-full shrink-0">
                                        <img src="{{Storage::url($my_course->cover)}}" class="object-cover" alt="thumbnail">
                                    </div>
                                    <div class="flex flex-col gap-[2px]">
                                        <p class="text-lg font-bold">{{ $my_course->name }}</p>
                                        <p class="text-[#7F8190]">Beginners</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex shrink-0 w-[150px] items-center justify-center">{{ $my_course->created_at->format('d M, Y') }}</p>
                            </div>
                            @if ($my_course->category->name == 'Product Design')
                                <div class="flex shrink-0 w-[170px] items-center justify-center">
                                    <p class="p-[8px_16px] rounded-full bg-[#FFF2E6] font-bold text-sm text-[#F6770B]">{{ $my_course->category->name }}</p>
                                </div>
                            @elseif ($my_course->category->name == 'Programming')
                                <div class="flex shrink-0 w-[170px] items-center justify-center">
                                    <p class="p-[8px_16px] rounded-full bg-[#EAE8FE] font-bold text-sm text-[#6436F1]">{{ $my_course->category->name }}</p>
                                </div>
                            @elseif ($my_course->category->name == 'Digital Marketing')
                            <div class="flex shrink-0 w-[170px] items-center justify-center">
                                    <p class="p-[8px_16px] rounded-full bg-[#D5EFFE] font-bold text-sm text-[#066DFE]">{{ $my_course->category->name }}</p>
                            </div>
                            @endif
                            <div class="flex shrink-0 w-[120px] items-center">
                                @if($my_course->nextQuestionId)
                                    <a href="{{ route('dashboard.learning.course', ['course' => $my_course->id, 'question' => $my_course->nextQuestionId]) }}"
                                    class="w-full h-[41px] p-[10px_20px] bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">
                                        Start Test
                                    </a>
                                @else
                                    <a href="{{ route('dashboard.learning.rapport.course', $my_course) }}"
                                    class="w-full h-[41px] p-[10px_20px] bg-[#50df3d] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">
                                        Result
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>Belum ada Kelas yang kamu ikuti.</p>
                    @endforelse

                </div>
            </div>
        </section>

    </body>
    </html>