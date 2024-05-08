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

                              <div class="card text-dark bg-primay mb-3" style="max-width: 18rem;">
                                <h6 class="text-center border-bottom">Monthly Report</h6>
                                 <hr>
                                <div class="d-flex justify-content-between">

                                    <select id="selected_month">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                        <!-- Add other months here -->
                                    </select>
                                   
                                    
                                    <script>
                                    $(document).ready(function(){
                                        $('#selected_month').on('change', function(){
                                            var selectedMonth = $(this).val();
                                            console.log(selectedMonth);
                                            $.ajax({
                                                url: "{{ route('count.data') }}",
                                                method: 'get',
                                                data: {
                                                    _token: '{{ csrf_token() }}',
                                                    selected_month: selectedMonth
                                                },
                                                // success: function(response){
                                                //     console.log(response.count);
                                                //     $('#count_result').text(response.count);
                                                // }
                                                success: function(response) {
                                                    var results = response.details;
                                                    showModel();
                                                    $('#count_result').text('Total : '+response.count);
                                                    var html = '<table class="table table-bordered table-hover">';
                                                    html +=
         '<thead><th>Sid</th><th>Rollno</th><th>Name</th><th>Class</th><th>Reason</th><th>Fine</th> <th>Date</th><th>status</th></thead>';
                                                    html += '<tbody>';
                                                    if (results.length > 0) {
                                                        $.each(results, function(index, result) {
                                                            html += '<tr>';
                                                            html += '<td>' + result.sid + '</td>';
                                                            html += '<td>' + result.rollno + '</td>';
                                                            html += '<td>' + result.name + '</td>';
                                                            html += '<td>' + result.class + '</td>';
                                                            html += '<td>' + result.reason + '</td>';
                                                            html += '<td>' + result.fine + '</td>';
                                                            html += '<td>' + result.today_date + '</td>';
                                                            html += '<td>' + result.status + '</td>';
                                                           
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
                                            function showModel() {
                                                $('#showmonthlyReport').modal('show');
                                            }
                                        });
                                    });
                                    </script>
                                </div>
                              </div>

                        </div>
                        <div class="row">
                           
                            {{-- modal start --}}
                          <div class="modal fad" id="showmonthlyReport" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">Monthly Report</h3>
                                            <hr>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>
                                        <h5 id="count_result"></h5>
                                        <p id="search-results"></p>
                                    </div>
                                </div>
                            </div>
                            {{-- modal end --}}
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
