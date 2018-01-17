@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                
                
                <div class="panel-heading">Listagem Pagamentos 
                    
                    <button class="btn btn-primary" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span> Lançar Pagamentos
                    </button>
               
                </div>



                <div class="panel-body">

                        <div class="table-responsive text-center">
                            <table class="table table-borderless" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Data Pagamento</th>
                                        <th class="text-center">Valor</th>
                                        <th class="text-center">Pessoa</th>
                                        <th class="text-center">Descrição</th>
                                        
                                    </tr>
                                </thead>
                                @foreach($pagamentos as $pagamentos)
                                <tr class="item{{$pagamentos->id}}">
                                    <td>{{$pagamentos->id}}</td>
                                    <td>{{$pagamentos->data_pag}}</td>
                                    <td>{{$pagamentos->valor}}</td>
                                    <td>{{$pagamentos->pessoa}}</td>
                                    <td>{{$pagamentos->plano_contas}}</td>
                                    <td><button class="edit-modal btn btn-info" data-id="{{$pagamentos->id}}"
                                            data-name="{{$pagamentos->name}}">
                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                        <button class="delete-modal btn btn-danger"
                                            data-id="{{$pagamentos->id}}" data-name="{{$pagamentos->name}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
