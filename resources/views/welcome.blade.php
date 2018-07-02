@extends('layouts.app')

@section('content')
<style>body {
	font-family: Tahoma;
	margin: 0;
	padding: 0;
	text-align: center;
}
a {
	text-decoration: none;
	color: darkblue;
}
a:hover {
	text-decoration: underline;
}
img {
	width: 175px;
	height: 250px;
	
}
#header {
	background-color: #8D153A;
	color: #FFBE29;
	padding: 5px;
}
#header a{
	color: #fff;
	text-decoration: none;
}
#main table {
	margin: 0 auto;
}
#footer {
	font: 12px Tahoma;
	margin: 25px 0 50px 0;
}
#footer a {
	margin-right: 10px;
}</style>
<div id="header">
	<h1><a href="index.html">🇱🇰</a></h1>
</div>
<div id="main">
	<h3>Were we let in for our looks? No. Will we be judged on them? Yes.</h3>
	<h2>Who's Hotter? Click to Choose.</h2>
	<table>
		<tr>
                {{$count}}
                @foreach($pic1 as $pic)
                @foreach($pic2 as $pics)
       
                <td>  <a href="result/won/{{$pic->id}}/lost/{{$pics->id}}/war/{{$newgame}}"><img src="img/{{$pic->photo}}  " alt="img_1"></a></td>
                <td>OR</td>
                <td>  <a href="result/won/{{$pics->id}}/lost/{{$pic->id}}/war/{{$newgame}}"><img src="img/{{$pics->photo}}" alt="img_2"></a></td>
        	
            

			
			
			
		</tr>
	</table>
</div>
<div id="footer">
	<a href="#">TURKEY</a>
	<a href="#">GERMANY</a>
	<a href="#">ITALY</a>
	<a href="#">RUSSIA</a>
	<a href="#">RANDOM</a>
	<br />
	<a href="index.html">Home</a>
	<a href="about.html">About</a>
	<a href="submit.html">Submit</a>
	<a href="rankings.html">Rankings</a>
</div>

@endforeach
@endforeach             
@endsection
