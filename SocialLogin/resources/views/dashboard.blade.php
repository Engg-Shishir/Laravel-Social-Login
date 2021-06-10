@extends('layout')
@section('title','Dashboard')
@section('content')
   <div class="container">
       <div id="dashboard">
            <div class="card bg-dark">
               <div class="card-header">
                   <img src="{{Session::get('avatar')}}" alt="Avatar">
                   <h2>{{Session::get('name')}}</h2>
               </div>
               <div class="card-body">
                   <table class="table table-lg table-dark">
                       <tr>
                           <th>User Id : </th>
                           <td>{{Session::get('userid')}}</td>
                       </tr>
                       <tr>
                           <th>Nick Name : </th>
                           <td>{{Session::get('nickName')}}</td>
                       </tr>
                       <tr>
                           <th>Email : </th>
                           <td>{{Session::get('email')}}</td>
                       </tr>
                       <tr>
                           <th>Token : </th>
                           <td>{{Session::get('token')}}</td>
                       </tr>
                   </table>
               </div>
               <div class="card-body">
                <a href="/logout" class="btn btn-light">Logout : &nbsp;<i class="fab fa-pied-piper-alt"></i></a>
               </div>
            </div>
       </div>
   </div>
@endsection