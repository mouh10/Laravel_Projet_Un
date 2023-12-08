@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
*{
font-family:Times New Roman;
}
</style>
<div class="container">
    <center>
        <h1 class="h1 mt-4" style="font-family:Times New Roman">
            LISTE DES APPRENANTS
        </h1>
        <a href="http://127.0.0.1:8000/Formations" class="btn btn-info">LISTE FORMATION</a>
    </center>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Matricule</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($Liste as $Cle => $Valeur)
                    <tr>
                        <th scope="row">{{ $Cle+1 }}</th>
                        <td>{{ $Valeur["Prenom"] }}</td>
                        <td>{{ $Valeur["Nom"] }}</td>
                        <td>{{ $Valeur["Matricule"] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
