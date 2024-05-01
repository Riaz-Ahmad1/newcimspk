@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <!-- Content Row -->

                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3> Search Students </h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-controller" id="search" name="search"></input>
                                        <button onclick="clearInput()">Clear</button>
                                    </div>
                                    <div id="search-results"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="challanModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Challan Form Data </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('createUser') }}" method="post" id="insertForm">
                                        <div class="modal-body">
                                            <input type="hidden" name="sid" id="id">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="title">Name:</label>
                                                    <input class="form-control form-control-sm" type="text" name="name"
                                                        id="name" />
                                                </div>
                                                <div class="col">
                                                    <label for="title">Roll No:</label>
                                                    <input class="form-control form-control-sm" type="text" name="rollno"
                                                        id="rollno" />
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col">
                                                    <label for="title">Issue Date:</label>
                                                    <input class="form-control form-control-sm" type="date"
                                                        value="{{ now()->format('Y-m-d') }}" name="today_date"
                                                        id="today_date" />
                                                </div>
                                                <div class="col">
                                                    <label for="title">Class:</label>
                                                    <input class="form-control form-control-sm" type="text" name="class"
                                                        id="class" />
                                                </div>
                                              </div>
                                            <div>
                                                <label for="body">Reason:</label>
                                                <select id="product-dropdown" class="form-select form-select-sm" name="reason">
                                                    <option selected>Select challan reason</option>
                                                    @foreach ($challanData as $item)
                                                    <option value="{{$item->id}}"> {{$item->reason}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                <input class="form-control form-control-sm" type="hidden" name="fine"
                                                    id="price" />

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="submitBtn"
                                                class="btn btn-success btn-sm">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $('#search').on('keyup', function() {
                            $value = $(this).val();
                            if ($value.trim() !== '') {
                                $.ajax({
                                    type: 'get',
                                    url: '{{ URL::to('searchStudent') }}',
                                    data: {
                                        'search': $value
                                    },
                                    success: function(response) {
                                        var results = response.details;
                                        var html = '<table class="table table-bordered table-hover">';
                                        html +=
                                            '<thead><th>Name</th><th>RollNo</th><th>Class</th><th>Challan</th></thead>';
                                        html += '<tbody>';
                                        if (results.length > 0) {
                                            $.each(results, function(index, result) {
                                                html += '<tr>';
                                                html += '<td>' + result.name + '</td>';
                                                html += '<td>' + result.rollno + '</td>';
                                                html += '<td>' + result.class + '</td>';
                                                html += '<td><button value="' + result.id +
                                                    '" type="button" class="btn btn-primary btn-sm editBtn"> Challan Form</button></td>';
                                                html += '</tr>';
                                            });
                                        } else {
                                            html += '<tr><td colspan="2">No results found</td></tr>';
                                        }
                                        html += '</tbody>';
                                        html += '</table>';
                                        $('#search-results').html(html);
                                        // Clear input field after search
                                        // $('#search').val('');
                                    }
                                });
                            } else {
                                $('#search-results').empty();
                            }
                        });

                        function clearInput() {
                            document.getElementById('search').value = '';
                        }
                    </script>

                    <script>
                        $(document).ready(function() {
                            $('#insertForm').on('submit',function(event){
                            event.preventDefault();
                            jQuery.ajax({
                              url:"{{url('createUser')}}",
                              data: jQuery('#insertForm').serialize(),
                              type:'post',

                              success:function(response){
                                  jQuery('#insertForm')[0].reset();
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
                                console.error(error);
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text:  error,
                                });
                            }

                            });

                          });
                          function closeModel() {
                                $('#challanModal').modal('hide');
                            }
                        });
                    </script>
                    <script>
                        $(document).ready(function() {
                            $('#product-dropdown').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "/getprice/" + id,
                                    type: "GET",
                                    success: function(response) {
                                        $('#price').val(response.data.price);
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                        Swal.fire({
                                            icon: "error",
                                            title: "Oops...",
                                            text: error,
                                        });

                                    }
                                });
                            });

                        });
                    </script>
                    <script>
                        $(document).ready(function() {
                            $(document).on('click', '.editBtn', function() {
                                var id = $(this).val();
                                // alert(id);
                                $('#challanModal').modal('show');
                                $.ajax({
                                    type: "GET",
                                    url: "/editData/" + id,
                                    success: function(response) {
                                        // console.log(response);
                                        $('#id').val(id);
                                        $('#sid').val(response.data.id);
                                        $('#rollno').val(response.data.rollno);
                                        $('#name').val(response.data.name);
                                        $('#class').val(response.data.class);
                                    }
                                });
                            });
                        });
                    </script>



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
