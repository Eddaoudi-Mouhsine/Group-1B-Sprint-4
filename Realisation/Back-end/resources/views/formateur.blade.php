@extends('layouts.master')


@section('title')
  Formateur
@endsection


@section('css')

@endsection


@section('title_page1')
    home
@endsection



@section('title_page2')
    Formateur
@endsection



@section('content')
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ajouter un formateur</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputNom">Nom</label>
              <input type="text" class="form-control" id="exampleInputTitle" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="exampleInputPrenom">Prénom</label>
              <input type="text" class="form-control" id="exampleInputPrenom" placeholder="Prénom">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">E-mail</label>
              <input type="Email" class="form-control" id="exampleInputEmail" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            {{-- <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
@endsection



@section('scripts')
@endsection
