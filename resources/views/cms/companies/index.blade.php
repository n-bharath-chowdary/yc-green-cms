@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto py-10">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#22421E]">Companies</h1>
    <a href="{{ route('admin.companies.create') }}" class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229]">+ Add Company</a>
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
        <th class="p-3 text-left">Category</th>
        <th class="p-3 text-left">Website</th>
        <th class="p-3 text-right">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($companies as $company)
        <tr class="border-b border-[#278450]/30">
          <td class="p-3">{{ $company->name }}</td>
          <td class="p-3">{{ $company->category ?? '-' }}</td>
          <td class="p-3"><a href="{{ $company->website }}" class="text-[#278450] hover:underline">{{ $company->website }}</a></td>
          <td class="p-3 text-right">
            <a href="{{ route('admin.companies.edit', $company->id) }}" class="text-[#22421E] font-semibold hover:text-[#399229] mr-3">Edit</a>
            <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Delete this company?')" class="text-red-600 p-1 rounded hover:text-red-800 font-semibold">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="p-6 text-center text-[#22421E]/70">No companies added yet.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div class="mt-6">
    {{ $companies->links() }}
  </div>
</section>
@endsection
