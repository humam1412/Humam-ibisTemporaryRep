
@extends('layout.main')

@section('container')
<form action="{{ URL::to('/register') }}" method="POST">

    @csrf
    {{-- ngambil input yg lama {{ old('nama') }} --}}
    <div class="form-outline mb-4">
        <input type="text" id="name" name="name" class="form-control" @error('name')  is-invalid @enderror required value="{{ old('name') }}" />
        <label class="form-label" for="name">name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}" />
      <label class="form-label" for="form2Example1">Email address</label>
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="password" name="password" class="form-control" required />
      <label class="form-label" for="form2Example2">Password</label>
      @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
     <!-- Confirm Password input -->
     <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" required />
        <label class="form-label" for="form2Example2">Confirm Password</label>
      </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
     
 
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>already have account? <a href="/login">Login</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>
@endsection

