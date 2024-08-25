<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-5">
            <h1 class="capitalize text-3xl font-medium">Let's find you a great job</h1>
            <form method="POST" action="">
                <input class="rounded-xl px-5 py-3 w-full max-w-xl bg-white/10" type="text" name="find_job"
                    id="find_job" placeholder="I'm looking for...">
            </form>
        </section>

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

            <div class="flex flex-wrap gap-3">
                <x-tag>Frontend</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>API</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>API</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>API</x-tag>
            </div>
        </section>

        <section class="space-y-5">
            <x-category-heading>Recent Jobs</x-category-heading>
            <x-expanded-job-cards />
            <x-expanded-job-cards />
            <x-expanded-job-cards />
            <x-expanded-job-cards />
        </section>
    </div>
</x-layout>