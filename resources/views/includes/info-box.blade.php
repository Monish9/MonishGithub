@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('src/css/common.css') }}" type="text/css">
@append

@if(Session::has('fail'))
    <div class="info-box fail">
        {{ Session::get('fail') }}
    </div>
@endif


@if(Session::has('success'))
    <div class="info-box success">
        {{ Session::get('success') }}
    </div>
@endif


@if(Count($errors) > 0)
    <div class="error info-box fail">
        <ul>
            @foreach($errors->All() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>    
    </div>
@endif