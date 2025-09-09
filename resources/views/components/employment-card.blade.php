<x-card class="mb-4">

            <div class="flex justify-between mb-4">

                <h2 class="text-lg font-medium">{{ $employment->title }}</h2>

                <div class="text-slate-500">
                    ${{ number_format($employment->salary) }}
                </div>

            </div>

            <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">

                <div class="flex space-x-4">

                    <div>
                        {{ $employment->employer->company_name }}
                    </div>

                    <div>
                        {{ $employment->location }}
                    </div>

                </div>

                <div class="flex space-x-1 text-xs">

                    <x-tag>
                        <a href={{ route('employments.index', ['experience' => $employment->experience]) }}>
                            {{ Str::ucfirst($employment->experience) }}
                        </a>
                    </x-tag>
                    <x-tag>
                        <a href={{ route('employments.index', ['category' => $employment->category]) }}>
                            {{ $employment->category }}
                        </a>
                    </x-tag>

                </div>

            </div>

           {{ $slot }}

        </x-card>
