@extends('layouts.app')


@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">FAQ</li>
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
                  <a href="/faq/create" class="btn btn-primary">Add FAQ</a>
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
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($faq as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->question }}</td >
                      <td>{{ $item->answer }}</td>
                      <td>
                        <a href="{{route('faq.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('faq.destroy',$item->id)}}" method="post">
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

