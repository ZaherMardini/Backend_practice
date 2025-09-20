<x-layout>
  <x-slot:title>Edit job</x-slot:title>
  <x-slot:header>Edit_H</x-slot:header>
  <form action="/jobs/{{$job->id}}" method="post">
    @method('PATCH')
    @csrf
    <label for="title">Title</label>
    <input type="text" value="{{$job->title}}" class="w-full p-2 rounded mb-4 bg-gray-700 text-white" name="title">
    <label for="salary">salary</label>
    <input type="text" value="{{$job->salary}}" class="w-full p-2 rounded mb-4 bg-gray-700 text-white" name="salary">
    {{-- <input type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded shadow" name="Edit" value="Edit"> --}}
    <x-submit name="Edit" value="Edit"></x-submit>
  </form>
  {{-- <div>{{dd($errors)}}</div> --}}
</x-layout>