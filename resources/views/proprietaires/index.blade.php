@extends('base')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des proprietaires</h2>
        </div>
        <div class="card-body">
{{--            <a href="{{route('CreerPays')}}" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>--}}
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Code</th>
                    <th>CNI</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Date Naissance</th>
                    <th>Lieu Naissance</th>
                    <th>Action</th>
                </tr>
                @foreach($proprietaire as $p)
                    <tr>
                        <td>{{$p->codeProprietaire}}</td>
                        <td>{{$p->cni}}</td>
                        <td>{{$p->nomProprietaire}}</td>
                        <td>{{$p->prenomProprietaire}}</td>
                        <td>{{$p->sexe}}</td>
                        <td>{{$p->dateNaissance}}</td>
                        <td>{{$p->lieuNaissance}}</td>
                        <td>
                            <a href="{{url('editProprietaire/'.$p->id)}}"><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                            <a onclick="return confirm('Voulez-vous supprimer ce proprietaire ?')" href="{{route('SupprimerProprietaire', $p)}}"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
