
<x-layout>

    <h2>Current Cats</h2>
    <ul>
       @foreach($cats as $cat)
            <li>
                <x-card href="/cats/{{ $cat->name }}" :highlight="$cat->age > 5">
                   <div >
                    <h3>{{ $cat->name }}</h3>
                    <p>{{ $cat->shelter->breed }}</p>
                     </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $cats->links() }}
</x-layout>
