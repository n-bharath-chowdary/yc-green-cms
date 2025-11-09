@extends('layouts.app')

@section('content')
<!-- Banner CTA -->
<section class="bg-header text-heading">
  <div class="max-w-6xl mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Apply for YC Green</h1>
      <p class="mt-2 opacity-90">Make something people want. Then make it bigger.</p>
    </div>
    <a href="#apply-form" class="inline-block px-6 py-3 bg-button rounded-lg font-semibold hover:bg-hover transition">
      Start Application
    </a>
  </div>
</section>

<!-- Apply Form Card -->
<section id="apply-form" class="py-12 px-6 bg-primary text-heading">
  <div class="max-w-3xl mx-auto bg-card rounded-xl shadow-md p-8">
    <!-- Progress -->
    <div class="w-full bg-textbase rounded-full h-2.5 mb-8">
      <div id="apply-progress" class="bg-button h-2.5 rounded-full transition-all duration-500" style="width: 33%"></div>
    </div>

    <form id="ApplyForm" class="space-y-6" novalidate>
      <!-- Step 1 -->
      <div class="apply-step active" data-step="1">
        <h2 class="text-xl font-bold mb-4">Founder & Startup</h2>

        <label class="block mb-1 font-semibold">Full Name</label>
        <input type="text" name="name" class="apply-input" placeholder="Your full name">
        <p class="apply-error" data-for="name"></p>

        <label class="block mt-4 mb-1 font-semibold">Email</label>
        <input type="email" name="email" class="apply-input" placeholder="you@example.com">
        <p class="apply-error" data-for="email"></p>

        <label class="block mt-4 mb-1 font-semibold">Startup Name</label>
        <input type="text" name="startup" class="apply-input" placeholder="Company / project name">
        <p class="apply-error" data-for="startup"></p>
      </div>

      <!-- Step 2 -->
      <div class="apply-step hidden" data-step="2">
        <h2 class="text-xl font-bold mb-4">What are you building?</h2>

        <label class="block mb-1 font-semibold">One-liner</label>
        <input type="text" name="oneliner" class="apply-input" placeholder="e.g., Stripe for Africa">
        <p class="apply-error" data-for="oneliner"></p>

        <label class="block mt-4 mb-1 font-semibold">Description</label>
        <textarea name="description" rows="4" class="apply-input" placeholder="Briefly describe your product, user, and problem."></textarea>
        <p class="apply-error" data-for="description"></p>

        <label class="block mt-4 mb-1 font-semibold">Stage</label>
        <select name="stage" class="apply-input">
          <option value="">Select stage</option>
          <option>Idea</option>
          <option>MVP</option>
          <option>Launched</option>
          <option>Scaling</option>
        </select>
        <p class="apply-error" data-for="stage"></p>
      </div>

      <!-- Step 3 -->
      <div class="apply-step hidden" data-step="3">
        <h2 class="text-xl font-bold mb-4">Traction & Goals</h2>

        <label class="block mb-1 font-semibold">Current metrics (optional)</label>
        <input type="text" name="metrics" class="apply-input" placeholder="Users, MRR, growth, etc.">

        <label class="block mt-4 mb-1 font-semibold">Funding goal</label>
        <input type="text" name="funding" class="apply-input" placeholder="e.g., $100K - $300K">
        <p class="apply-error" data-for="funding"></p>

        <label class="block mt-4 mb-1 font-semibold">Anything else?</label>
        <textarea name="notes" rows="3" class="apply-input" placeholder="Links, demos, context (optional)"></textarea>
      </div>

      <!-- Controls -->
      <div class="flex flex-col sm:flex-row justify-between gap-3 pt-2">
        <div class="flex gap-3">
          <button type="button" id="ApplyPrev" class="apply-btn-secondary hidden">Previous</button>
          <button type="button" id="ApplyNext" class="apply-btn-primary">Next</button>
        </div>
        <div class="flex gap-3">
          <button type="button" id="ApplySave" class="apply-btn-outline">Save draft</button>
          <button type="button" id="ApplySubmit" class="apply-btn-primary hidden">Submit</button>
        </div>
      </div>

      <!-- Mock note -->
      <p class="text-sm mt-2 opacity-80">Note: This is a mock UI. No data is sent to a server.</p>
    </form>
  </div>
</section>
@endsection
