



<h1>Create User</h1>
<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Create</button>
</form>

