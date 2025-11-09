@extends('layouts.app')

@section('content')
<!-- HERO -->
<section class="bg-g[#8CFF98] py-24 text-center text-[#22421E] rounded-b-[3rem] shadow-[0_10px_30px_rgba(34,66,30,0.25)]">
  <h1 class="text-6xl font-extrabold mb-4 drop-shadow-sm">Make Something People Want</h1>
  <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
    Empowering founders to build impactful, sustainable startups that define the next generation.
  </p>
  <a href="/apply"
     class="px-8 py-3 bg-[#22421E] text-[#BCF5D0] rounded-xl font-semibold hover:bg-[#399229] hover:text-[#fff] transition-transform transform hover:scale-105 shadow-[0_0_20px_rgba(68,255,0,0.4)]">
     Apply Now
  </a>
</section>

<!-- STATS -->
<section class="bg-[#58C454] py-16 text-center text-[#22421E]">
  <div class="grid sm:grid-cols-3 gap-10 max-w-4xl mx-auto">
    <div class="rounded-2xl bg-[#BCF5D0] p-6 shadow-smooth">
      <h3 class="text-4xl font-bold mb-1">4,000+</h3>
      <p class="font-medium opacity-80">Startups Funded</p>
    </div>
    <div class="rounded-2xl bg-[#BCF5D0] p-6 shadow-smooth">
      <h3 class="text-4xl font-bold mb-1">85</h3>
      <p class="font-medium opacity-80">Countries Represented</p>
    </div>
    <div class="rounded-2xl bg-[#BCF5D0] p-6 shadow-smooth">
      <h3 class="text-4xl font-bold mb-1">120,000+</h3>
      <p class="font-medium opacity-80">Founders Supported</p>
    </div>
  </div>
</section>

<!-- Focus Areas -->
<section class="bg-[#BCF5D0] py-20 text-center text-[#22421E]">
  <h2 class="text-3xl font-bold mb-10">Our Focus Areas</h2>
  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
    @foreach ([
      ['AI & Automation', 'Building smarter, scalable systems that learn, adapt, and transform industries.', 'ai-icon.png'],
      ['Sustainability', 'Backing innovations that protect our planet and enable clean growth.', 'eco-icon.png'],
      ['Full-Stack Innovation', 'From frontend to backend — engineering robust, future-ready platforms.', 'code-icon.png'],
    ] as $focus)
      <div class="rounded-2xl bg-[#8CFF98] p-8 shadow-[0_6px_20px_rgba(34,66,30,0.25)] hover:shadow-[0_8px_25px_rgba(34,66,30,0.35)] transition">
        <img src="{{ asset($focus[2]) }}" alt="{{ $focus[0] }}" class="w-20 h-20 mx-auto mb-5 object-contain">
        <h3 class="text-xl font-bold mb-2">{{ $focus[0] }}</h3>
        <p class="text-sm opacity-90 leading-relaxed">{{ $focus[1] }}</p>
      </div>
    @endforeach
  </div>
</section>


<!-- TESTIMONIALS -->
<section class="bg-[#BCF5D0] py-20 text-center">
  <h2 class="text-3xl font-bold text-[#22421E] mb-10">Founder Stories</h2>
  <div class="grid sm:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
    @foreach ([
      ['“YC Green helped us turn our prototype into a global company.”', 'Ananya, CEO of MindCart'],
      ['“From idea to investor in 3 months — the mentorship was unmatched.”', 'Rohan, Founder of FinBuddy'],
      ['“A true ecosystem for creators who want to make an impact.”', 'Leena, CTO of CodeSprout'],
    ] as $story)
      <div class="bg-[#8CFF98] rounded-xl p-6 shadow-[0_6px_15px_rgba(34,66,30,0.25)] hover:shadow-[0_8px_20px_rgba(34,66,30,0.35)] transition">
        <p class="italic text-[#22421E]/90 mb-4">{{ $story[0] }}</p>
        <span class="text-[#278450] font-semibold">— {{ $story[1] }}</span>
      </div>
    @endforeach
  </div>
</section>

<!-- How it Works -->

<section class="bg-[#58C454] text-[#22421E] py-20 text-center">
  <h2 class="text-3xl font-bold mb-10">How YC Green Works</h2>
  <div class="grid sm:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
    <div class="rounded-xl bg-[#BCF5D0] p-8 shadow-smooth">
      <h3 class="text-2xl font-bold mb-3">1. Apply</h3>
      <p class="text-sm opacity-80">Founders share their startup ideas through a simple application.</p>
    </div>
    <div class="rounded-xl bg-[#BCF5D0] p-8 shadow-smooth">
      <h3 class="text-2xl font-bold mb-3">2. Build</h3>
      <p class="text-sm opacity-80">Selected startups get access to mentorship, AI tools, and funding.</p>
    </div>
    <div class="rounded-xl bg-[#BCF5D0] p-8 shadow-smooth">
      <h3 class="text-2xl font-bold mb-3">3. Scale</h3>
      <p class="text-sm opacity-80">We help them grow sustainably and connect with investors worldwide.</p>
    </div>
  </div>
</section>

@endsection
