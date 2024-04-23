@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('admin.includes.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                @include('admin.includes.header')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow p-2">
                               {{-- form goes here  --}}
                               <form>
                                <div class="form-row">
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                  </div>
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                  </div>
                                </div>
                              </form>
                               {{-- form end here --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                @include('admin.includes.footer')
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    @endsection
