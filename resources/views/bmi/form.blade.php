@extends('layouts.main')
@section('title', 'Визначення індекса маси тіла')

@section('content')
<h1>Індекс маси тіла</h1>
<p class="indent"><b>Індекс маси тіла</b> (ІМТ, англ. BMI, body mass index) — величина, що дозволяє оцінити ступінь
 відповідності маси людини та її зросту, й тим самим, непрямо оцінити, чи є маса недостатньою, нормальною чи
 надмірною (ожирінням).</p>

 <p class="text-center h4 mb-3">Для визначення вашого ІМТ, заповніть будь-ласка форму:</p>

 {!! Form::open(['route' => 'bmi.result', 'class' => 'text-center']) !!}
    <div>
        {!! Form::label('Ваше ім\'я: ', null, ['class' => 'col-md-3']) !!}
        {!! Form::text('name') !!}
    </div>
    
    <div>
        {!! Form::label('Ваша вага (кг): ', null, ['class' => 'col-md-3']) !!}
        {!! Form::number('weight') !!}
    </div>

    <div>
        {!! Form::label('Ваш зріст (см): ', null, ['class' => 'col-md-3'])!!}
        {!! Form::number('height') !!}
    </div>

    <div>{!! Form::submit('Розрахувати ІМТ', ['class' => 'btn btn-success mt-3']) !!}</div>
 {!! Form::close() !!}
 @endsection