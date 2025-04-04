
<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">                    
                    <h3 class="caption-subject bold uppercase"> <i class="fa fa-th-large"></i> @if($criando) Cadastrar Anime @else Editar Anime @endif </h3>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" id="form_caixa" method="POST"  action="{{ $criando ? route('anime-store') : route('anime-update', ['id' => $anime->id]) }}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">                        
                         <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="nome" class="bold">Nome:
                                    <span class="required text-danger" aria-required="true" > * </span> 
                                </label>
                                <input type="text"  class="form-control req" maxlength="50" id="nome" name="nome" value="{{$anime->title ?? ''}}">  
                            </div>                            
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-8">
                                <label class="form-label bold" for="descricao">Descricao:</label>
                                <textarea class="form-control" maxlength="255" id="descricao" name="descricao">{{$anime->short_description ?? ''}}</textarea>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-2">
                                <label for="lancamento" class="bold">Ano de Lançamento:
                                    <span class="required text-danger" aria-required="true" > * </span> 
                                </label>
                                <input type="text"  class="form-control req" maxlength="4" id="lancamento" name="lancamento" value="{{$anime->release_year ?? ''}}">  
                            </div>                            
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="estudio" class="bold">Estúdio:
                                    <span class="required text-danger" aria-required="true" > * </span> 
                                </label>
                                <input type="text"  class="form-control req" maxlength="50" id="estudio" name="estudio" value="{{$anime->studio ?? ''}}">  
                            </div>                            
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="criador" class="bold">Criador:
                                    <span class="required text-danger" aria-required="true" > * </span> 
                                </label>
                                <input type="text"  class="form-control req" maxlength="50" id="criador" name="criador" value="{{$anime->creator ?? ''}}">  
                            </div>                            
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" id="salvar" class="btn btn-success btn-sm">Salvar</button>
                        <a href="{{route('welcome')}}" type="button" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>