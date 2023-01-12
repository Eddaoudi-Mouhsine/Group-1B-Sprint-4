@extends('layouts/master')

@section('css')

@endsection

@section('name_page')
    Groupes
@endsection

@section('title-1')
    groupe
@endsection

@section('title-2')
    dashboard
@endsection

@section('content')
<form method="POST" action="{{ route('insert_Groupe') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name Groupe</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name Groupe">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Select Année de Formation</label>
        <select class="form-control" name="aneeformation">
            @foreach ($select_annéeformation as $annee)
                    <option  hidden>Select Année de Formation</option>
                    <option value={{ $annee->id }}>{{ $annee->année_formation }}</option>

            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Select Formateur</label>
        <select class="form-control" name="formateur" id="">
            @foreach ($select_formateur as $formateur)
                <option hidden>Select Formateur</option>
                <option
                 value="{{ $formateur->id }}">{{ $formateur->nom }} {{ $formateur->prenom }}</option>
            @endforeach

        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Choose Logo</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file"  name="image" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection

@section('scripts')

@endsection
