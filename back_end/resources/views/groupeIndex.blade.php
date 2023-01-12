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
                    <div><a href="{{ route('AddGroupe') }}"><button>Add Groupe</button></a></div>
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
                            <a href="{{ Route('get_groupe', $groupe->id) }}"><button>Edit</button></a>
                            <form method="DELETE" action="">
                               <a href="{{ Route('delete_groupe' , $groupe->id) }}"><button>Delete</button></a>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
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
