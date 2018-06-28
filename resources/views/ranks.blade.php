@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <ol>
                              @foreach($users as $user)<li>{{$user->name}} </li> @endforeach
                           
                          </ol> 
              
            </div>
        </div>
    </div>
</div>
@endsection
