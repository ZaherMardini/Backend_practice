<form action="" method="">
  <h2>Create a New Nigga</h2>

  <!-- nigga Name -->
  <label for="name">Nigga Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- nigga Strength -->
  <label for="skill">Nigga Skill (0-100):</label>
  <input 
    type="number" 
    id="skill" 
    name="skill" 
    required
  >

  <!-- nigga Bio -->
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  ></textarea>

  <!-- select a dojo -->
  <label for="dojo_id">Dojo:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    
  </select>

  <button type="submit" class="btn mt-4">Create Nigga</button>

  <!-- validation errors -->
  
</form>