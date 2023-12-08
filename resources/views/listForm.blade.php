@extends('base')

@section('title','listeClasse')

@section('content')

<div class="card row col-md-6 mt-5 ml-5">
    <div class="card-header">
        <h2>Liste des formation</h2>
    </div>
    
    
    <div class="card-body">
       
        <div class="row mt-2" id="listeE">
           
            <table id="datatablesSimple">
            <thead>
                <tr>
                   
                     <th>#</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listForm as $fm)               
                    <tr>
                       
                       <td>{{$fm->id}}</td>
                        <td>{{$fm->nom}}</td>
                       
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        
    </div>
    
</div>
@endsection
