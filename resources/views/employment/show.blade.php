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

</x-layout>
