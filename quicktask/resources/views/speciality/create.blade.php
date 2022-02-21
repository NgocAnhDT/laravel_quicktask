@extends('welcome')

@section('content')
    <h2>{{ __('create new') ." " .__('speciality') }}</h2>
    <br><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ __($error) }}</li>
                @endforeach
            </ul>
        </div>
    @elseif($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif

    <form action="{{ route('speciality.store') }}" method="POST">
        @csrf
        <div>
            <label for="sepname">{{ __('name') }}</label>
            <input type="text" id="name" name="name">
        </div>
        <button type="submit" onclick="" class="btn-submit">{{__('submit')}}</button>

    </form>

    <div class="float-right">
        <a href="{{ route('speciality.index') }}" class="btn-back">{{__('back')}}</a>
    </div>
@endsection

