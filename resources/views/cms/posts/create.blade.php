@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto py-10">
  <h1 class="text-3xl font-bold text-[#22421E] mb-6">Create New Post</h1>

  <form action="{{ route('editor.posts.store') }}" method="POST" class="space-y-5 bg-[#BCF5D0] p-6 rounded-xl shadow-lg">
    @csrf

    <!-- Title -->
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Title</label>
      <input type="text" name="title" class="w-full p-2 rounded border border-[#278450]" required>
    </div>

    <!-- Excerpt -->
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Excerpt</label>
      <textarea name="excerpt" rows="3" class="w-full p-2 rounded border border-[#278450]" placeholder="Short summary (optional)"></textarea>
    </div>

    <!-- Body -->
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Body</label>
      <textarea name="body" rows="8" class="w-full p-2 rounded border border-[#278450]" placeholder="Write your full article here..." required></textarea>
    </div>

    <!-- Category -->
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Category</label>
      <input type="text" name="category" class="w-full p-2 rounded border border-[#278450]" placeholder="e.g. AI, Sustainability, Innovation">
    </div>

    <!-- Published toggle -->
    <div class="flex items-center gap-3">
      <input type="checkbox" name="published" value="1" id="published" class="h-5 w-5 border-[#278450]">
      <label for="published" class="text-[#22421E] font-medium">Mark as Published</label>
    </div>

    <div class="flex justify-end gap-4">
      <a href="{{ route('editor.posts.index') }}" class="bg-[#80FA68] text-[#22421E] px-4 py-2 rounded-lg hover:bg-[#44FF00]">Cancel</a>
      <button type="submit" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229] font-semibold">Save Post</button>
    </div>
  </form>
</section>
@endsection
