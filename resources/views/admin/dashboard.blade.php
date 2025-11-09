@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-6 py-10">
  <h1 class="text-3xl font-bold text-heading mb-6">Admin Dashboard</h1>
  <div class="grid md:grid-cols-3 gap-6">
    <a href="{{ route('admin.companies.index') }}" class="shadow-smooth rounded-xl p-6 bg-card text-[#BCF5D0] hover:bg-accent transition">
      <h2 class="text-xl font-semibold mb-2">Companies</h2>
      <p>Manage startup profiles</p>
    </a>
    <a href="{{ route('admin.jobs.index') }}" class="shadow-smooth rounded-xl p-6 bg-card text-[#BCF5D0] hover:bg-accent transition">
      <h2 class="text-xl font-semibold mb-2">Jobs</h2>
      <p>Manage open roles</p>
    </a>
    <a href="{{ route('admin.users.index') }}" class="shadow-smooth rounded-xl p-6 bg-card text-[#BCF5D0] hover:bg-accent transition">
      <h2 class="text-xl font-semibold mb-2">Users</h2>
      <p>View registered users</p>
    </a>
  </div>
</section>
@endsection
