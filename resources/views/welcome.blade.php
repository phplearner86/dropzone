@extends('layouts.app')

@section('content')
    <div class="dropzone" id="productPhoto"></div>
@endsection

@section('scripts')
    <script>
        {{-- var url = "{{ route('welcome') }}"; --}}

        var drop = new Dropzone('#productPhoto', {
            url: "{{ route('welcome') }}"
        });
    </script>
@endsection