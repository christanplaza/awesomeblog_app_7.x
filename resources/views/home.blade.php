@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <img class="card-img-top" src="https://st3.depositphotos.com/4111759/13425/v/450/depositphotos_134255532-stock-illustration-profile-placeholder-male-default-profile.jpg" alt="Profile Image">
                <div class="card-body text-center">
                    <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                    <a class="btn btn-primary" href="#" role="button">Edit Profile</a>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 text-primary">
                            <p class="m-0">2<br>Following</p>
                        </div>
                        <div class="col-md-6 text-primary">
                            <p class="m-0">2<br>Followers</p>
                        </div>
                    </div>
                    <hr>
                    <div class="jumbotron p-4">
                        <h1 class="m-0">1</h1>
                        <p class="m-0">blogs posted</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                          <textarea class="form-control" name="text" rows="3" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right px-5">Post</button>
                    </form>
                </div>
            </div>
            <h1>Posts</h1>
            <div class="card">
                <div class="card-header">
                    <div class="float-right d-inline-flex">
                        <a class="btn btn-warning btn-sm" href="#" role="button">Edit</a>
                        <form action="#">
                            <button type="submit" class="btn btn-danger btn-sm ml-2">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h3 class="text-primary">John Doe</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">20 hours ago</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
