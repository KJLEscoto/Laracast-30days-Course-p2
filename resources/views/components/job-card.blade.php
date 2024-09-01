@props(['job'])

<x-panel>
    <div class="flex flex-col h-full gap-3 justify-between">
        <div>
            <section class="flex items-start mb-3">
                <h3 class="text-sm text-gray-400"> {{ $job->employer->name }} </h3>
            </section>

            <section class="text-center space-y-2">
                <h1
                    class="font-bold text-lg max-w-[200px] mx-auto group-hover:text-blue-700 transition-colors duration-300 capitalize">

                    <a href="{{ $job->url }}" class="hover:underline">
                        {{ $job->title }}
                    </a>
                </h1>
                <p class="text-xs"> ${{ $job->salary }} </p>
            </section>
        </div>
        <section class="flex justify-between items-end">
            <div class="flex items-center self-end gap-x-2">
                @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
                @endforeach
            </div>
            <div class="self-end">
                <x-employer-logo :employer="$job->employer" :size="42" />
            </div>
        </section>
    </div>
</x-panel>