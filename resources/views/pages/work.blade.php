@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-[#22421E] mb-2">Open Positions</h1>
    <p class="text-[#22421E]/80">Discover exciting opportunities from YC Green startups.</p>
  </div>

  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @forelse ($jobs as $job)
      <div class="p-6 bg-[#BCF5D0] rounded-xl shadow-lg hover:shadow-2xl border border-[#278450]/20 transition">
        <h2 class="text-xl font-semibold text-[#22421E] mb-1">{{ $job->title }}</h2>
        <p class="text-sm text-[#22421E]/80 mb-2">
          @if ($job->company)
            <strong>{{ $job->company->name }}</strong> — {{ $job->location ?? 'Remote' }}
          @else
            {{ $job->location ?? 'Remote' }}
          @endif
        </p>

        @if (!empty($job->tags))
          <div class="mb-3">
            @php
              $tags = is_array($job->tags)
                ? $job->tags
                : (json_decode($job->tags, true) ?: array_map('trim', explode(',', $job->tags)));
            @endphp

            @foreach ($tags as $tag)
              @if (!empty($tag))
                <span class="inline-block bg-[#80FA68]/60 text-[#22421E] text-xs px-2 py-1 rounded-full mr-1">
                  {{ $tag }}
                </span>
              @endif
            @endforeach
          </div>
        @endif

        <p class="text-sm text-[#22421E]/70 mb-4">{{ Str::limit($job->description, 100) }}</p>

        <a href="#" class="inline-block bg-[#44FF00] text-[#22421E] px-4 py-2 rounded-lg hover:bg-[#399229] font-semibold transition">
          Apply Now
        </a>
      </div>
    @empty
      <div class="col-span-full text-center text-[#22421E]/70 py-10">
        No open positions at the moment.
      </div>
    @endforelse
  </div>
</section>
@endsection
