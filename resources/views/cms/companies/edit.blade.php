@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto py-10">
  <h1 class="text-3xl font-bold text-[#22421E] mb-6">Edit Company</h1>

  <form action="{{ route('admin.companies.update', $company->id) }}" method="POST" class="space-y-5 bg-[#BCF5D0] p-6 rounded-xl shadow-lg">
    @csrf
    @method('PUT')

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Name</label>
      <input type="text" name="name" value="{{ $company->name }}" class="w-full p-2 rounded border border-[#278450]" required>
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">One-liner</label>
      <input type="text" name="one_liner" value="{{ $company->one_liner }}" class="w-full p-2 rounded border border-[#278450]">
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Category</label>
      <input type="text" name="category" value="{{ $company->category }}" class="w-full p-2 rounded border border-[#278450]">
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Logo URL</label>
      <input type="text" name="logo_url" value="{{ $company->logo_url }}" class="w-full p-2 rounded border border-[#278450]">
    </div>

    <div>
      <label class="block text-[#22421E] font-semibold mb-1">Website</label>
      <input type="text" name="website" value="{{ $company->website }}" class="w-full p-2 rounded border border-[#278450]">
    </div>

    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.companies.index') }}" class="bg-[#80FA68] text-[#22421E] px-4 py-2 rounded-lg hover:bg-[#44FF00]">Cancel</a>
      <button type="submit" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229] font-semibold">Update</button>
    </div>
  </form>
</section>
@endsection
