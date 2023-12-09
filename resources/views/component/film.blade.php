@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5 class="m-0">Add film</h5>
            </div>
          <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
            <div class="form-group">

            <lable>Film name</lable>
            <input type="text" class="form-control" name="name" required>

            <lable>Description</lable>
            <textarea type="text" class="form-control" name="description" required>
            </textarea>

            <lable>Date show</lable>
            <input type="text" class="form-control" name="dateshow" required>

            <lable>director</lable>
            <input type="text" class="form-control" name="director" required>

            <lable>prod-company</lable>
            <input type="text" class="form-control" name="prodcompany" required>

            <lable>cast</lable>
            <textarea type="text" class="form-control" name="cast" required>
            </textarea>

            <lable>Photo</lable>
            <input type="file" class="form-control" name="photo" required>




            <button type="submit" class="btn btn-primary">Add film</button>

            </form>

              </div>


            </div>
          </div>

        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection
