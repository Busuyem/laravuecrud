@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <create-component />
           </div>

           <div class="col-md-6">
                <show-component />
            </div>
        </div>
        
    </div>
</div>
@endsection
