@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class=" text-center">
                {{$count}}
                @foreach($pic1 as $pic)
                @foreach($pic2 as $pics)
        <div class="row">
      		<div class="col-md-6">
              <a href="result/won/{{$pic->id}}/lost/{{$pics->id}}/war/{{$newgame}}"><img src="img/{{$pic->photo}}  " alt="img_1"></a>
        	</div>
        	<div class="col-md-6">
            <a href="result/won/{{$pics->id}}/lost/{{$pic->id}}/war/{{$newgame}}"><img src="img/{{$pics->photo}}" alt="img_2"></a>
        	</div>
      	</div>
    </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach
@endsection
