<x-layout>
    <form action="{{ route('cats.update', $cat->name) }}" method="POST" class="mt-4">

        @csrf
        @method('PUT')

        <h2>Edit Cat</h2>

        <!-- Cat Name -->
        <label for="name">Cat Name:</label>
        <input type="text" id="name" name="name"
            value="{{ old('name', $cat->name) }}" required>

        <!-- Cat Age -->
        <label for="age">Cat Age:</label>
        <input type="number" id="age" name="age" min="0" max="30"
            value="{{ old('age', $cat->age) }}" required>

        <!-- Cat Color -->
        <label for="color">Cat Color:</label>
        <input type="text" id="color" name="color"
            value="{{ old('color', $cat->color) }}" required>

        <!-- Personality -->
        <label for="emotion">Personality:</label>
        <textarea id="emotion" name="emotion" rows="2" required>{{ old('emotion', $cat->emotion) }}</textarea>

        <!-- Shelter -->
        <label for="shelter_id">Select file from the Shelter</label>
        <select id="shelter_id" name="shelter_id" required>
            @foreach ($shelters as $item)
                <option value="{{ $item->id }}"
                    {{ $cat->shelter_id == $item->id ? 'selected' : '' }}>
                    {{ $item->breed }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Update Cat</button>

    </form>
</x-layout>
