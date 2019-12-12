@extends('template.app')

@section('content')
<link href="{{asset('sass/documentacao.scss')}}" rel="stylesheet">

@foreach ($documentacoes as $documentacao)

<div id="gameDesign" class="row">
    <div class="col-md-3 colmd1-1">
        <div id="card1-1" class="card">
            <img class="imgGD" src="{{asset('imgs/y.png')}}">
        </div>
    </div>

    <div class="col-md-8 colmd1-2">
        <div id="card1-2" class="card">
            <div class="card-body">
                <h5 class="card-title">Game Design</h5>

                <div class="perfilUsuario">
                    <h6 class="card-subtitle mb-2 text-muted">Perfil de Usuário</h6>
                    <p class="card-text">{{$documentacao->perfilUsuario}}</p>
                </div>

                <div class="aplicacao">
                    <h6 class="card-subtitle mb-2 text-muted">Aplicação</h6>
                    <p class="card-text">{{$documentacao->aplicacao}}</p>
                </div>

                <div class="plataforma">
                    <h6 class="card-subtitle mb-2 text-muted">Plataforma</h6>
                    <p class="card-text">{{$documentacao->plataforma}}</p>
                </div>

                <div class="ritmo">
                    <h6 class="card-subtitle mb-2 text-muted">Ritmo</h6>
                    <p class="card-text">{{$documentacao->ritmo}}</p>
                </div>

                <div class="modoJogo">
                    <h6 class="card-subtitle mb-2 text-muted">Modo de Jogo</h6>
                    <p class="card-text">{{$documentacao->modoJogo}}</p>
                </div>

                <div class="genero">
                    <h6 class="card-subtitle mb-2 text-muted">Gênero</h6>
                    <p class="card-text">{{$documentacao->genero}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nivJogMus" class="row teste">
    <div class="col-md-8 colmd2-1">
        <div id="card2-2" class="card">
            <div class="card-body">
                <h5 class="card-title">Jogabilidade</h5>
                <div class="jogabilidade">
                    <p class="card-text">{{$documentacao->jogabilidade}}</p>
                </div>

                <div class="niveis">
                    <h6 class="card-subtitle mb-2 text-muted">Níveis</h6>
                    <p class="card-text">{{$documentacao->niveis}}</p>
                </div>

                <div class="musica">
                    <h6 class="card-subtitle mb-2 text-muted">Musicalização e Sonoplastia</h6>
                    <p class="card-text">{{$documentacao->musiSono}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 colmd2-1">
        <div id="card2-1" class="card">
            <img class="imgJB" src="{{asset('imgs/cg.png')}}">
        </div>
    </div>
</div>

<div id="narrativa" class="row teste2">
    <div class="col-md-3 colmd3-1">
        <div id="card3-1" class="card">
            <img class="imgN" src="{{asset('imgs/p.png')}}">
        </div>
    </div>

    <div class="col-md-8 colmd3-2">
        <div id="card3-2" class="card">
            <div class="card-body">
                <h5 class="card-title">Narrativa</h5>

                <div class="narrativa">
                    <p class="card-text">{{$documentacao->narrativa}}</p>
                </div>

                <div class="personagens">
                    <h6 class="card-subtitle mb-2 text-muted">Personagens</h6>
                    <p class="card-text">-Mario</p>
                    <p class="card-text">-Luigi</p>
                    <p class="card-text">-Peach</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection