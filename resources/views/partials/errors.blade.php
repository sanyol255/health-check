
@if($errors->any())
    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
@endif