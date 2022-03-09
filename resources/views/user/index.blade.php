
@extends('layouts.app')

<div class="text-center">
    <h3> TABLE CONSUME REST API</h3>
</div>


<div class="text-end">
    <small>Shafa Salsabila</small>
</div>

    <table class=" table table-bordered" style="width:100%; height:10px">
    @php
        $number = 1;
    @endphp
		
    @forelse($users['data'] as $user)
    <tr>
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
