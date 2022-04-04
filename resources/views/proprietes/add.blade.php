@extends('base')

@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h2>Ajouter une propriete</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('AjoutProprietaire')}}">
                @csrf

                <div class="form-group ">
                    <label for="nom">Code Proprietaire</label>
                    <input type="text" name="code" class="form-control", required>
                </div>

                <div class="form-group">
                    <label for="desc">Cni</label>
                    <input type="text" name="cni" class="form-control", required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Nom Proprietaire</label>
                    <input class="form-control" name="nom" type="text" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Prenom Proprietaire</label>
                    <input class="form-control" name="prenom" type="text" , required >
                </div>

                {{--                <div class="mb-3">--}}
                {{--                    <label for="formFile" class="form-label">Sexe</label>--}}
                {{--                    <input class="form-control" name="sexe" type="text" , required >--}}
                {{--                </div>--}}
                <div class="mb-3">
                    <select class="form-select" name="sexe" aria-label="Default select example", required>
                        <option selected disabled>Sexe</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Date de naissance</label>
                    <input class="form-control" name="date" type="date" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Lieu de naissance</label>
                    <input class="form-control" name="lieuNaissance" type="text" , required >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Admin</label>
                    <input class="form-control" name="admin" type="number" , required >
                </div>

                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-dark">Ajouter</button>
                </div>

            </form>
        </div>
@endsection
