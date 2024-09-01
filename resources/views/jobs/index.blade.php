<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-5">
            <h1 class="capitalize text-3xl font-medium">Let's find you a great job</h1>
            <!-- <form method="POST" action="">
                <input class="rounded-full px-5 py-3 w-full max-w-xl bg-white/10" type="text" name="find_job"
                    id="find_job" placeholder="I'm looking for...">
            </form> -->

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="I'm looking for..." class="rounded-full" />
            </x-forms.form>
        </section>

        <section class="space-y-5">
            <x-category-heading>Featured Jobs</x-category-heading>
            <div class="grid grid-cols-3 gap-10">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section class="space-y-5">
            <x-category-heading>Tags</x-category-heading>

            <div class="flex flex-wrap gap-3">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section class="space-y-5">
            <x-category-heading>Recent Jobs</x-category-heading>
            @foreach ($jobs as $job)
                <x-expanded-job-card :job="$job" />
            @endforeach
        </section>
    </div>
</x-layout>