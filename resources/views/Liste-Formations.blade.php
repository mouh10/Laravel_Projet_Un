@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
*{
font-family:Times New Roman;
}
</style>
<div class="container">
    <center>
        <h1 class="h1 mt-4">
            LISTE DES FORMATIONS
        </h1>
        <a href="http://127.0.0.1:8000/Apprenants" class="btn btn-info">LISTE APPRENANTS</a>
    </center>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Duree</th>
                        <th scope="col">Frais</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($Liste as $Cle => $Valeur)
                    <tr>
                        <th scope="row">{{ $Cle+1 }}</th>
                        <td>{{ $Valeur["Nom"] }}</td>
                        <td>{{ $Valeur["Duree"] }}</td>
                        <td>{{ $Valeur["Frais"] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
