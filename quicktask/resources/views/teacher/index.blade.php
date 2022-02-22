@extends('welcome')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @elseif ($message = Session::get('exists'))
        <div class="alert alert-danger">
            <p>{{ __($message) }}</p>
        </div>
    @endif
    
    <div class="show-content">
        <table id="specialities">
        <tr>
            <th>{{ __('no') }}</th>
            <th>{{ __('name') }}</th>
            <th>{{ __('speciality') }}</th>
            <th>{{ __('option') }}</th>
        </tr>
        @foreach($all_teacher as $teacher)
            <tr>
                <td>{{ $teacher->teacher_id + 1}}</td>
                <td>{{ $teacher->fullname}}</td>
                <td>{{ $teacher->speciality->name }}</td>       
                <td>
                    <div class="btn-edit">
                        <a href="{{ route('teacher.edit', $teacher->teacher_id) }}">{{__('edit')}}</a>
                    </div>
                    <form
                        action="{{ route('teacher.destroy', $teacher->teacher_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="" class="btn-delete">{{__('delete')}}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </div>
@endsection
