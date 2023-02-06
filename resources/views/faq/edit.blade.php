@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
          </div>
          <div class="col-sm-6">
            <!-- <a href="#" class="btn btn-block btn-primary btn-lg">Add Device</a> -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/faq">FAQ</a></li>
              <li class="breadcrumb-item active">Edit FAQ</li>
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
                <form action="{{ route('faq.update', $faq->id)}}" method="post" >
                    @method('PUT')
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="question" value="{{ $faq->question }}" class="form-control" placeholder="Question">
                  </div>
                  @error('question')
                  <small style="color:red">{{ $message }}</small>
                  @enderror
                  <div class="form-group">
                    <textarea name="answer" cols="30" rows="10" class="form-control" placeholder="Answer">{{ $faq->answer }}</textarea>
                  </div>
                  @error('answer')
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

