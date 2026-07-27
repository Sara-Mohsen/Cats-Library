<x-layout>
    <form action="{{ route('cats.store') }}" method="POST">

        @csrf
        <h2>Add New Cat</h2>

        <!-- cat Name -->
        <label for="name">Cat Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <!-- cat Age -->
        <label for="age">Cat Age:</label>
        <input type="number" id="age" name="age" min="0" max="30" required>
        <label for="color">Cat Color:</label>
        <input type="text" id="color" name="color" required>

        <!-- cat emotion -->
        <label for="emotion">Personality:</label>
        <textarea rows="2" id="emotion" name="emotion" required>
</textarea>


        <!-- select a file -->
        <label for="shelter_id">Select file from the Shelter</label>
        <select id="shelter_id" name="shelter_id" required>
            <option value="" disabled selected>Select File</option>
            @foreach ($shelter as $item)
                <option value="{{ $item->id }}">{{ $item->breed }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Update Cat</button>

        <!-- validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
</x-layout>
