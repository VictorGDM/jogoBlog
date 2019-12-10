@extends('template.app')

@section('content')

<div class="col-md-8 well">
    <div class="mb-2 col-md-12">
        <div class="card">
            <h5 class="card-header">
                {{$forum->tituloFor}}
            </h5>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$forum->descricaoFor}}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mb-2 col-md-10">
        <div class="card">
            <h5 class="card-header">
                Comentários
            </h5>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($forum->resposta as $respostas)
                    <li class="list-group-item">{{$respostas->descricaoRes}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <form class="col-md-12" action="{{ url('forum/comentario')}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$forum->id}}">

        <div class="row">
            <div class="form-group col-md-10">
                <label class="control-label" for="descricaoRes">Comentar</label>
                <textarea type="text" name="descricaoRes" class="form-control col-md-12"></textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Comentar</button>
    </form>
</div>
@endsection