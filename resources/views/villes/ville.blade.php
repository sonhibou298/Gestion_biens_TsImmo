@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Ajouter une ville</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('AjoutVille')}}">
                        @csrf

                        <div class="form-group ">
                            <label for="nom">Nom de la ville</label>
                            <input type="text" name="nom" class="form-control", required>
                        </div>

                        <select class="form-select" name="pays" aria-label="Default select example", required>
                            <option selected>Pays</option>
                            @foreach($pays as $p)
                                <option value="{{$p->id}}">{{$p->nomPays}}</option>
                            @endforeach
                        </select>

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
                <h2>Liste des villes</h2>
            </div>
            <div class="card-body">
                {{--            <a href="{{route('CreerPays')}}" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>--}}
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>nom de la ville</th>
                        <th>pays</th>
                        <th>Action</th>
                    </tr>
                    @foreach($villes as $ville)
                        <tr>
                            <td>{{$ville->nomVille}}</td>
                            <td>{{$ville->pays_id}}</td>
                            <td>
                                <a href="{{route('ModifierVille', $ville)}}"><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                                <a onclick="return confirm('Voulez-vous supprimer ce Pays ?')" href="{{route('SupprimerVille', $ville)}}"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection
