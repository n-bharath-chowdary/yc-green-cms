@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto py-10">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#22421E]">Job Listings</h1>
    <a href="{{ route('admin.jobs.create') }}" 
       class="bg-[#44FF00] text-[#22421E] px-6 py-2 rounded-lg hover:bg-[#399229] font-semibold transition">
       + Add Job
    </a>
  </div>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <table class="w-full bg-[#BCF5D0] rounded-lg shadow-lg">
    <thead class="bg-[#44FF00] text-[#22421E] font-semibold">
      <tr>
        <th class="p-3 text-left">Title</th>
        <th class="p-3 text-left">Company</th>
        <th class="p-3 text-left">Location</th>
        <th class="p-3 text-left">Tags</th>
        <th class="p-3 text-left">Status</th>
        <th class="p-3 text-right">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($jobs as $job)
        <tr class="border-b border-[#278450]/30 hover:bg-[#8CFF98]/40 transition">
          <td class="p-3 font-semibold">{{ $job->title }}</td>
          <td class="p-3">
            @if ($job->company && $job->company->name)
              {{ $job->company->name }}
            @else
              <span class="text-[#278450]/70 italic">Not Assigned</span>
            @endif
          </td>
          <td class="p-3">{{ $job->location ?? '-' }}</td>
          <td class="p-3">
            @if($job->tags)
              @foreach(json_decode($job->tags, true) as $tag)
                <span class="inline-block bg-[#80FA68]/60 text-[#22421E] text-xs px-2 py-1 rounded-full mr-1">
                  {{ $tag }}
                </span>
              @endforeach
            @else
              <span class="text-gray-500 text-sm">—</span>
            @endif
          </td>
          <td class="p-3">
            <span class="px-3 py-1 rounded-full text-sm 
              {{ $job->is_active ? 'bg-[#44FF00]/80 text-[#22421E]' : 'bg-gray-300 text-gray-600' }}">
              {{ $job->is_active ? 'Active' : 'Closed' }}
            </span>
          </td>
          <td class="p-3 text-right">
            <a href="{{ route('admin.jobs.edit', $job->id) }}" 
               class="text-[#22421E] font-semibold hover:text-[#399229] mr-3">
               Edit
            </a>
            <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Delete this job?')" 
                      class="text-red-600 hover:text-red-800 font-semibold">
                Delete
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="p-6 text-center text-[#22421E]/70">
            No jobs available yet.
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div class="mt-6">{{ $jobs->links() }}</div>
</section>
@endsection
