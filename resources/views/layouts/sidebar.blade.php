<aside class="w-64 h-screen bg-base-100 p-6 border-r border-base-300">
  <h2 class="text-2xl font-bold mb-6">Menu</h2>
  <ul class="menu space-y-2">
    <li>
      <a href="{{ route('players') }}" class="flex items-center px-3 py-2 rounded hover:bg-base-200">
        <i class="fas fa-tachometer-alt mr-3 text-lg"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{ route('players') }}" class="flex items-center px-3 py-2 rounded hover:bg-base-200">
        <i class="fas fa-user mr-3 text-lg"></i>
        <span>Account</span>
      </a>
    </li>
    <li>
      <a href="{{ route('players') }}" class="flex items-center px-3 py-2 rounded hover:bg-base-200">
        <i class="fas fa-server mr-3 text-lg"></i>
        <span>Servers</span>
      </a>
    </li>
  </ul>
</aside>
