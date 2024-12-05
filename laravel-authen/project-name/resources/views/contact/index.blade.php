
<h1>Contacts</h1>
<a href="{{ route('contact.create') }}">Add Contact</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->message }}</td>
        <td>
            <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
