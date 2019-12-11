@extends('template.app')

@section('content')
<link href="{{asset('sass/documentacao.scss')}}" rel="stylesheet">

@foreach ($documentacoes as $documentacao)
<label for="aa">{{$documentacao}}</label>
    
@endforeach
@endsection