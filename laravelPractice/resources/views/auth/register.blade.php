<x-layout :title="'Register'" :header="'Register in the site'">

  <form method="POST" action="">
    @csrf
    <label for="n">Name</label>
    <x-input id="n" name="name" value="{{old('name')}}"></x-input>
    <x-form-error name='name'/>
    <label for="e">Email</label>
    <x-input id="e" name="email" value="{{old('email')}}"></x-input>
    <x-form-error name='email'/>
    <label for="p">Password</label>
    <x-input id="p" type="password" name="password" value="{{old('password')}}"></x-input>
    <x-form-error name='password'/>
    <label for="cp">Confirm Password</label>
    <x-input id="cp" name="password_confirmation" value="{{old('password_confirmation')}}"></x-input>
    <x-form-error name='password_confirmation'/>
    <x-submit value="Register"/>
  </form>
</x-layout>