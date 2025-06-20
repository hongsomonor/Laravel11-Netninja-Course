<x-layout>
    <h2>Currently Available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 70">
                    <h3>{{ $ninja['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
        {{-- <li>
            <a href="ninjas/{{ $ninjas[0]['id'] }}">{{ $ninjas[0]['name'] }}</a>
        </li>
        <li>
            <a href="ninjas/{{ $ninjas[1]['id'] }}">{{ $ninjas[1]['name'] }}</a>
        </li> --}}
    </ul>
</x-layout>
