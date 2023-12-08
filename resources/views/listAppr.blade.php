@extends('base')

@section('title','listeApprenant')

@section('content')

<div class="card col-md-6 mt-5 ml-5">
    <div class="card-header">
        <h2>Liste des Apprenant</h2>
    </div>
    
    
    <div class="card-body">
       
        <div class="row mt-2" id="listeE">
           
            <table id="datatablesSimple">
            <thead>
                <tr>

                    <th>Prenom</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listApp as $ap)               
                    <tr>
                       
                        <td>{{$ap->prenom}}</td>
                        <td>{{$ap->nom}}</td>
                       
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        
    </div>
    
</div>
@endsection
