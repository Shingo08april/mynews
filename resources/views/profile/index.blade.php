@extends('layouts.front')

@section('content')
    <div class="container">
<p>名前：{{ $headline->name}}</p>
<p>性別：{{ $headline->gender}}</p>
<p>趣味：{{ $headline->hobby}}</p>
<p>紹介：{{ $headline->introduction}}</p>
    </div>
@endsection
