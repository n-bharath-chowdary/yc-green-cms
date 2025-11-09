@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto py-10">
  <h1 class="text-3xl font-bold text-[#22421E] mb-6">Edit User</h1>

  <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-5 bg-[#BCF5D0] p-6 rounded-xl shadow-lg">
    @csrf @method('PUT')

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Name</label>
      <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 rounded border border-[#278450]" required>
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Email</label>
      <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 rounded border border-[#278450]" required>
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Role</label>
      <select name="roles" class="w-full p-2 rounded border border-[#278450]">
        <option value="admin" {{ $user->roles == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="editor" {{ $user->roles == 'editor' ? 'selected' : '' }}>Editor</option>
        <option value="user" {{ $user->roles == 'user' ? 'selected' : '' }}>User</option>
      </select>
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">New Password (optional)</label>
      <input type="password" name="password" class="w-full p-2 rounded border border-[#278450]" placeholder="Leave blank to keep current">
    </div>

    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.users.index') }}" class="bg-[#80FA68] text-[#22421E] px-4 py-2 rounded-lg hover:bg-[#44FF00]">Cancel</a>
      <button type="submit" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229] font-semibold">Update</button>
    </div>
  </form>
</section>
@endsection
