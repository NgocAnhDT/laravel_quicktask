@extends('welcome')

@section('content')
    <h2>{{ __('create new') ." " .__('teacher') }}</h2>
    <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif

    <form action="{{ route('teacher.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">{{ __('fullname') }}</label>
            <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}">
            @error('fullname') 
                <span class="alert-danger"> {{ __($message, ['attribute'=> __('fullname')]) }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">{{ __('phone') }}</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone') 
                <span class="alert-danger"> {{ __($message, ['attribute'=> __('phone')]) }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="spe">{{ __('speciality') }}</label>
            <select name="speciality_id" class="form-spe">
                <option value=""></option>
                @foreach ($speciality as $key => $speciality)
                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                @endforeach
            </select>
            @error('speciality_id') 
                <span class="alert-danger"> {{ __($message, ['attribute'=> __('speciality')]) }}</span>
            @enderror
        </div>
        <button type="submit" onclick="" class="btn-submit">{{__('submit')}}</button>
    </form>
@endsection
