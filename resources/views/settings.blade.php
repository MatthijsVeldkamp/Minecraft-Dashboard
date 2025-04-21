@extends('layouts.app')
@section('content')
<div class="flex flex-col items-center gap-4 font-mono">
    <h1 class="w-full text-center font-mono text-4xl font-bold mb-8">Dashboard</h1>
    <div class="flex flex-col lg:flex-row justify-center gap-4 w-full lg:w-[1400px] h-[600px]">
        <!-- Server Panels Container -->
         <div class="flex flex-col gap-4 justify-between h-full">
        <div class="w-full bg-base-100 p-8 rounded-lg shadow-xl border-2 border-primary relative h-[300px] order-2 lg:order-1">
            <!-- First Server Panel -->
            <div class="absolute top-4 right-4 inline-grid *:[grid-area:1/1]">
                <div class="status status-success animate-ping"></div>
                <div class="status status-success"></div>
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <div class="flex items-center gap-4">
                    <i class="fas fa-server text-3xl"></i>
                    <span class="text-2xl font-mono font-semibold">Server #1</span>
                </div>
                <div class="font-mono">
                    <div>Paper 1.20.4</div>
                    <div class="text-success">Server is up</div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="flex justify-center gap-6">
                <button class="btn btn-circle btn-success btn-lg font-mono" disabled>
                    <i class="fas fa-play text-xl"></i>
                </button>
                <button class="btn btn-circle btn-error btn-lg font-mono">
                    <i class="fas fa-stop text-xl"></i>
                </button>
            </div>
        </div>
        <div class="w-full bg-base-100 p-8 rounded-lg shadow-xl border-2 border-primary relative h-[300px] order-2 lg:order-1">

            <!-- Cloned Server Panel -->
            <div class="absolute top-4 right-4 inline-grid *:[grid-area:1/1]">
                <div class="status status-success animate-ping"></div>
                <div class="status status-success"></div>
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <div class="flex items-center gap-4">
                    <i class="fas fa-users text-3xl"></i>
                    <span class="text-2xl font-mono font-semibold">Players</span>
                </div>
                <div class="font-mono">
            <div class="divider"></div>

                    <div class="my-3">6/20</div>
                    <div class="flex flex-col gap-2">
                        <div class="text-success">Hurbie48</div>
                        <div class="text-success">StormChaser90</div>
                        <div class="text-success">PixelPwnz</div>
                        <div class="text italic opacity-60">And 3 more...</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Rest of the original content -->
        <div class="w-full lg:w-2/4 border-2 border-primary rounded-lg order-1 lg:order-2">
            <div role="tablist" class="tabs tabs-border justify-center font-mono">
                <a href="{{ route('players') }}" role="tab" class="tab font-mono"><i class="fas fa-users mr-2"></i>Players</a>
                <a href="{{ route('console') }}" role="tab" class="tab font-mono"><i class="fas fa-terminal mr-2"></i>Console</a>
                <a role="tab" class="tab tab-active font-mono"><i class="fas fa-cog mr-2"></i>Settings</a>
                <a role="tab" class="tab font-mono"><i class="fas fa-chart-line mr-2"></i>Analytics</a>
            </div>
            <div class="divider"></div>
            {{-- Settings Tab Content (hard‑coded) --}}
            <div class="p-6 font-mono space-y-6">
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- motd --}}
                <div>
                    <label for="motd" class="block text-sm font-medium">motd</label>
                    <input
                    id="motd"
                    name="motd"
                    type="text"
                    value="A Minecraft Server"
                    class="input input-bordered w-full"
                    />
                </div>

                {{-- server-port --}}
                <div>
                    <label for="server-port" class="block text-sm font-medium">server-port</label>
                    <input
                    id="server-port"
                    name="server-port"
                    type="number"
                    value="25565"
                    class="input input-bordered w-full"
                    />
                </div>

                {{-- max-players --}}
                <div>
                    <label for="max-players" class="block text-sm font-medium">max-players</label>
                    <input
                    id="max-players"
                    name="max-players"
                    type="number"
                    value="20"
                    class="input input-bordered w-full"
                    />
                </div>

                {{-- level-seed --}}
                <div>
                    <label for="level-seed" class="block text-sm font-medium">level-seed</label>
                    <input
                    id="level-seed"
                    name="level-seed"
                    type="text"
                    value="YourSeedHere"
                    class="input input-bordered w-full"
                    />
                </div>

                {{-- enable-command-block --}}
                <div class="flex items-center space-x-2">
                    <input
                    id="enable-command-block"
                    name="enable-command-block"
                    type="checkbox"
                    checked
                    class="checkbox"
                    />
                    <label for="enable-command-block" class="text-sm">enable-command-block</label>
                </div>

                {{-- white-list --}}
                <div class="flex items-center space-x-2">
                    <input
                    id="white-list"
                    name="white-list"
                    type="checkbox"
                    class="checkbox"
                    />
                    <label for="white-list" class="text-sm">white-list</label>
                </div>

                {{-- online-mode --}}
                <div class="flex items-center space-x-2">
                    <input
                    id="online-mode"
                    name="online-mode"
                    type="checkbox"
                    checked
                    class="checkbox"
                    />
                    <label for="online-mode" class="text-sm">online-mode</label>
                </div>

                {{-- pvp --}}
                <div class="flex items-center space-x-2">
                    <input
                    id="pvp"
                    name="pvp"
                    type="checkbox"
                    checked
                    class="checkbox"
                    />
                    <label for="pvp" class="text-sm">pvp</label>
                </div>

                {{-- spawn-protection --}}
                <div>
                    <label for="spawn-protection" class="block text-sm font-medium">spawn-protection</label>
                    <input
                    id="spawn-protection"
                    name="spawn-protection"
                    type="number"
                    value="16"
                    class="input input-bordered w-full"
                    />
                </div>
                </div>

                <div class="flex justify-end mt-4">
                <button type="button" class="btn btn-primary">
                    Save Settings
                </button>
                </div>
            </form>
            </div>

        </div>
    </div>
</div>
@endsection