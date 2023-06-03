<!-- Edit menu form -->
<form action="{{ route('buddymenus.update', $menu->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Add input fields for menu attributes -->
    <input type="text" name="name" placeholder="Menu Name" value="{{ $menu->name }}" required>
    <!-- Add more fields as needed -->
    <label for="is_super_admin">Is Super Admin:</label>
    <input type="checkbox" name="is_super_admin" {{ $menu->is_super_admin ? 'checked' : '' }}>

    <button type="submit">Update Menu</button>
</form>
