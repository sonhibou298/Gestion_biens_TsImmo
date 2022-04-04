@extends('base')


@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h2>Modifier un proprietaire</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('updateProprietaire/'.$proprietaire->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group ">
                    <label for="nom">Code Proprietaire</label>
                    <input type="text" name="code" class="form-control" value="{{$proprietaire->codeProprietaire}}" , required>
                </div>

                <div class="form-group">
                    <label for="desc">Cni</label>
                    <input type="text" name="cni" class="form-control" value="{{$proprietaire->cni}}" , required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Nom Proprietaire</label>
                    <input class="form-control" name="nom" type="text" value="{{$proprietaire->nomProprietaire}}" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Prenom Proprietaire</label>
                    <input class="form-control" name="prenom" type="text" value="{{$proprietaire->prenomProprietaire}}" , required >
                </div>

                <div class="mb-3">
                    <select class="form-select" name="sexe" aria-label="Default select example" value="{{$proprietaire->sexe}}", required>
                        <option selected disabled>Sexe</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Date de naissance</label>
                    <input class="form-control" name="date" type="date" value="{{$proprietaire->dateNaissance}}", required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Lieu de naissance</label>
                    <input class="form-control" name="lieuNaissance" type="text" value="{{$proprietaire->lieuNaissance}}" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Admin</label>
                    <input class="form-control" name="admin" type="number" value="{{$proprietaire->users_id}}" , required >
                </div>

                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-dark">Modifier</button>
                </div>

            </form>
        </div>
@endsection
