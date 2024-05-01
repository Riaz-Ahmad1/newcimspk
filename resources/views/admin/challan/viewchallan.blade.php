@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
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
                <div class="container-fluid ">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Challan Management</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <!-- Content Row -->

                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="card text-dark bg-success mb-3" style="max-width: 18rem;">
                                <h6 class="text-center border-bottom">Today statics</h6>
                                <div class="d-flex justify-content-between">
                                    <p class="card-title">Challan:</p>
                                    <p class="card-text">{{$today_count}}</p>
                                  </div>
                                  <div class=" d-flex justify-content-between">
                                    <p class="card-title">Amount:</p>
                                    <p class="card-text">{{$today_amount}}</p>
                                  </div>
                              </div>
                              <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
                                <h6 class="text-center border-bottom">Challan Amount statics</h6>
                                <div class="d-flex justify-content-between">
                                    <p class="card-title">Pending:</p>
                                    <p class="card-text">{{$pending}}</p>
                                  </div>
                                  <div class=" d-flex justify-content-between">
                                    <p class="card-title">Completed:</p>
                                    <p class="card-text">{{$completed}}</p>
                                  </div>
                              </div>

                              <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                                <h6 class="text-center border-bottom">Total statics</h6>
                                <div class="d-flex justify-content-between">
                                  <p class="card-title">Challan</p>
                                  <p class="card-text">{{$total_count}}</p>
                                </div>
                                <div class=" d-flex justify-content-between">
                                    <p class="card-title"> Amount:</p>
                                    <p class="card-text">{{$total_amount}}</p>
                                  </div>
                              </div>

                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                {{-- <th>ID</th> --}}
                                                <th>Sid</th>
                                                <th>Rollno</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Reason</th>
                                                <th>Fine</th>
                                                <th>Date</th>
                                                <th>status</th>
                                                <th> Edit </th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($data as $item)    
                                            <tr>
                                                {{-- <td> {{$item->id}} </td> --}}
                                                <td> {{$item->sid}} </td>
                                                <td> {{$item->rollno}} </td>
                                                <td> {{$item->name}} </td>
                                                <td> {{$item->class}} </td>
                                                <td> {{$item->reason}} </td>
                                                <td> {{$item->fine}} </td>
                                                <td> {{$item->today_date}} </td>
                                                <td>  
                                                    @if($item->status ==1)
                                                    <a href="updatechallanstatus/{{$item->id}}">
                                                    <span class="badge rounded-pill bg-danger">
                                                    Pending
                                                    </span>
                                                     </a>
                                                    
                                                    @else
                                                        <span class="badge rounded-pill bg-success">
                                                            Completed
                                                            </span>
                                                    @endif
                                                </td>
                                                <td> <button>Edit</button> </td>
                                                <td> <button>Delete</button> </td>
                                            </tr>
                                         @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
           <script>
              $(document).ready(function() {
                        new DataTable('#example');
              });
           </script>
                <!-- Footer -->
                @include('admin.includes.footer')

                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    @endsection
