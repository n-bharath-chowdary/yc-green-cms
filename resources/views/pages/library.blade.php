@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-[#22421E] mb-2">Knowledge Library</h1>
    <p class="text-[#22421E]/80">Explore insights, stories, and research shared by YC Green editors.</p>
  </div>

  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @forelse ($posts as $post)
      <div class="p-6 bg-[#BCF5D0] rounded-xl shadow-lg border border-[#278450]/20 hover:shadow-2xl transition">
        <h2 class="text-xl font-semibold text-[#22421E] mb-2">{{ $post->title }}</h2>
        <p class="text-sm text-[#22421E]/80 mb-3">{{ $post->excerpt ?? Str::limit($post->body, 80) }}</p>
        <p class="text-xs text-[#278450] mb-3">Category: {{ $post->category ?? 'General' }}</p>
        <a href="#" class="text-[#44FF00] font-medium hover:underline">Read More →</a>
      </div>
    @empty
      <div class="col-span-full text-center text-[#22421E]/70 py-10">
        No posts published yet.
      </div>
    @endforelse
  </div>
</section>
@endsection
