@extends('layouts.main')
@section('title', 'Результат індексу Руф\'є')

@section('content')
<h2>Результат</h2>
<p class="text-center">Ваш результат проби Руф'є - <strong>{{ $indexRuffier[0] }}</strong> ({{ $indexRuffier[1] }})</p>
@endsection