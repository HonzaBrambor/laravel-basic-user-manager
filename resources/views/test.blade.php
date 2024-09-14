<x-layouts.default>
    <div class="container mt-5">
        <h1 class="mb-4">User Management</h1>

        {{-- Error Messages --}}
        <div id="error-messages" class="alert alert-danger d-none"></div>

        {{-- Success Message --}}
        <div id="success-message" class="alert alert-success d-none"></div>

        {{-- Create User Form --}}
        <div class="card mb-4">
            <div class="card-header">
                <span id="form-title">Create User</span>
            </div>
            <div class="card-body">
                @livewire('create-edit-user-form')
            </div>
        </div>

        {{-- Users Table --}}
        <div class="card">
            <div class="card-header">
                Users List
            </div>
            <div class="card-body">
                @livewire('user-table')
            </div>
        </div>
    </div>
</x-layouts.default>
