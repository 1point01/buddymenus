<!-- Display all menus -->
@foreach ($menus as $menu)
    <div>
        {{ $menu->name }}
        <!-- Add more fields as needed -->
        <!-- Edit and Delete buttons -->
        <a href="{{ route('buddymenus.edit', $menu->id) }}">Edit</a>
        <form action="{{ route('buddymenus.destroy', $menu->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
