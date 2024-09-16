@extends('backend.app')

@section('title')
Tribute Tiles | QR Code Listing
@endsection

@push('style')

@endpush

@section('content')
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                    <h1 class="text-dark fw-bold my-1 fs-2">
                        QR Code Listing
                    </h1>
                    <ul class="breadcrumb fw-semibold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            QR Code
                        </li>
                        <li class="breadcrumb-item text-dark">
                            QR Code Listing
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                    <a href="#" class="btn btn-primary" onclick="window.history.back();" id="kt_toolbar_primary_button">
                        Back
                    </a>
                </div>
            </div>
        </div>
        <!--begin::Post-->
        <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
            <div class=" container-xxl ">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                {{-- search QR Code --}}
                                <form action="{{ route('barcodes.search') }}" method="GET">
                                    <input type="text" name="search"
                                           class="form-control form-control-solid w-250px ps-13"
                                           placeholder="Search QR Code"
                                           value="{{ request('search') }}" />
                                </form>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <form action="{{route('generate.qr.code')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-light-primary me-3">
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
                                        Generate QR Code
                                    </button>
                                </form>
                            </div>
                            {{-- <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>
                                    Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">
                                    Delete Selected
                                </button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="">QR Image</th>
                                    <th class="">QR Code</th>
                                    {{-- <th class="">token</th> --}}
                                    <th class="">Status</th>
                                    <th class="">Created Date</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($barcodes as $barcode)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset($barcode->image_url) }}" data-src="{{ asset($barcode->image_url) }}"
                                        style="width: 50px; height: 55px; cursor:pointer" class="post-img" title="Click to see full image">
                                    </td>
                                    <td>
                                        <a href="details.html" class="text-gray-800 text-hover-primary mb-1">{{$barcode->code ?? 'No code'}}</a>
                                    </td>
                                    <td>
                                        @if ($barcode->status == 'active')
                                        <div class="badge badge-light-success">Active</div>
                                        @else
                                        <div class="badge badge-light-danger">Locked</div>
                                        @endif
                                    </td>
                                    <td>
                                        {{$barcode->created_at}}
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{route('barcodes.print.pdf', ['id' => $barcode->id])}}" class="menu-link px-3">Download Pdf</a>
                                            </div>
                                            <form id="delete-form-{{ $barcode->id }}" class="menu-item px-3"
                                            action="{{ route('barcodes.destroy', $barcode->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <a class="menu-link px-3" onclick="confirmDelete(event, 'delete-form-{{ $barcode->id }}')">
                                                    Delete
                                                </a>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No data available.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Laravel default Pagination Links  -->
                    <div class="d-flex justify-content-end" style="margin-bottom: 20px;margin-right: 20px;">
                        {{ $barcodes->appends(['search' => request('search')])->links() }}
                    </div>
                </div>



                <!--end::Modal - Customers - Add--><!--begin::Modal - Adjust Balance-->
                <!-- Modal -->
                <!-- Modal -->
                <button type="button" id="image-show-button" class="d-none btn btn-primary" data-bs-toggle="modal" data-bs-target="#image-show">
                    QR Code Image
                </button>
                <div class="modal fade" id="image-show" aria-labelledby="exampleModalLabel" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fw-bold">QR Code Image</h2>
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>

                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7 text-center">
                                <img class="img-thumbnail" alt="display-img" id="display-img">
                            </div>

                        </div>
                    </div>
                </div>
                <!--end::Modal - New Card--><!--end::Modals-->
            </div>
        </div>
    </div>
@endsection

@push('script')

<script>
function confirmDelete(event, formId) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Ok, got it!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
}
</script>


<script>
//Display Post Image modal by click on image
    // post-img e click kra holo
    $('.post-img').on('click', function(){
        console.log('clicked');

        // data-src atrribute theke data ti img variable e rakha holo
        let img = $(this).attr('data-src');
        // img variable er data ti 'dispaly-img' er src e deya holo
        $('#display-img').attr('src', img);
        //jdi image e click kri, tahle button e automatic vabe click hobe, tai 'trigger('click')'
        $('#image-show-button').trigger('click')
    })
</script>


@endpush
