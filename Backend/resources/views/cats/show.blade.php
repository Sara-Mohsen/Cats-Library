<x-layout>
    <h2>Name: {{ $cats->name }}</h2>

    <div class="space-y-6">
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <p><strong>Age:</strong> {{ $cats->age }}</p>
            <p><strong>Color:</strong> {{ $cats->color }}</p>
            <p><strong>Personality:</strong> {{ $cats->emotion }}</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <h3>Shelter Information</h3>
            <p><strong>Breed:</strong> {{ $cats->shelter->breed }}</p>
            <p><strong>File Number:</strong> {{ $cats->shelter->file_number }}</p>
            <p><strong>More Info:</strong> {{ $cats->shelter->description }}</p>
        </div>
    </div>

    <form action="{{ route('cats.destroy', $cats->name) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Cat</button>
    </form>

    <form action="{{ route('cats.edit', $cats->name) }}" method="GET" class="mt-4">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>




</x-layout>
