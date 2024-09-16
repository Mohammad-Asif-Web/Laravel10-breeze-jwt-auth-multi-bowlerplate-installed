@extends('backend.app')

@section('title')
Tribute Tiles | Profile Setting
@endsection

@push('style')
    <style>

    </style>
@endpush

@section('content')
<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
       <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
          <!--begin::Info-->
          <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
             <!--begin::Title-->
             <h1 class="text-dark fw-bold my-1 fs-2">
                Profile Setting
             </h1>
             <!--end::Title-->
             <!--begin::Breadcrumb-->
             <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                   <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">
                   Dashboard                                    </a>
                </li>
                <li class="breadcrumb-item text-muted">
                   My Profile
                </li>
                <li class="breadcrumb-item text-dark">
                   Settings
                </li>
             </ul>
             <!--end::Breadcrumb-->
          </div>
          <!--end::Info-->
          <!--begin::Actions-->
            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                <a class="btn btn-primary" onclick="window.history.back();">
                    Back
                </a>
            </div>
          <!--end::Actions-->
       </div>
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
       <!--begin::Container-->
       <div class=" container-xxl ">
          <div class="d-flex flex-column flex-lg-row">
             <!--begin::Aside-->
             <div class="flex-column flex-md-row-auto w-100 w-lg-250px w-xxl-275px">
                <!--begin::Nav-->
                <div
                   class="card mb-6 mb-xl-9"
                   data-kt-sticky="true"
                   data-kt-sticky-name="account-settings"
                   data-kt-sticky-offset="{default: false, lg: 300}"
                   data-kt-sticky-width="{lg: '250px', xxl: '275px'}"
                   data-kt-sticky-left="auto"
                   data-kt-sticky-top="100px"
                   data-kt-sticky-zindex="95"
                   >
                   <!--begin::Card body-->
                   <div class="card-body py-10 px-6">
                      <!--begin::Menu-->
                      <ul id="kt_account_settings" class="nav nav-flush menu menu-column menu-rounded menu-title-gray-600 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-semibold fs-6 mb-2">
                         <li class="menu-item px-3 pt-0 pb-1">
                            <a href="#kt_account_settings_overview" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link active">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Overview</span>
                            </a>
                         </li>
                         <li class="menu-item px-3 pt-0 pb-1">
                            <a href="#kt_account_settings_signin_method" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Sign-in Method</span>
                            </a>
                         </li>
                         <li class="menu-item px-3 pt-0 pb-1">
                            <a href="#kt_account_settings_profile_details" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Profile Details</span>
                            </a>
                         </li>
                      </ul>
                      <!--end::Menu-->
                   </div>
                   <!--end::Card body-->
                </div>
                <!--end::Nav-->
             </div>
             <!--end::Aside-->
             <!--begin::Layout-->
             <div class="flex-md-row-fluid ms-lg-12">
                <!--begin::Overview-->
                <div class="card  mb-5 mb-xl-10" id="kt_account_settings_overview" data-kt-scroll-offset="{default: 100, md: 125}">
                   <!--begin::Card header-->
                   <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_overview">
                      <div class="card-title">
                         <h3 class="fw-bold m-0">Overview</h3>
                      </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Content-->
                   <div id="kt_account_settings_overview" class="collapse show">
                      <!--begin::Card body-->
                      <div class="card-body border-top p-9">
                         <div class="d-flex align-items-start flex-wrap">
                            <div class="d-flex flex-wrap">
                               <!--begin::Avatar-->
                               <div class="symbol symbol-125px mb-7 me-7 position-relative">
                                  <img src="{{asset('backend/media/avatars/300-1.jpg')}}" alt="image" />
                               </div>
                               <!--end::Avatar-->
                               <!--begin::Profile-->
                               <div class="d-flex flex-column">
                                  <div class="fs-2 fw-bold mb-1">{{auth()->user()->name ?? 'Brad Denis'}}</div>
                                  <a href="#" class="text-gray-400 text-hover-primary fs-6 fw-semibold mb-5">{{auth()->user()->email ?? 'support@mail.com'}}</a>
                                  <div class="badge badge-light-success text-success fw-bold fs-7 me-auto mb-3 px-4 py-3">Admin</div>
                               </div>
                               <!--end::Profile-->
                            </div>
                         </div>
                         <!--end::Row-->
                         <!--begin::Notice-->
                         <!--end::Notice-->
                      </div>
                      <!--end::Card body-->
                   </div>
                   <!--end::Content-->
                </div>
                <!--end::Overview-->
                <!--begin::Sign-in Method-->
                <div class="card  mb-5 mb-xl-10"   >
                   <!--begin::Card header-->
                   <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                      <div class="card-title m-0">
                         <h3 class="fw-bold m-0">Sign-in Method</h3>
                      </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Content-->
                   <div id="kt_account_settings_signin_method" class="collapse show">
                      <!--begin::Card body-->
                      <div class="card-body border-top p-9">
                         <!--begin::Email Address-->
                         <div class="d-flex flex-wrap align-items-center">
                            <!--begin::Label-->
                            <div id="kt_signin_email">
                               <div class="fs-6 fw-bold mb-1">Email Address</div>
                               <div class="fw-semibold text-gray-600">{{auth()->user()->email ?? 'support@mail.com'}}</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Edit-->
                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                               <!--begin::Form-->
                               <form action="{{ route('admin.profile.update.email') }}" method="POST" class="form" novalidate="novalidate">
                                @csrf
                                <div class="row mb-6">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="fv-row mb-0">
                                            <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                            <input type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" id="emailaddress"
                                                placeholder="Email Address" name="email" value="{{Auth::user()->email}}" />
                                                @error('email')
                                                    <div class="invalid-feedback" style="color: #ee7838;">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-0">
                                            <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                                 name="password" id="confirmemailpassword" />
                                            @error('password')
                                                 <div class="invalid-feedback" style="color: #ee7838;">{{ $message }}</div>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="kt_signin_submit" type="submit" class="btn btn-primary me-2 px-6">Update Email</button>
                                    <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                               <!--end::Form-->
                            </div>
                            <!--end::Edit-->
                            <!--begin::Action-->
                            <div id="kt_signin_email_button" class="ms-auto">
                               <button class="btn btn-light btn-active-light-primary">Change Email</button>
                            </div>
                            <!--end::Action-->
                         </div>
                         <!--end::Email Address-->
                         <!--begin::Separator-->
                         <div class="separator separator-dashed my-6"></div>
                         <!--end::Separator-->
                         <!--begin::Password-->
                         <div class="d-flex flex-wrap align-items-center mb-10">
                            <!--begin::Label-->
                            <div id="kt_signin_password">
                               <div class="fs-6 fw-bold mb-1">Password</div>
                               <div class="fw-semibold text-gray-600">************</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Edit-->
                            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                               <!--begin::Form-->
                               <form action="{{ route('admin.profile.update.password') }}" method="POST" class="form" novalidate="novalidate">
                                @csrf
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="newpassword" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" id="confirmpassword" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text mb-5">Password must be at least 8 characters and contain symbols.</div>
                                <div class="d-flex">
                                    <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Update Password</button>
                                    <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>

                               <!--end::Form-->
                            </div>
                            <!--end::Edit-->
                            <!--begin::Action-->
                            <div id="kt_signin_password_button" class="ms-auto">
                               <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                            </div>
                            <!--end::Action-->
                         </div>
                         <!--end::Password-->
                         <!--begin::Notice-->
                         <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                               <!--begin::Content-->
                               <div class="mb-3 mb-md-0 fw-semibold">
                                  <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                                  <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                               </div>
                               <!--end::Content-->
                               <!--begin::Action-->
                               <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication" >
                               Enable            </a>
                               <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                         </div>
                         <!--end::Notice-->
                      </div>
                      <!--end::Card body-->
                   </div>
                   <!--end::Content-->
                </div>
                <!--end::Sign-in Method-->
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                   <!--begin::Card header-->
                   <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                      <!--begin::Card title-->
                      <div class="card-title m-0">
                         <h3 class="fw-bold m-0">Profile Details</h3>
                      </div>
                   </div>

                   <div id="kt_account_settings_profile_details" class="collapse show">
                        <form class="form" action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body border-top p-9">
                                {{--avatar --}}
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                    <div class="col-lg-8">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url( {{ Auth::user()?->avatar ? asset(Auth::user()?->avatar) : asset('backend/media/avatars/300-1.jpg') }} )"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                {{-- name --}}
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Your name" value="{{Auth::user()->name ?? 'Max'}}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Contact Phone</span>
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="Phone number must be active" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{Auth::user()->phone ?? '044 3276 454 935'}}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Country</span>
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="country" class="form-control form-control-lg form-control-solid" placeholder="Enter country" value="{{Auth::user()->country ?? 'no country'}}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">City</span>
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="city" class="form-control form-control-lg form-control-solid" placeholder="Enter city" value="{{Auth::user()->city ?? 'no city'}}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Address</span>
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Enter address" value="{{Auth::user()->address ?? 'no address'}}" />
                                    </div>
                                </div>
                            </div>
                            {{-- @dd('echo') --}}
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                      </form>
                      <!--end::Form-->
                   </div>
                   <!--end::Content-->
                </div>
                <!--end::Basic info-->
                <!--end::Deactivate Account-->
             </div>
             <!--end::Layout-->
          </div>
       </div>
       <!--end::Container-->
    </div>
    <!--end::Post-->
 </div>
@endsection

@push('script')
    <script></script>
@endpush
