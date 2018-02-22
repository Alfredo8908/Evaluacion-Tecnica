@extends('layout')

@section('script')
<!--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
<script>
    $(document).ready(function(){            
        $('#search').DataTable({
            "columnDefs": [ 
                {
                    "targets": [ 0 ],
                    "searchable": false
                },
                {
                    "targets": [ 2 ],
                    "searchable": false
                },
                {
                    "targets": [ 3 ],
                    "searchable": false
                },
                {
                    "targets": [ 1 ],
                    "searchable": true
                },                          
            ],
        });
    });
</script>
@endsection

@section('content')

<div class="col-md-12">
    <div class="container">
        <h2>Listado de Empleados</h2>   
        <br>           
        <table class="table table-striped table-bordered" id="search">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Acción</th>
                </tr>
            </thead>    
            <tbody>
                @if($employees)
                    @foreach($employees as $row)
                        <tr>
                            <td>{{ $row['name'] }}</td>
                            <td>{{ $row['email'] }}</td>
                            <td>{{ $row['position'] }}</td>
                            <td>{{ $row['salary'] }}</td>
                            <td>
                                <a href="#" type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal">Detalle</a>
                            </td>
                        </tr> 
                    @endforeach
                @endif          
            </tbody>
        </table>        
    </div>
</div>
<!-- Modal -->
<div class="container">   
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection