<x-layout>
    <section class="space-y-5">
        <x-heading>Results</x-heading>

        @foreach ($jobs as $job)
            <x-expanded-job-card :job="$job" />
        @endforeach
    </section>
</x-layout>