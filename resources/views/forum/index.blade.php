@extends('template.app')

@section('content')
<link href="{{asset('sass/forum.scss')}}" rel="stylesheet">

<span>Escrever:</span>
<button>Criar</button>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAval"
                    aria-expanded="false" aria-controls="collapseAval">
                    Avaliações
                </button>
            </div>
        </h5>

        <div id="collapseAval" class="collapse" aria-labelledby="headingAval" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Avaliação')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBug"
                    aria-expanded="false" aria-controls="collapseBug">
                    Bugs
                </button>
            </div>
        </h5>

        <div id="collapseBug" class="collapse" aria-labelledby="headingBug" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Bug')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    Dúvidas
                </button>
            </div>
        </h5>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Dúvida')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseErro"
                    aria-expanded="false" aria-controls="collapseErro">
                    Erros
                </button>
            </div>
        </h5>

        <div id="collapseErro" class="collapse" aria-labelledby="headingErro" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Erro')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseRecl"
                    aria-expanded="false" aria-controls="collapseRecl">
                    Reclamações
                </button>
            </div>
        </h5>

        <div id="collapseRecl" class="collapse" aria-labelledby="headingRecl" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Reclamação')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 well">
    <div class="card shadow mb-2 bg-white rounded">

        <h5 class="card-header">
            <div class="accordion" id="accordionExample">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOutros"
                    aria-expanded="false" aria-controls="collapseOutros">
                    Outros
                </button>
            </div>
        </h5>

        <div id="collapseOutros" class="collapse" aria-labelledby="headingOutros" data-parent="#accordionExample">
            <div class="card-body">

                @foreach ($foruns as $forum)
                @if ($forum->tipo === 'Outros')

                <div class="mb-2 col-md-12">
                    <div class="card">
                        <h5 class="card-header">
                            {{$forum->titulo}}
                            <button>Comentar</button>
                        </h5>

                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body col-12 text-truncate">
                                    {{$forum->descricao}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection