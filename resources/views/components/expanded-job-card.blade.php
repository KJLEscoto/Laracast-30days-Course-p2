@props(['job'])

<x-panel>

    <div class="flex gap-x-4">
        <div>
            <x-employer-logo :employer="$job->employer" />
        </div>

        <div class="w-full flex-1 flex flex-col justify-between">
            <div>
                <section class="flex justify-between items-center">
                    <h3 class="text-sm text-gray-400">{{ $job->employer->name }}</h3>
                    <div class="flex gap-x-2">
                        <x-ghost-tag>Remote</x-ghost-tag>
                        <x-ghost-tag>22h</x-ghost-tag>
                    </div>
                </section>

                <section>
                    <h1 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300 capitalize">
                        <a href="{{ $job->url }}" class="hover:underline">
                            {{ $job->title }}
                        </a>
                    </h1>
                </section>
            </div>

            <section class="flex justify-between items-center">
                <p class="text-xs text-gray-200">${{ $job->salary }}</p>
                <div class="flex gap-x-2">
                    @foreach ($job->tags as $tag)
                        <x-tag :tag="$tag" />
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    </a>
</x-panel>