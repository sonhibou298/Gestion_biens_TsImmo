@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Ajouter un pays</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('AjoutPays')}}">
                        @csrf

                        <div class="form-group ">
                            <label for="nom">Nom Pays</label>
                            <input type="text" name="nom" class="form-control", required>
                        </div>

                        <div class="form-group">
                            <label for="desc">indicatif</label>
                            <input type="number" name="indicatif" class="form-control", required>
                        </div>

                        <div class="form-group"><br><br>
                            <button type="submit" class="btn btn-outline-dark">Ajouter</button>
                        </div>

                    </form>
                </div>
        </div>
        </div>
        <div class="col-md-6">

        <div class="card mt-5">
                <div class="card-header">
                    <h2>Liste des pays</h2>
                </div>
                <div class="card-body">
                    {{--            <a href="{{route('CreerPays')}}" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>--}}
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>nom</th>
                            <th>indicatif</th>
                            <th>Action</th>
                        </tr>
                        @foreach($pays as $pays)
                            <tr>
                                <td>{{$pays->nomPays}}</td>
                                <td>{{$pays->indicatif}}</td>
                                <td>
                                    <a href="{{route('modifierPays', $pays)}}"><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                                    <a onclick="return confirm('Voulez-vous supprimer ce Pays ?')" href="{{route('SupprimerPays', $pays)}}"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
