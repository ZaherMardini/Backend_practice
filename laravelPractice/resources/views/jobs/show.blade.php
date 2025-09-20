<x-layout>
  <x-slot:title>show_job</x-slot:title>
  <x-slot:header>show_job_header</x-slot:header>
  <div class="font-bold text-blue-500">Job Info:</div>
  {{$job->title}}<br>
  {{$job->employer->name}}<br>
  {{$job->salary}}<br>
  <form id= "dlt" class="hidden" action="/jobs/{{$job->id}}" method="post">
    @csrf
    @method('DELETE')
  </form>
  @can('edit-job', $job)
    <x-link href='/jobs/{{$job->id}}/edit'>Edit</x-link>
    <x-button form="dlt">Delete</x-button>
  @endcan
</x-layout>