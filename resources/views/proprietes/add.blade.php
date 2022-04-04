@extends('base')

@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h2>Ajouter une propriete</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('ajoutPropriete')}}">
                @csrf

                <div class="form-group ">
                    <label for="nom">Nom Proprieté</label>
                    <input type="text" name="nom" class="form-control", required>
                </div>

                <div class="form-group">
                    <label for="desc">Date Enregistrement</label>
                    <input type="date" name="date" class="form-control", required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Nombre Etage</label>
                    <input class="form-control" name="nbrEtage" type="number" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Nombre piece</label>
                    <input class="form-control" name="nbrPiece" type="number" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Superficie</label>
                    <input class="form-control" name="superficie" type="float" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">adresse</label>
                    <input class="form-control" name="adresse" type="text" , required >
                </div>

                <div class="mb-3">
                    <select class="form-select" name="type" aria-label="Default select example", required>
                        <option selected disabled>Type Propriete</option>
                        <option value="appartement">Appartement</option>
                        <option value="duplex">Duplex</option>
                        <option value="villa">Villa</option>
                        <option value="magasin">Magasin</option>
                    </select>
                </div>


                <div class="mb-3">
                    <select class="form-select" name="proprietaire" aria-label="Default select example", required>
                        <option selected disabled>Proprietaire</option>
                        @foreach($proprietaire as $prop)
                        <option value="{{$prop->id}}">{{$prop->prenomProprietaire}} {{$prop->nomProprietaire}} ({{$prop->codeProprietaire}})</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select" name="quartier" aria-label="Default select example", required>
                        <option selected disabled>Quartier</option>
                        @foreach($quartier as $q)
                            <option value="{{$q->id}}">{{$q->nomQuartier}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-dark">Ajouter</button>
                </div>

            </form>
        </div>
@endsection
