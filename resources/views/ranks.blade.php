
                             
                           
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
                              }
                              
                              
                              </style>
                              
                              <div id="header">
                                  <h1><a href="index.html">RANKINGS</a></h1>
                              </div>
                              <div id="main">
                                    @foreach($users as $user)
                                    <div class="block">
                                            <img src="https://api.adorable.io/avatars/285/abott@adorable.io.png" alt="">
                                            <h2>{{$user->name}}</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                          </div>
                                   
                                          @endforeach
                                 
                              </div>
                              <div id="footer">
                                 
                                 
                                  
                                  
                              </div>
                              
                                        
                             
                              
@endsection
