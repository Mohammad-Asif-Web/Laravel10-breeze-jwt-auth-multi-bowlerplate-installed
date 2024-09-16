@extends('backend.app')

@section('title')
    Dashboard | Home
@endsection

@push('style')
    <style>

    </style>
@endpush

@section('content')
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--=================== begin::BREADCRUMB SECTION ============================-->
        <div class="toolbar" id="kt_toolbar">
            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bold my-1 fs-2">
                        Dashboard <small class="text-muted fs-6 fw-normal ms-1"></small>
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb fw-semibold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Dashboard
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div class="container-xxl ">
                <!--single row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-scan-barcode fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Total QR Code</span>
                            </div>
                       </div>
                    </a>
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-scan-barcode fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Active QR Code</span>
                            </div>
                       </div>
                    </a>
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-scan-barcode fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Locked QR Code</span>
                            </div>
                       </div>
                    </a>
                </div> <!--single row-->
                <!--single row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-user-tick fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Total User</span>
                            </div>
                       </div>
                    </a>
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-profile-user fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Total Profile</span>
                            </div>
                       </div>
                    </a>
                    {{-- single item --}}
                    <a href="#" class="col-xl-4 mb-xl-10">
                       <div class="card h-md-100">
                            <div class="card-header pt-5" style="border-bottom: 0;">
                                <div class="card-title d-flex">
                                    <i class="ki-duotone ki-message-text fs-1 gap-1" style="color: #00A3FF;">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">000</span>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-start pe-0">
                                <span class="text-gray-400 fw-semibold fs-6">Total Post</span>
                            </div>
                       </div>
                    </a>
                </div> <!--single row-->

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script></script>
@endpush
