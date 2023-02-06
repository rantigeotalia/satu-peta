@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Public Service</h1>
          </div>
          <div class="col-sm-6">
            <!-- <a href="#" class="btn btn-block btn-primary btn-lg">Add Device</a> -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/public_services">Public Service</a></li>
              <li class="breadcrumb-item active">Add Public Service</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('public_services.store')}}" method="post" >
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" placeholder="Full Name">
                  </div>
                  @error('full_name')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                  </div>
                  @error('email')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Phone Number">
                  </div>
                  @error('phone_number')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                  </div>
                  @error('message')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>

                </form>
                 

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

