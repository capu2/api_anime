@extends('layouts.app')

@section('content')
        <div class="container mt-4">
            <h1 class="text-center">Lista de Animes</h1>
            <a href="{{route('create-anime')}}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-lg"></i> Adicionar
            </a>
            <div class="table-responsive mt-4">                
                <table id="tabela_anime" class="table table-bordered  table-striped">            
                    <thead>
                        <tr>
                            <th>Nome</th>                    
                            <th>Ano</th>
                            <th>Estudio</th>
                            <th>Criador</th>
                            <th>Ações</th>
                        </tr>
                    </thead>  
                </table>
            </div>    
        </div>
        
@endsection

@section('js')

    <script>  
        let table = $('#tabela_anime').DataTable({
             language: {
                url: "{{ asset('js/datatables.json') }}"
            },            
            autoWidth: false,
            processing: false,
            serverSide: true,
            ajax: {
                url: `{{ route("anydata") }}`,              
            },

          columns: [
              { data: 'title', name: 'title' },
              { data: 'release_year', name: 'release_year' }, 
              { data: 'studio', name: 'studio' }, 
              { data: 'creator', name: 'creator' }, 
              { data: 'acao', name: 'acao', width: '12%'} 
          ]

      });

    </script>

@endsection
