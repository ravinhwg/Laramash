@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class=" text-center">
        
        <div class="row">
      		<div class="col-md-6">
            	<a href="#"><img src="@foreach($pic1 as $pic)img/{{$pic->photo}}@endforeach  " alt="img_1"></a>
        	</div>
        	<div class="col-md-6">
          		<a href="#"><img src="@foreach($pic2 as $pics)img/{{$pics->photo}}@endforeach" alt="img_2"></a>
        	</div>
      	</div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
