@extends('layouts.main')
@section('title', 'Результат ІМТ')

@section('content')
<h2>Результат</h2>
    <p class="text-center">{{ $name}}, Ваш індекс маси тіла становить <strong>{{ $bmiResult[0]}}</strong> 
    ({{ $bmiResult[1]}})</p>
@endsection