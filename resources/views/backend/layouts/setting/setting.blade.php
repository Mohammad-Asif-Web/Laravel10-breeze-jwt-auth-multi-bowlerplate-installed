@extends('backend.app')

@section('title')
Tribute Tiles | General Setting
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
          <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
             <h1 class="text-dark fw-bold my-1 fs-2"> General Settings </h1>
             <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                   <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">  Dashboard </a>
                </li>
                <li class="breadcrumb-item text-dark">  Settings </li>
             </ul>
          </div>
          <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
            <a class="btn btn-primary" onclick="window.history.back();">
                Back
           </a>
          </div>
       </div>
    </div>
    <!--end::Toolbar-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
       <div class="container-xxl ">
          <div class="card card-flush">
             <div class="card-body">
                <form class="form" action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-7">
                        <div class="col-md-9 offset-md-3">
                            <h2>General Settings</h2>
                        </div>
                    </div>

                    {{-- Meta Title --}}
                    <div class="row fv-row mb-7">
                        <div class="col-md-3 text-md-end">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Meta Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Set the title of the store for SEO.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-solid" name="meta_title" value="{{ $setting->meta_title ?? 'this is website title' }}" />
                        </div>
                    </div>

                    {{-- Meta Description --}}
                    <div class="row fv-row mb-7">
                        <div class="col-md-3 text-md-end">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Meta Tag Description</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Set the description of the store for SEO.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control form-control-solid" name="meta_description">{{ $setting->meta_description ?? 'this is website description' }}</textarea>
                        </div>
                    </div>
                    {{-- Meta Keywords --}}
                    <div class="row fv-row mb-7">
                        <div class="col-md-3 text-md-end">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Meta Keywords</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-solid" name="meta_keywords" value="{{  $setting->meta_keywords ?? 'key, words'}}" data-kt-ecommerce-settings-type="tagify" />
                        </div>
                    </div>
                    {{-- Favicon --}}
                    <div class="row fv-row mb-7">
                        <div class="col-md-3 text-md-end">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Favicon</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Set Favicon icon for browser tab icon">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $setting?->favicon ? asset($setting->favicon) : asset('backend/media/svg/avatars/blank.svg') }})"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change favicon">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="file" name="favicon" accept=".ico"/>
                                    <input type="hidden" name="favicon_remove"/>
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel favicon">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove favicon">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: ico.</div>
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col-md-9 offset-md-3">
                            <div class="d-flex">
                                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                    Cancel
                                </button>
                                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                    <span class="indicator-label"> Save </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
             </div>
             <!--end::Card body-->
          </div>
          <!--end::Card-->
       </div>
       <!--end::Container-->
    </div>
    <!--end::Post-->
 </div>
@endsection

@push('script')
    <script></script>
@endpush
