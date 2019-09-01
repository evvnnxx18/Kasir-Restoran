@extends('template.template')

@section('body')

<!-- Page Wrapper -->
 <div id="wrapper">

    @include('template.sidetopbar')

     <div class="card">
         <div class="card-body">
             <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
        
          <table class="table table-striped table-hover" id="users-table">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
            </thead>
            <tbody>
                @foreach ($users as $key => $value)
                    <tr>
                        <th>{{ $key+1 }}</th>
                        <th>{{ $value->name }}</th>
                        <th>{{ $value->email }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
         </div>
     </div>

  @include('template.footer')

  </div>
  <!-- End of Page Wrapper -->


@endsection