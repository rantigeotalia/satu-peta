@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
            <!-- <a href="#" class="btn btn-block btn-primary btn-lg">Add Device</a> -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/sliders">Slider</a></li>
              <li class="breadcrumb-item active">Add Slider</li>
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
                <form action="{{ route('sliders.store')}}" method="post" >
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                  </div>
                  @error('title')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                  </div>
                  @error('description')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <input type="file" name="image" class="form-control" placeholder="File">
                  </div>
                  @error('image')
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

