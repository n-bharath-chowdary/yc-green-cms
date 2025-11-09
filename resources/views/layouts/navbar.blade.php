<nav class="sticky top-0 z-50 bg-gradient-to-r from-[#00AD23] via-[#189d1a] to-[#2c8528] shadow-[0_8px_20px_rgba(34,66,30,0.2)] backdrop-blur-md bg-opacity-90 transition-all duration-300 rounded-b-[1rem]">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-3">
    <!-- Logo -->
    <a href="/" class="flex items-center gap-2 text-2xl font-extrabold text-[#22421E] hover:scale-105 transition-transform">
      <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10 w-10 rounded-full border-2 border-[#22421E]/30">
      YC Green
    </a>

    <!-- Nav Links -->
    <ul class="hidden md:flex space-x-6 font-semibold text-[#22421E]">
      <li><a href="/" class="hover:text-[#399229] transition">Home</a></li>
      <li><a href="/apply" class="hover:text-[#399229] transition">Apply</a></li>
      <li><a href="/companies" class="hover:text-[#399229] transition">Companies</a></li>
      <li><a href="/about" class="hover:text-[#399229] transition">About</a></li>
      <li><a href="/library" class="hover:text-[#399229] transition">Library</a></li>
      <li><a href="/blog" class="hover:text-[#399229] transition">Blog</a></li>
      <li><a href="/work" class="hover:text-[#399229] transition">Work</a></li>
    </ul>

    <!-- Auth or Register -->
    <div class="flex items-center gap-3">
      @auth
        @if(auth()->user()->roles === 'editor')
          <a href="{{ route('editor.home') }}" class="font-semibold hover:text-[#399229]">Editor Dashboard</a>
        @endif
        @if(auth()->user()->roles === 'admin')
          <!-- <a href="{{ route('editor.home') }}" class="font-semibold hover:text-[#399229]">Editor</a> -->
          <a href="{{ route('admin.home') }}" class="font-semibold hover:text-[#399229]">Admin Dashboard</a>
        @endif
      @endauth

      @auth
        <!-- <span class="text-sm font-medium text-[#22421E]">{{ auth()->user()->name }}</span> -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="px-3 py-1 rounded-md bg-[#22421E] text-[#BCF5D0] hover:bg-[#399229] transition">
            Logout
          </button>
        </form>
      @endauth

      @guest
        <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-[#399229] transition">Login</a>
        <a href="{{ route('register') }}" class="px-3 py-1 bg-[#22421E] text-[#BCF5D0] rounded-md font-semibold hover:bg-[#399229] transition">
          Register
        </a>
      @endguest
    </div>
  </div>
</nav>
