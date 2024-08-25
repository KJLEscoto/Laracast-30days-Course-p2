<x-layout>
    <div class="space-y-10">
        <section class="space-y-5">
            <x-category-heading>Featured Jobs</x-category-heading>
            <div class="grid grid-cols-3 gap-10">
                <x-job-cards />
                <x-job-cards />
                <x-job-cards />
            </div>
        </section>

        <section class="space-y-5">
            <x-category-heading>Tags</x-category-heading>

            <div class="flex gap-x-3">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section class="space-y-5">
            <x-category-heading>Recent Jobs</x-category-heading>
        </section>
    </div>
</x-layout>