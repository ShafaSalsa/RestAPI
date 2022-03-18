@extends('layouts.app')


<form method="POST" action="{{ url()->current() }}">
  {{-- {{ route('users.update', $user['id']) }} --}}
    @method('PUT')
    @csrf

    <h4>Edit User</h4>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control" id="exampleInputPassword1" value="{{ $user['firstName'] }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user['lastName'] }}">
    </div>


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user['email'] }}">
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>