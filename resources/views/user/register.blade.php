@extends('layout.proses')
@section('content')
@section('title', 'Register')

<section class="my-5">
    <div class="container"> 
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-light border-secoundery" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid mb-2" width="200"><hr>
                            @if($errors->any())
                                @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                                @endforeach
                                @endif
                        </div>
                        <form method="POST" action="{{ url('user/Proses-Daftar') }}">
                            @csrf
                            <div class="col-12">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name" name="name"  required autofocus autocomplete="name" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" name="email" class="form-control" id="email" name="email"  required>
                                    <div class="invalid-feedback">Please choose a email addres.</div>
                                </div>
                              </div>

                              <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" name="password"  required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                              </div>
            
                              <div class="mb-4">
                                    <label for="reenter_password" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                            </div>
                              
                              <div class="col-12">
                                    <button class="btn  w-100" type="submit">CREATE ACCOUNT</button>
                            </div>


                              <div class="text-center mb-4"><br>
                                    <p class="small mb-0">Already have an account? <a href="{{ url('user/login') }}">Log In</a></p>
                              </div>

                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

