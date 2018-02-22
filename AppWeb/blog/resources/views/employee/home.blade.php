@extends('layout')

@section('script')
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
                                <a href="#" type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal{{ $row['id'] }}">Detalle</a>
                            </td>                            
                        </tr>      
                        <!-- Modal --> 
                        <div class="container">   
                            <div class="modal fade" id="myModal{{ $row['id'] }}" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title">Detail Employee</h2>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>name</label>
                                                    <input type="text" value="{{ $row['name'] }}" class="form-control" readonly disabled>                                                                       
                                                </div>
                                            </div>  
                                            
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" value="{{ $row['email'] }}" class="form-control" readonly disabled>                                                                       
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" value="{{ $row['phone'] }}" class="form-control" readonly disabled>                                                                       
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" value="{{ $row['address'] }}" class="form-control" readonly disabled>                                                                       
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" value="{{ $row['position']}}" class="form-control" readonly disabled>                                                                       
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Salary</label>                                                    
                                                    <input type="text" value="{{ $row['salary'] }}" class="form-control" readonly disabled> 
                                                                                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Skills</label>
                                                    @foreach($row['skills'] as $row)
                                                    <input type="text" value="{{ $row['skill'] }}" class="form-control" readonly disabled> 
                                                    @endforeach                                                                     
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Fin Modal-->                   
                    @endforeach
                @endif          
            </tbody>
        </table>        
    </div>
</div>
@endsection