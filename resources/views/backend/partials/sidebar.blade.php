<div id="kt_aside" class="aside aside-default  aside-hoverable " data-kt-drawer="true"
data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">

<!--begin::Brand-->
<div class="aside-logo flex-column-auto px-10 pt-9 pb-5" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="{{route('admin.dashboard')}}">
        <img alt="Logo" src="{{asset('frontend/images/logo-blue.png')}}"
            class="max-h-50px logo-default theme-light-show" />
        <img alt="Logo" src="{{asset('frontend/images/logo-blue.png')}}"
            class="max-h-50px logo-default theme-dark-show" />
        <img alt="Logo" src="{{asset('frontend/images/logo-minimize.png')}}" class="max-h-50px logo-minimize" />
    </a>
    <!--end::Logo-->
</div>
<!--end::Brand-->

<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid ps-3 pe-1">
    <!--begin::Aside Menu-->

    <!--begin::Menu-->
    <div class="menu menu-sub-indention menu-column menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-active-bg menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 my-5 mt-lg-2 mb-lg-0"
        id="kt_aside_menu" data-kt-menu="true">

        <div class="hover-scroll-y mx-4" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">

            <!--begin:Menu item-->
            {{-- ============= 'here' class is for to active the item ==================--}}
            <div class="menu-item menu-accordion">
                <a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span class="menu-title">Dashboards</span>
                </a>
            </div>

            <div class="menu-item pt-5">
                <div class="menu-content">
                    <span class="fw-bold text-muted text-uppercase fs-7">Crafted</span>
                </div>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion
                {{ request()->routeIs('admin.qr.index') ? 'show' : '' }}">
            {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion "> --}}
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-scan-barcode fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                        </i>
                    </span>
                    <span class="menu-title">QR Code</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('admin.qr.index') ? 'active' : '' }}" href="{{ route('admin.qr.index') }}">
                        {{-- <a class="menu-link      "> --}}
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">QR Code List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link     ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Active QR Code List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link     ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Locked QR Code List</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Users --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-user-tick fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    <span class="menu-title">Users</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User List</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Users Profiles --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-profile-user fs-2 ">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span class="menu-title">Profiles</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Profile List</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Posts --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-message-text fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    <span class="menu-title">Posts</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Posts List</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Tagged Posts --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion  ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-message-text fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    <span class="menu-title">Tag Posts</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Approved Post List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Pending Post List</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Notifications --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-notification-on fs-2 ">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </span>
                    <span class="menu-title">Notifications</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link  ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Pending List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link  ">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Approved List</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SEPERATOR -->
            <div class="menu-item">
                <div class="menu-content">
                    <div class="separator mx-1 my-4"></div>
                </div><!--end:Menu content-->
            </div>

            {{-- Account Setting --}}
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.profile') || request()->routeIs('admin.profile.edit') ? 'show' : '' }}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-user fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">My Profile</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}" href="{{ route('admin.profile') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('admin.profile.edit') ? 'active' : '' }}" href="{{ route('admin.profile.edit') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Setting --}}
            <div class="menu-item menu-accordion">
                <a class="menu-link {{ request()->routeIs('admin.setting') ? 'active' : '' }}" href="{{route('admin.setting')}}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-setting-2 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Setting</span>
                </a>
            </div>
            {{-- logout --}}
            <div class="menu-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="menu-link" style="border: 0; background:transparent;">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-entrance-right fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Sign Out</span>
                    </button>
                </form>
            </div>


        </div>
    </div>
    <!--end::Menu-->
</div>
<!--end::Aside menu-->

<!--begin::Footer-->
<div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
    <a href="index-2.html" class="btn btn-light-primary w-100">
        Button
    </a>
</div>
<!--end::Footer-->
</div>
