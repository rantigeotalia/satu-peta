@extends('layouts.app')


@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Public Service</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Public Service</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="/public_services/create" class="btn btn-primary">Add Public Service</a>
                </div>
                @if($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($public_service as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->fullname }}</td >
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone_number }}</td>
                      <td>{{ $item->message }}</td>
                      <td>
                        <a href="{{route('public_services.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('public_services.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

