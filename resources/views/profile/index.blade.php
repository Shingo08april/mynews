@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">
                                @if($headline->gender == 'male' )
                                  男性
                                @else
                                  女性
                                @endif
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
@endsection
