@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto py-10">
  <h1 class="text-3xl font-bold text-[#22421E] mb-6">Create New Job</h1>

  <form action="{{ route('admin.jobs.store') }}" method="POST" class="space-y-6 bg-[#BCF5D0] p-8 rounded-xl shadow-md">
    @csrf

    <!-- Company Selection -->
    <div>
      <label for="company_id" class="block text-[#22421E] font-semibold mb-2">Select Company</label>
      <select name="company_id" id="company_id" class="w-full rounded-md border border-[#278450]/30 p-2 focus:ring-[#44FF00]">
        <option value="">-- Choose Company --</option>
        @foreach ($companies as $company)
          <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
      </select>
      @error('company_id')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Job Title -->
    <div>
      <label for="title" class="block text-[#22421E] font-semibold mb-2">Job Title</label>
      <input type="text" name="title" id="title" class="w-full rounded-md border border-[#278450]/30 p-2" placeholder="e.g., Full Stack Developer" required>
    </div>

    <!-- Location -->
    <div>
      <label for="location" class="block text-[#22421E] font-semibold mb-2">Location</label>
      <input type="text" name="location" id="location" class="w-full rounded-md border border-[#278450]/30 p-2" placeholder="e.g., Bengaluru">
    </div>

    <!-- Tags -->
    <div>
      <label for="tags" class="block text-[#22421E] font-semibold mb-2">Tags (comma-separated)</label>
      <input type="text" name="tags" id="tags" class="w-full rounded-md border border-[#278450]/30 p-2" placeholder="AI, Backend, Laravel">
    </div>

    <!-- Description -->
    <div>
      <label for="description" class="block text-[#22421E] font-semibold mb-2">Description</label>
      <textarea name="description" id="description" rows="4" class="w-full rounded-md border border-[#278450]/30 p-2" placeholder="Describe the job role..."></textarea>
    </div>

    <!-- Active Toggle -->
    <div class="flex items-center space-x-2">
      <input type="checkbox" name="is_active" id="is_active" value="1" class="h-4 w-4 text-[#44FF00] border-[#278450]">
      <label for="is_active" class="text-[#22421E] font-semibold">Active Job</label>
    </div>

    <!-- Submit -->
    <button type="submit" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg font-semibold hover:bg-[#399229] transition">
      Create Job
    </button>
  </form>
</section>
@endsection
