@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto py-10">
  <h1 class="text-3xl font-bold text-[#22421E] mb-6">Edit Job</h1>

  <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" class="space-y-5 bg-[#BCF5D0] p-6 rounded-xl shadow-lg">
    @csrf @method('PUT')
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Title</label>
      <input type="text" name="title" value="{{ $job->title }}" class="w-full p-2 rounded border border-[#278450]" required>
    </div>
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Location</label>
      <input type="text" name="location" value="{{ $job->location }}" class="w-full p-2 rounded border border-[#278450]">
    </div>
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Tags</label>
      <input type="text" name="tags" value="{{ implode(',', (array)$job->tags) }}" class="w-full p-2 rounded border border-[#278450]">
    </div>
    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Description</label>
      <textarea name="description" rows="4" class="w-full p-2 rounded border border-[#278450]">{{ $job->description }}</textarea>
    </div>
    {{-- Active --}}
    <div class="flex items-center space-x-2">
      <input type="checkbox" id="is_active" name="is_active" value="1"
             {{ old('is_active', $job->is_active) ? 'checked' : '' }}>
      <label for="is_active" class="text-[#22421E] font-semibold">Active</label>
    </div>

    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.jobs.index') }}" class="bg-[#80FA68] text-[#22421E] px-4 py-2 rounded-lg hover:bg-[#44FF00]">Cancel</a>
      <button type="submit" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229] font-semibold">Update</button>
    </div>
  </form>
</section>
@endsection
