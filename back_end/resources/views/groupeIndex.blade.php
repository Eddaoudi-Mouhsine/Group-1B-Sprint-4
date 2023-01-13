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

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <div><a href="{{ route('AddGroupe') }}"><button class="btn btn-primary">Add Groupe</button></a></div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Logo</th>
                      <th>Name Groupe</th>
                      <th>Formateur</th>
                      <th>Année Formation</th>
                      <th>paramètre</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($select_groupe as $groupe)
                        <tr>
                        <td><img src="{{ asset('storage/upload/' . $groupe->logo) }}" style="border-radius: 100%; width: 50px;"></td>
                        <td>{{ $groupe->name }}</td>
                        <td>{{ $groupe->formateur->nom }} {{ $groupe->formateur->prenom }}</td>
                        <td>{{ $groupe->anneeFormation->année_formation }}</td>
                        <td>
                            <div style="display: flex; justify-content: center;">
                                <a href="{{ Route('get_groupe', $groupe->id) }}"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{ Route('delete_groupe' , $groupe->id) }}">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" style="border: none; background-color: none; background: none; color: red; margin-left: 20px"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <a href="{{ route('export_groupes') }}"><button>Export Groupes</button></a>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
@endsection

@section('scripts')

@endsection
