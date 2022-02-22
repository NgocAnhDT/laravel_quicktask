@extends('welcome')

@section('content')
    <h2>{{ __('edit') ." " .__('speciality') }}</h2>
    <br><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif

    <form action="{{ route('speciality.update', $speciality->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="sepname">{{ __('name') }}</label>
            <input type="text" id="name" name="name" value="{{ $speciality->name }}"/>
            @error('name') 
                <span class="alert-danger"> {{ __($message, ['attribute'=> __('name')]) }}</span>
            @enderror
        </div>
        <button type="submit" onclick="" class="btn-submit">{{__('update')}}</button>

    </form>

    <div class="float-right">
        <a href="{{ route('speciality.index') }}" class="btn-back"><i class="fas fa-backward"></i> {{__('back')}}</a>
    </div>
@endsection

