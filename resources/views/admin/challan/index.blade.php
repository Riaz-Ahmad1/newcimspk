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
                        <div>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#challanModal" data-bs-whatever="@mdo">Add New Reason</button>
                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Reason</th>
                                                <th>Fine Amount</th>
                                                <th>status</th>
                                                <th> Edit </th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($data as $item)    
                                            <tr>
                                                <td> {{$item->id}} </td>
                                                <td> {{$item->reason}} </td>
                                                <td> {{$item->price}} </td>
                                                <td> {{$item->status}} </td>
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
                {{-- modal start --}}
                <div class="modal fade" id="challanModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reason</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('createChallan') }}" method="post" id="insertFormData">
                                @csrf
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Reason name:</label>
                                        <input type="text" class="form-control" id="reason" name="reason" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Fine Amount:</label>
                                        <input type="text" class="form-control" id="price"name="price" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="submitBtn"
                                    class="btn btn-success btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- modal end --}}
                <script>
                    $(document).ready(function() {
                        new DataTable('#example');
                        // inser code 
                        $('#insertFormData').on('submit', function(event) {
                            event.preventDefault();
                            jQuery.ajax({
                                url: "{{ url('createChallan') }}",
                                data: jQuery('#insertFormData').serialize(),
                                type: 'post',

                                success: function(response) {
                                      jQuery('#insertFormData')[0].reset();
                                    console.log(response);
                                    closeModel();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: response.message,
                                        timer: 1000, // Auto close after 1 second
                                        timerProgressBar: true,
                                        showConfirmButton: false
                                    });
                                },
                                error: function(xhr, status, error) {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Oops...",
                                        text: "Challan Reason Already Saved!",
                                    });
                                }

                            });

                        });

                        function closeModel() {
                            $('#challanModal').modal('hide');
                        }
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
