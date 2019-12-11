@extends('template.app')

@section('content')
<link href="{{asset('sass/home.scss')}}" rel="stylesheet">

<div class="content">
    <div id="divCarusel" class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('imgs/1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imgs/2.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imgs/3.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row">
        <div id="divBlog" class="col-md-4">
            <div id="card1" class="card">
                <img id="imgm" src="{{asset('imgs/mn.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p id="fontTi1" class="card-text">Tudo sobre o jogo</p>
                    <a href="/Documentacao" id="lerMais" class="card-text">Ler mais...</a>
                </div>
            </div>
        </div>
        <div id="divBlog" class="col-md-4">
            <div id="card2" class="card">
                <img id="imgl" src="{{asset('imgs/lup.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p id="fontTi2" class="card-text">Dicas para iniciantes</p>
                    <a href="" id="lerMais" class="card-text">Ler mais...</a>
                </div>
            </div>
        </div>
        <div id="divBlog" class="col-md-4">
                <div id="card3" class="card">
                    <img id="imgb" src="{{asset('imgs/b.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p id="fontTi3" class="card-text">Fórum</p>
                        <a href="/forum" id="lerMais" class="card-text">Ler mais...</a>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection