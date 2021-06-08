@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <?php dd($data);exit; ?> --}}
            <div id="listType">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</div>
@endsection
