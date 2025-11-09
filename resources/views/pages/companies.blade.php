@extends('layouts.app')

@section('content')
<section class="bg-primary text-heading py-12 px-6">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-10">
      <h1 class="text-4xl font-bold text-heading">Startups Backed by YC Green</h1>
      <p class="mt-2 text-lg text-[#22421E]/80">Innovators turning green ideas into global impact.</p>
    </div>

    <!-- Filters (mock UI) -->
    <div class="flex flex-wrap justify-center gap-3 mb-10">
      <button class="filter-btn active">All</button>
      <button class="filter-btn">AI</button>
      <button class="filter-btn">Health</button>
      <button class="filter-btn">FinTech</button>
      <button class="filter-btn">Sustainability</button>
    </div>

    <!-- Companies Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
     
  @forelse ($companies as $company)
    @php
      $category = is_array($company->category) ? implode(', ', $company->category) : ($company->category ?? 'Other');
      $logo = $company->logo_url ?: asset('logo.png');
      $name = (string) ($company->name ?? 'Untitled');
      $one  = (string) ($company->one_liner ?? 'No description yet.');
      $website = (string) ($company->website ?? '');
    @endphp

    <div class="company-card" data-category="{{ $category }}">
      <img src="{{ $logo }}" alt="{{ $name }}" class="h-20 w-20 mx-auto mb-4 rounded-full bg-[#BCF5D0] object-cover">
      <h2 class="text-xl font-semibold mb-1">{{ $name }}</h2>
      <p class="text-sm opacity-90 mb-3">{{ $one }}</p>
      <span class="inline-block px-3 py-1 text-sm bg-[#BCF5D0] rounded-full font-medium text-[#22421E]">
        {{ $category }}
      </span>
      @if ($website !== '')
        <div class="mt-3 text-center">
          <a href="{{ $website }}" class="text-[#44FF00] hover:underline" target="_blank" rel="noopener">Visit Site</a>
        </div>
      @endif
    </div>
  @empty
    <div class="col-span-full text-center text-[#22421E]/70 py-10">
      No companies added yet.
    </div>
  @endforelse
</div>


  </div>
</section>

<!-- Modal (Mock) -->
<div id="company-modal" class="hidden fixed inset-0 bg-[#22421E]/50 flex justify-center items-center z-50">
  <div class="bg-card text-[#BCF5D0] rounded-xl shadow-lg max-w-md w-full p-6 relative">
    <button id="modal-close" class="absolute top-3 right-4 text-[#44FF00] text-2xl font-bold">&times;</button>
    <h2 id="modal-title" class="text-2xl font-bold mb-3"></h2>
    <p id="modal-body" class="text-sm opacity-90 mb-4"></p>
    <a href="#" id="modal-link" class="apply-btn-outline text-center block">Visit Website</a>
  </div>
</div>
@endsection
