@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto py-10">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#22421E]">User Management</h1>
    <p class="text-[#278450] font-medium">Manage user accounts and roles.</p>
  </div>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <table class="w-full bg-[#BCF5D0] rounded-lg shadow-lg">
    <thead class="bg-[#44FF00] text-[#22421E] font-semibold">
      <tr>
        <th class="p-3 text-left">Name</th>
        <th class="p-3 text-left">Email</th>
        <th class="p-3 text-left">Role</th>
        <th class="p-3 text-left">Created</th>
        <th class="p-3 text-right">Actions</th>
      </tr>
    </thead>

    <tbody>
      @forelse ($users as $user)
        <tr class="border-b border-[#278450]/30 hover:bg-[#8CFF98]/30 transition">
          <td class="p-3 font-semibold">{{ $user->name }}</td>
          <td class="p-3">{{ $user->email }}</td>
          <td class="p-3">
            <span class="inline-block px-3 py-1 rounded-full text-sm 
              {{ $user->roles === 'admin' ? 'bg-[#44FF00]/80 text-[#22421E]' : ($user->roles === 'editor' ? 'bg-[#80FA68]/80 text-[#22421E]' : 'bg-[#BCF5D0]/70 text-[#278450]') }}">
              {{ ucfirst($user->roles) }}
            </span>
          </td>
          <td class="p-3 text-sm text-[#22421E]/80">{{ $user->created_at->format('d M, Y') }}</td>

          <td class="p-3 text-right">
            {{-- Edit Role --}}
            <a href="{{ route('admin.users.edit', $user->id) }}" 
               class="text-[#22421E] font-semibold hover:text-[#399229] mr-3">
              Edit
            </a>

            {{-- Delete --}}
            @if(Auth::user()->id !== $user->id)
              <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this user?')" 
                        class="text-red-600 hover:text-red-800 font-semibold">
                  Delete
                </button>
              </form>
            @endif
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5" class="p-6 text-center text-[#22421E]/70">No users found yet.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</section>
@endsection
