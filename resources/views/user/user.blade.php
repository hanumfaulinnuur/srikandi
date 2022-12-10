@extends('layout.navbar')
@section('content')
@section('title', 'Detail')

<br><br><br><br>
<div class="container pt-4">
  <div class="card p-4 shadow-lg p-4 mb-5 bg-body rounded">
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama User</th>
          <th scope="col">Email</th>
          <th scope="col">Type User</th>
        </tr>
      </thead>
      @foreach($allDataUser as $key => $user)
      <tbody>
        <tr>
          <th scope="row">{{ $key+1 }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ ($user->type ==0)? "Pembeli" : "Admin" }}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection