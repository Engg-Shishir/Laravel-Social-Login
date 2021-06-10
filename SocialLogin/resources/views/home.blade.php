@extends('layout')
@section('title','Home')
@section('content')
   <div class="container">
      <div id="home">
          <div class="card" style="width: 38rem;">
              <div class="card-header bg-dark text-light text-center">
                <h2>Social Login Action</h2>
              </div>
              <div class="card-body bg-dark">
                <a  href="/CallGithubSignInPage" class="btn btn-light btn-lg"> <i class="fab fa-github"></i> Login with Github</a>
              </div>
          </div>
      </div>
   </div>
@endsection