@extends('auth.template')

@section('title')
    Register
@endsection

@section('content')

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gradient-to-b from-blue-400 to-transparent py-6 sm:py-12">
  <div class="w-4/5 bg-white px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
    <div class="mx-auto max-w-md">
      <form action="{{ route('register.post') }}" method="post">
        @csrf
        <div class="flex justify-center">
          <h1 class="block font-serif text-3xl">Halaman <span class="text-blue-400">Register</span></h1>
        </div>
        <div class="flex flex-col p-3">
          <label for="">Name</label>
          <input type="text" name="name" value="{{ old('name') }}"
          @class([
            'p-2',
            'border',
            'rounded-md',
            'border-gray-500',
            'border-red-500' => $errors->has('name') ?? false
          ])>
          <span class="text-red-500">{{ $errors->first('name') }}</span>
        </div>
        <div class="flex flex-col p-3">
          <label for="">Email</label>
          <input type="email" name="email" value="{{ old('email') }}"
          @class([
            'p-2',
            'border',
            'rounded-md',
            'border-gray-500',
            'border-red-500' => $errors->has('email') ?? false
          ])>
          <span class="text-red-500">{{ $errors->first('email') }}</span>
        </div>
        <div class="flex flex-col p-3">
          <label for="">Password</label>
          <input type="password" name="password" value="{{ old('password') }}"
          @class([
            'p-2',
            'border',
            'rounded-md',
            'border-gray-500',
            'border-red-500' => $errors->has('password') ?? false
          ])>
          <span class="text-red-500">{{ $errors->first('password') }}</span>
        </div>
        <div class="flex justify-center p-3">
          <button class="bg-blue-500 w-1/2 hover:bg-transparent border-2 border-blue-400 hover:text-blue-400 text-white p-2 rounded-md" type="submit">Daftar</button>
        </div>

        <div class="text-center">
          <p>Sudah memiliki account Silahkan <a href="{{ route ('login') }}" class="text-blue-400">Login</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection