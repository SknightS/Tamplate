@extends('employer.employerDashboard')
@section('empr-contant')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <h3 class="tab-pane-title">Manage Jobs</h3>

    <div class="table table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>

            <tr>

                <th>SL</th>
                <th>Job Name</th>
                <th>Company Name</th>
                <th>Job Type</th>
                <th>Job Vacancy</th>
                <th>Job Create Date</th>
                <th>Job Status</th>

            </tr>
            </thead>
            <tbody>

            @php
                $count= 1
            @endphp
            @foreach($employerAllJobs as $allJob)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$allJob->jobName}}</td>
                    <td>{{$allJob->companyName}}</td>
                    <td>{{$allJob->jobType}}</td>
                    <td>{{$allJob->vacancy}}</td>
                    <td></td>
                    <td></td>

                    @php
                        $count++
                    @endphp
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

@endsection

@section('foot-js')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready( function () {
            $('#example').DataTable({

                // "columnDefs": [ {
                //     "targets": [ 1,2,3,5,6,9 ],
                //     "orderable": false
                // } ]
            });
        } );

    </script>

@endsection