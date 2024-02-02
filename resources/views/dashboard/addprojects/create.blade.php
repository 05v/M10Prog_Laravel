<form action="{{ route('addprojects.store') }}" method="POST">
    @csrf
    <input type="text" name="titel" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Add Project</button>
</form>
