<!-- Create a new menu form -->
<form action="{{ route('buddymenus.store') }}" method="POST">
    @csrf
    <!-- Add input fields for menu attributes -->
    <input type="text" name="name" placeholder="Menu Name" required>
    <!-- Add more fields as needed -->
    <label for="is_super_admin">Is Super Admin:</label>
    <input type="checkbox" name="is_super_admin">

    <button type="submit">Create Menu</button>
</form>
