@extends('layouts.main')
@section('title', 'Результат тесту Штанге & Генчі')

@section('content')
<h2>Результат гіпоксичного тесту</h2>
<p class="text-center">Проба Штанге(вдих): Оцінка стану - <b>{{ $hypoxiaCheckResult[0] }}</b></p>
<p class="text-center">Проба Генчі(видих): Оцінка стану - <b>{{ $hypoxiaCheckResult[1] }}</b></p>
@endsection
