@extends('app')
@section('content')
<div class="container">


@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<p class="mt-4">
    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Create User
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST" action="./users">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>


<table class="table table-hover mt-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $item)
    <tr>
      <td>{{$item->id}}</td>      
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <!-- <td><a href="./users/{{$item->id}}"><i class="far fa-eye"></i></a></td> -->
      <td><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#viewUser"><i class="far fa-eye"></i></button></td>
        <!-- Modal -->
        <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="ViewUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewUser">View User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="font-weight-bold" for="exampleInputEmail1">Name</label>
                        <p>{{$item->name}}</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="email">Email address</label>
                        <p>{{$item->email}}</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="created_at">Created_at</label>
                        <p>{{$item->created_at}}</p>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-edit"></i></button></td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="./users/{{$item->id}}">
                @method('PUT')
                @csrf 
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$item->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Save changes</a>
                </div>
            </form>
            </div>
        </div>
        </div>
        <form method="POST" action="./users/{{$item->id}}">
            @method('DELETE')
            @csrf 
            <td><button class="btn btn-outline-danger" type="submit"><i class="fas fa-user-minus"></i></a></td>
        </form>
    </tr>
    @endforeach
</table>
{{ $users->links() }}

</div>


@endsection
