<x-layout>

    <x-breadcrumbs class="mb-4"
        :links="[
            'Employments' => route('employments.index'),
            $employment->title => '#'
        ]"
    />

    <x-employment-card :employment="$employment">
        <p class="mb-4 text-sm text-slate-500">
            {!! nl2br(e($employment->description)) !!}
        </p>
    </x-employment-card>

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            More {{ $employment->employer->company_name }} Jobs
        </h2>
        <div class="text-sm text-slate-500">
            @foreach ($employment->employer->employments as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-salate-700">
                            <a href="{{ route('employments.show', $otherJob) }}">
                                {{ $otherJob->title }}
                            </a>
                        </div>
                        <div class="text-xs">
                            {{ $otherJob->created_at->diffforHumans() }}
                        </div>
                    </div>
                    <div class="text-xs">
                        ${{ number_format($otherJob->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>

</x-layout>
