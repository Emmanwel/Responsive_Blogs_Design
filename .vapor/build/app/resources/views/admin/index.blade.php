@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                       

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">

                                    @php
                                        $portfolioData = App\Models\Portfolio::count();
                                        $blogData = App\Models\Blog::count();
                                        $userData = App\Models\User::count();
                                        $blogCategoryData = App\Models\BlogCategory::count();
                                        
                                    @endphp

                                    <p class="text-truncate font-size-14 mb-2">Total Portfolios</p>
                                    <h4 class="mb-2 items-center">{{ $portfolioData }}</h4>
                                    {{-- <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                        previous period</p> --}}
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="fas fa-briefcase font-size-24"></i>

                                    </span>
                                </div>

                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Blogs</p>
                                    <h4 class="mb-2"> {{ $blogData }}</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="fa-duotone fa-blog font-size-24"></i>

                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">All Users</p>
                                    <h4 class="mb-2">{{ $userData }}</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-3-line font-size-24"></i>

                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Blog Categories</p>
                                    <h4 class="mb-2">{{ $blogCategoryData }}</h4>

                                </div>
                                <div class="avatar-sm">

                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="fa-solid fa-grid-2 font-size-24 color-red"></i>

                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                @php
                    $portfolio = App\Models\Portfolio::latest()->get();
                @endphp


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>

                                </div>

                                <h4 class="card-title mb-4">Latest Portfolios</h4>

                                <div class="table-responsive">

                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Portfolio Name</th>
                                                <th>Portfolio Title</th>
                                                <th>Created At</th>
                                                <th>Portfolio Link</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        @foreach ($portfolio as $item)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">{{ $item->portfolio_name }}</h6>
                                                    </td>
                                                    <td>{{ $item->portfolio_title }}</td>

                                                    <td>
                                                        {{ $item->created_at->toDateString() }}
                                                    </td>
                                                    <td> {{ $item->portfolio_link }}</td>
                                                </tr>
                                                <!-- end -->
                                        @endforeach
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->



                </div>
                <!-- end row -->
            </div>

            <!-- end row -->
        </div>

    </div>
@endsection


<!-- end -->

{{-- <div class="font-size-13"><i
                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                    </div>
                                    <div class="font-size-13"><i
                                            class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                    </div> --}}

<!-- end -->
