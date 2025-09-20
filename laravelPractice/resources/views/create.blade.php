<x-layout>

  <form action="{{route("tests.store")}}" method="POST">
    @csrf
    <h2>Create a New Nigga</h2>
    
    <!-- nigga Name -->
    <label for="name">Nigga Name:</label>
    <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{old("name")}}" 
    required
    >
    
    <!-- nigga Strength -->
    <label for="skill">Nigga Skill (0-100):</label>
    <input 
    type="number" 
    id="skill" 
    name="skill" 
    value="{{old("skill")}}"
    required
    >

    <!-- nigga Bio -->
    <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  >{{old("bio")}}</textarea>

  <!-- select a dojo -->
  <label for="bunker_id">Dojo:</label>
  <select id="bunker_id" name="bunker_id" required>
    <option value="" disabled selected>Select a dojo</option>
    @foreach($key_bunkers as $bunker)
    <option value="{{$bunker->id}}" {{$bunker->id == old("bunker_id") ? "selected" : "" }}>{{$bunker->name}}</option>
    @endforeach
  </select>
  
  <button type="submit" class="btn mt-4">Create Nigga</button>
  
  <!-- validation errors -->
  
  @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
    @endif
    
  </form>
</x-layout>