@extends('layouts.app')

@section('content')
<section class="bg-primary text-heading py-16">
  <div class="max-w-6xl mx-auto px-6 text-center mb-16">
    <h1 class="text-4xl font-bold mb-4">Our Mission</h1>
    <p class="text-lg leading-relaxed text-[#22421E]/80 max-w-3xl mx-auto">
      YC Green exists to empower bold founders building sustainable, technology-driven solutions for the planet. 
      Our mission is simple — <span class="font-semibold text-[#399229]">make something people need and make it green.</span>
    </p>
  </div>

  <!-- Vision & Values -->
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center">
    <div class="about-card">
      <h3 class="text-2xl font-bold mb-2">🌱 Sustainability</h3>
      <p class="opacity-90">We back ideas that create long-term ecological and social impact.</p>
    </div>
    <div class="about-card">
      <h3 class="text-2xl font-bold mb-2">💡 Innovation</h3>
      <p class="opacity-90">We believe creativity, tech, and courage can redefine global industries.</p>
    </div>
    <div class="about-card">
      <h3 class="text-2xl font-bold mb-2">🤝 Community</h3>
      <p class="opacity-90">Our founders, mentors, and investors collaborate to drive purpose-led growth.</p>
    </div>
  </div>
</section>

<!-- Team -->
<section class="bg-[#BCF5D0] py-16 text-[#22421E]">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Meet the Team</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach ([
        ['Bharath Choudary', 'Founder & CEO', 'bharath.png'],
        ['Niranjan Kumar', 'CTO', 'niranjan.png'],
        ['Shruti Rao', 'Head of Design', 'shruti.png'],
        ['Arjun Mehta', 'Operations Lead', 'arjun.png'],
        ['Ishita Sen', 'Marketing Lead', 'ishita.png'],
        ['Rahul Dev', 'AI Engineer', 'rahul.png']
      ] as $member)
      <div class="team-card">
        <img src="{{ asset($member[2]) }}" alt="{{ $member[0] }}" class="w-24 h-24 mx-auto rounded-full object-cover border-4 border-[#399229] mb-4">
        <h3 class="text-xl font-bold">{{ $member[0] }}</h3>
        <p class="text-sm opacity-90">{{ $member[1] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section bg-gradient-to-r from-[#8CFF98] via-[#399229] to-[#147204] text-[#22421E] py-14 text-center shadow-inner">
  <h2 class="text-3xl font-extrabold mb-4 drop-shadow-sm">
    Ready to build something meaningful?
  </h2>
  <p class="text-lg mb-6 opacity-90">Turn your idea into impact — join YC Green.</p>
  <a href="/apply"
     class="px-8 py-3 bg-[#22421E] text-[#BCF5D0] rounded-lg font-semibold hover:bg-[#399229] hover:text-[#22421E] transition-transform transform hover:scale-105 shadow-md">
     Apply Now
  </a>
</section>

@endsection
