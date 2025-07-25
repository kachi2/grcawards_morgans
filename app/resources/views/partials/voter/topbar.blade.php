@if(Route::currentRouteName() == 'landing.index')
<header class="conference-header-fixed header-fixed">
    @else
    <header class="conference-header-fixed" style="background-color: #272727;">
        @endif
        <a href="#" class="nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="container">
            <div class="row conference-header-row">
                <div class="col-sm-2 col-lg-2 col-xl-2">
                    <a href="{{route('landing.index')}}" class="logo">
                        <img src="{{asset('/assets/images/grclogo.png')}}" loading="lazy" alt="GRC & FinCrime Awards and Summit" style="height: 80px;width: 80px;position:absolute;margin-top: -20px;" />
                    </a>
                </div>
                <div class="col-sm-10 col-lg-10 col-xl-10">
                    <nav class="nav-menu menu">
                        <ul class="nav-list">
                            <li class="{{request()->is('/') ? 'active-page' : '' }}">
                                <a href="{{route('landing.index')}}">home</a>
                            </li>
                            <li class="dropdown {{request()->is('the-award/*') ? 'active-page' : ''}}">
                                <a href="#">The Award 
                                    <i class="mdi mdi-chevron-down" aria-hidden="true"></i>
                                </a>
                                <ul> 
                                    <li class="{{request()->is('the-award/about-the-award') ? 'active-page' : '' }}"><a href="{{route('about_the_award')}}">about the award</a></li>
                                     <li class="{{request()->is('vision-mission-statement') ? 'active-page' : '' }}"><a href="{{route('visionMission')}}">Vision and Mission Statement</a></li>
                                    <li class="{{request()->is('the-award/sectors-and-categories') ? 'active-page' : '' }}"><a href="{{route('show_sect_cat')}}">Categories</a></li>
                                    <li class="{{request()->is('the-award/contact-us') ? 'active-page' : '' }}"><a href="{{route('show_contact')}}">Contact us</a></li>
                                </ul>
                            </li>

                            <li class="dropdown {{request()->is('the-award/*') ? 'active-page' : ''}}">
                                <a href="#">Summit 
                                    <i class="mdi mdi-chevron-down" aria-hidden="true"></i>
                                </a>
                                <ul>
                                    <li class="{{request()->is('/summit') ? 'active-page' : '' }}"><a href="{{route('show_summit')}}">Summit 2025</a></li>
                                    <li class="{{request()->is('/summit/2024') ? 'active-page' : '' }}"><a href="{{route('show_summit')}}">Summit 2024</a></li>
                                    <li class="{{request()->is('/summit/2023') ? 'active-page' : '' }}"><a href="{{route('show_summit_2023')}}">Summit 2023</a></li>
                                    <li class="{{request()->is('/summit/2022') ? 'active-page' : '' }}"><a href="{{route('show_summit_2022')}}">Summit 2022</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown {{request()->is('winners/*') ? 'active-page' : ''}}">
                                <a href="#">Winners
                                    <i class="mdi mdi-chevron-down" aria-hidden="true"></i>
                                </a>
                                <ul>
                                    {{-- @foreach($award_program_years as $award_program_year) --}}
                                    <li class=""><a href="{{route('show_winners2024', '2024')}}">2024 Winners</a></li>
                                    <li class=""><a href="{{route('show_winners2023', '2023')}}">2023 Winners</a></li>
                                        <li class=""><a href="{{route('show_winners2022', '2022')}}">2022 Winners</a></li>
                                        <li class=""><a href="{{route('show_winners', '2021')}}">2021 Winners</a></li>
                                        
                                    {{-- @endforeach --}} 
                                </ul>
                            </li>
                            <li class="{{request()->is('vote') ? 'active-page' : '' }}">
                                <a href="{{route('show_vote')}}">vote</a>
                                {{-- <a href="#">vote</a> --}}
                            </li>
                            <li class="{{request()->is('advisory/board-members') ? 'active-page' : '' }}"><a href="{{route('board_members')}}">Advisory Council </a></li>
                            <li class="dropdown {{request()->is('judges/*') ? 'active-page' : ''}}">
                                <a href="#">Judges <i class="mdi mdi-chevron-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li class="{{request()->is('judges/meet-our-judges') ? 'active-page' : '' }}"><a href="{{route('meet_judges')}}">Awards Judges</a></li>
                                    <li class="{{request()->is('judges/judging-process') ? 'active-page' : '' }}"><a href="{{route('judging_process')}}">Judging Process</a></li>
                                </ul>
                            </li>
                            <li class="{{request()->is('sponsors') ? 'active-page' : '' }}">
                                <a href="{{route('show_sponsors')}}">sponsors </a>

                            </li>
                            
                            <li class="dropdown {{request()->is('media/*') ? 'active-page' : '' }}">
                                <a href="#">media <i class="mdi mdi-chevron-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li><a class="{{request()->is('media/pictures/*') ? 'active-page' : '' }}" href="{{route('show_pictures_categories')}}">Pictures</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li class="{{request()->is('media/press-announcements') ? 'active-page' : '' }}"><a href="{{route('show_press')}}">Press Announcement</a></li>
                                </ul>
                            </li>
                            <li class="dropdown {{request()->is('others/*') ? 'active-page' : ''}}">
                                <a href="#">others <i class="mdi mdi-chevron-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li class="{{request()->is('code-of-conduct') ? 'active-page' : '' }}"> <a href="{{route('CodeOfConduct')}}">Code of Conduct </a> </li>
                                    <li class="{{request()->is('others/faqs') ? 'active-page' : '' }}"><a href="{{route('show_faqs')}}">FAQs</a></li>
                                    <li class="{{request()->is('others/terms-and-conditions') ? 'active-page' : '' }}"><a href="{{route('show_tc')}}">Terms & Conditions</a></li>
                                    <li class="{{request()->is('others/privacy-policy') ? 'active-page' : '' }}"><a href="{{route('show_policy')}}">Privacy Policy</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>