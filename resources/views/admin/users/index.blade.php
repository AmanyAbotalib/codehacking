@extends('layouts.admin')

@section('content')
    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Active</th>
              <th>Created_at</th>
              <th>Updated_at</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user )
           <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->role_id == null ? 'User has no role':$user->role_id}}</td>
               <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
           </tr>
          @endforeach
        @endif

        </tbody>
     </table>

    @endsection