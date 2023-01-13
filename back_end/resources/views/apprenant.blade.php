@extends('layouts/master')

@section('css')

@endsection

@section('name_page')
    <?php
        use App\Models\Apprenant;
    ?>
    Apprenants {{ Apprenant::count() }}
@endsection

@section('title-1')
    apprenant
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
                <div><a href=""><button class="btn btn-primary">Add Apprenant</button></a></div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>Email</th>
                  <th>Numero</th>
                  <th>Address</th>
                  <th>Image</th>
                  <th>paramètre
                </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($apprenant as $appr)
                    <tr>
                    {{-- <td><img src="{{ asset('storage/upload/' . $groupe->logo) }}" style="border-radius: 100%; width: 50px;"></td> --}}

                    <td>{{ $appr->nom }}</td>
                    <td>{{ $appr->prenom }}</td>
                    <td>{{ $appr->email }}</td>
                    <td>{{ $appr->tele }}</td>
                    <td>{{ $appr->address }}</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <div style="display: flex; justify-content: center;">
                            <a href=""><i class="fas fa-edit"></i></a>
                            <form method="POST" action="">
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
            <div>
                <a href="{{ route('export_apprenants') }}"><button class="btn btn-primary">Export Apprenants</button></a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    import Apprenants
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Import Apprenant</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('import_apprenants') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <input type="file" name="file_import">

                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                           </form>
                    </div>
                    </div>
                </div>

            </div>
            {{-- <a href="{{ route('export_apprenants') }}"><button>Import Groupes</button></a> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
