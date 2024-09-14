<form wire:submit="save">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" wire:model="name">
        <div>@error('name') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" wire:model="email">
        <div>@error('email') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" wire:model="password">
        <div>@error('password') {{ $message }} @enderror</div>
    </div>

    @if(!$id)
        <button type="submit" class="btn btn-primary">Create User</button>
    @else
        <button type="submit" class="btn btn-success">Edit</button>
        <button wire:click="cancleEdit" class="btn btn-secondary">Cancle</button>
    @endif
</form>
