@extends('welcome')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif
    <div class="btn-create">
        <a href="{{ route('speciality.create') }}"><i class="fas fa-plus-circle"></i>{{__('create new')}}</a>
    </div>
    <div class="show-content">
        <table id="specialities">
        <tr>
            <th>{{ __('no') }}</th>
            <th>{{ __('name') }}</th>
            <th>{{ __('option') }}</th>
        </tr>
        @foreach($all_speciality as $speciality)
        <tr>
            <td>{{ $speciality->id + 1}}</td>
            <td>{{ $speciality->name}}</td>
            <td>
                <div class="btn-edit">
                    <a href="{{ route('speciality.edit', $speciality->id) }}">{{__('edit')}}</a>
                </div>
                <form
                    action="{{ route('speciality.destroy', $speciality->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="btn-delete" data-confirm="{{ __('delete confirm') }}" class="btn-delete">{{__('delete')}}</button>
                </form>
            </td>
        </tr>
        @endforeach
    </div>
    <script type="text/javascript" src="{{ asset('js/delete.js') }}"></script>
@endsection
