@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto py-10">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#22421E]">Posts</h1>
    <a href="{{ route('editor.posts.create') }}" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229]">+ Add Post</a>
  </div>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
  @endif

  <table class="w-full bg-[#BCF5D0] rounded-lg shadow-lg">
    <thead class="bg-[#44FF00] text-[#22421E] font-semibold">
      <tr>
        <th class="p-3 text-left">Title</th>
        <th class="p-3 text-left">Category</th>
        <th class="p-3 text-left">Published</th>
        <th class="p-3 text-right">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr class="border-b border-[#278450]/30">
          <td class="p-3">{{ $post->title }}</td>
          <td class="p-3">{{ $post->category ?? '-' }}</td>
          <td class="p-3">
            <span class="px-3 py-1 rounded-full text-sm 
              {{ $post->published ? 'bg-[#44FF00]/80 text-[#22421E]' : 'bg-gray-200 text-gray-600' }}">
              {{ $post->published ? 'Published' : 'Draft' }}
            </span>
          </td>
          <td class="p-3 text-right">
            <a href="{{ route('editor.posts.edit', $post->id) }}" class="text-[#22421E] font-semibold hover:text-[#399229] mr-3">Edit</a>
            <form action="{{ route('editor.posts.destroy', $post->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Delete this post?')" class="text-red-600 hover:text-red-800 font-semibold">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4" class="p-6 text-center text-[#22421E]/70">No posts yet.</td></tr>
      @endforelse
    </tbody>
  </table>

  <div class="mt-6">{{ $posts->links() }}</div>
</section>
@endsection
