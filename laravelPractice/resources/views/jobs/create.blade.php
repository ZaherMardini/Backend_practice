<x-layout>
  <x-slot:header>New job page</x-slot:header>
  <x-slot:title>new job</x-slot:title>
  <form action="" method="post">
    @csrf
    <label for="t">Title</label>
    <x-input id="t" name="title"></x-input>
    <label for="s">salary</label>
    <x-input id="s" name="salary"></x-input>
    <x-submit name="send" value="New job"></x-submit>
  </form>
  {{-- <div>{{dd($errors)}}</div> --}}
</x-layout>