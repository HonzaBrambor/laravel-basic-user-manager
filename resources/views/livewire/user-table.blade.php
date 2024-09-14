<table class="table table-bordered" id="users-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-warning btn-sm edit-user" x-on:click="$dispatch('edit-user', { id: '{{ $user->id }}' })">Edit</button>
                    <button class="btn btn-danger btn-sm delete-user" wire:click="delete({{ $user->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
