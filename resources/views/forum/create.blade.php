@extends('template.app')

@section('content')

<div class="col-md-12">
    <h3>Novo Fórum</h3>
</div>

<div class="col-md-8 well">
    <form class="col-md-12" action="{{ url('forum/store')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-10">
                <label class="control-label" for="tituloFor">Título</label>
                <input type="text" name="tituloFor" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios1" value="Avaliação">
                <label class="form-check-label" for="gridRadios1">
                    <i class="fas fa-check"></i>
                    Avaliação
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios2" value="Bug">
                <label class="form-check-label" for="gridRadios2">
                    <i class="fas fa-bug"></i>
                    Bug
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios3" value="Erro">
                <label class="form-check-label" for="gridRadios2">
                    <i class="fas fa-exclamation-triangle"></i>
                    Erro
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios4" value="Reclamação">
                <label class="form-check-label" for="gridRadios2">
                    <i class="fas fa-frown"></i>
                    Reclamação
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios5" value="Dúvida">
                <label class="form-check-label" for="gridRadios2">
                    <i class="fas fa-question"></i>
                    Dúvida
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="radio" name="tipo" id="gridRadios6" value="Outros" checked>
                <label class="form-check-label" for="gridRadios3">
                    <i class="fas fa-ellipsis-h"></i>
                    Outros
                </label>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="control-label" for="descricaoFor">Conteudo</label>
                <textarea type="text" name="descricaoFor" class="form-control col-md-12"></textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
</div>

@endsection