<x-layout>
  <x-slot:title>test</x-slot:title>
  <x-slot:header>header</x-slot:header>
  @foreach ($jobs as $job)
    <a class="font-bold text-blue-900" href="/jobs/{{$job->id}}">job_id: {{$job->id}}</a>
    <div>{{$job->title}}</div>
    <div>Employer_name: {{$job->employer->name}}</div>
  @endforeach
  <div>
    {{$jobs->links()}}
  </div>
  <x-link href="jobs/create">New job</x-link>
</x-layout>