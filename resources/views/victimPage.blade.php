@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Submit Harrasment') }}</div>
            <div class="card-body">
                 <form method="POST" action="{{ route('register') }}">
                        @csrf

                    {{-- <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="" required>
                        </div>
                    </div> --}}
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection
