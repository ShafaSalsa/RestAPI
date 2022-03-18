
@extends('layouts.app')

<div class="text-center">
    <h3> DATA USER</h3>
</div>


<div class="text-end">
</div>
<div class="pull-right">
                <a class="btn btn-success" href="{{route('users.create')}}"> Create</a>
            </div>
            <br>
            
    <table class=" table table-bordered" style="width:90%; height:15px; border-color: grey; margin-left:auto;margin-right:auto; border:1;" >
    <th><input type="checkbox" id="checkall" /></th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Action</th>
    @php
        $number = 1;
    @endphp
		
    @forelse($users['data'] as $user)
    <tr style="background-color:#dbffe5; color:black;">
        <td>{{ $number++ }}</td>
        <td>{{ $user['firstName'] }}</td>
        <td>{{ $user['lastName'] }}</td>
        <td align="center">
            <form method="POST" action="{{ 'users/'.$user['id'] }}">
                @method('DELETE')
                @csrf
            
                <a href="{{ 'users/'.$user['id'] }}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> 
                <button type="submit" class=" btn btn-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
            </form>
            </form>
            
        </td>

    </tr>
    @empty
        <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
    @endforelse

    </table>
