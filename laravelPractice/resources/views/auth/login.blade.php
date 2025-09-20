<x-layout :title="'Login'" :header="'Login in the site'">
  <form method="POST" action="">
    @csrf
    <label for="n">Name</label>
    <x-input id="n" name="name" :value="old('name')"/>
    <x-form-error name='name'/>
    <label for="p">PW</label>
    <x-input id="p" name="password" :value="old('password')"/>
    <x-form-error name='password'/>
    <x-submit value="Login"/>
  </form>
</x-layout>