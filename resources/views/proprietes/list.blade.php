@extends('base')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des propriétés</h2>
        </div>
        <div class="card-body">
            {{--            <a href="{{route('CreerPays')}}" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>--}}
            <table class="table table-bordered table-hover" id="listPropriete">
                <tr>
                    <th>Nom Propriété</th>
                    <th>Date Enregistrement</th>
                    <th>Nbr Etage</th>
                    <th>Nbr Piece</th>
                    <th>Superficie</th>
                    <th>Adresse</th>
                    <th>Type</th>
                    <th>Proprietaire</th>
                    <th>Quartier</th>
                    <th>Action</th>
                </tr>
                @foreach($propriete as $p)
                    <tr>
                        <td>{{$p->nomPropriete}}</td>
                        <td>{{$p->dateEnregistrement}}</td>
                        <td>{{$p->nbrEtage}}</td>
                        <td>{{$p->nbrPiece}}</td>
                        <td>{{$p->superficie}} km2</td>
                        <td>{{$p->adresse}}</td>
                        <td>{{$p->typePropriete}}</td>
                        <td>{{$p->proprietaire_id}}</td>
                        <td>{{$p->quartier_id}}</td>

                        <td>
                            <a href="{{url('/editPropriete/'.$p->id)}}"><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                            <a onclick="return confirm('Voulez-vous supprimer ce proprietaire ?')" href="{{route('SupprimerPropriete', $p)}}"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
