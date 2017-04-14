@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>
           
        </div>
    </div>

    
   <table class="table table-bordered">
        <tr>
             <th>No</th>
          
            <th>date_p</th>
            <th>nombre</th>
             <th>observation</th>
             <th>num_bord</th>
   
        </tr>
  
        <tr>
           
            <td>{{ $prelevements->date_pv }}</td>
            <td>{{ $prelevements->nombre_article }}</td>
            <td>{{ $prelevements->observation}}</td>
            <td>{{ $prelevements->num_bordereau_envoi }}</td>       
        </tr>

    </table>




@endsection