@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-10">

  <!-- Header -->
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-[#22421E]">Editor Dashboard</h1>
    <span class="text-[#278450] text-sm font-medium bg-[#BCF5D0] px-3 py-1 rounded-lg">
      Welcome, {{ Auth::user()->name }}
    </span>
  </div>

  <!-- Description -->
  <p class="text-[#22421E]/80 mb-10">
    Manage your posts, draft new content, and maintain the YC Green Library.  
    Everything you publish here appears on the main platform after admin approval.
  </p>

  <!-- Actions Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

    {{-- Manage Posts --}}
    <a href="{{ route('editor.posts.index') }}" 
       class="shadow-smooth rounded-xl p-6 bg-[#BCF5D0] hover:bg-[#8CFF98]/80 border border-[#278450]/30 transition">
      <h2 class="text-xl font-semibold text-[#22421E] mb-2">Posts</h2>
      <p class="text-[#22421E]/80">View, edit, or create new posts for the blog & library.</p>
    </a>

    {{-- Add New Post --}}
    <a href="{{ route('editor.posts.create') }}" 
       class="shadow-smooth rounded-xl p-6 bg-[#BCF5D0] text-[#22421E] hover:bg-[#8CFF98]/80 border border-[#278450]/30 transition">
      <h2 class="text-xl font-semibold text-[#22421E] mb-2">Create Post</h2>
      <p class="text-[#22421E]/80">Start a fresh post, add content, and save drafts easily.</p>
    </a>

    {{-- (Optional) Analytics Placeholder --}}
    <div class="shadow-smooth rounded-xl p-6 bg-[#278450] text-[#BCF5D0] opacity-90">
      <h2 class="text-xl font-semibold mb-2">Your Stats</h2>
      <p>Track post views and engagement — coming soon.</p>
    </div>

  </div>

</section>
@endsection
