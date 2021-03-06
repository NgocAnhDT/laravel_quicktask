@extends('welcome')

@section('content')
    <h2>{{ __('create new') ." " .__('speciality') }}</h2>
    <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif
    <form action="{{ route('speciality.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">{{ __('name') }}</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}">
            @error('name') 
                <span class="alert-danger"> {{ __($message, ['attribute'=> __('name')]) }}</span>
            @enderror
        </div>
        <button type="submit" onclick="" class="btn-submit">{{__('submit')}}</button>

    </form>

    <div class="float-right">
        <a href="{{ route('speciality.index') }}" class="btn-back"><i class="fas fa-backward"></i> {{__('back')}}</a>
    </div>
@endsection

