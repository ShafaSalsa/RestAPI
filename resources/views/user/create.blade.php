@extends('layouts.app')


    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    
    @csrf


    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
     
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
    
</form>