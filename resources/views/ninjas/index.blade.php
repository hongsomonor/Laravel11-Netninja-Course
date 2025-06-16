<x-layout>
    <h2>Currently Available Ninjas</h2>
    @if ($greeting == 'Hello')
        <p>Hi from inside if statement</p>
    @endif
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="ninjas/{{ $ninja['id'] }}">View detail</a>
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
