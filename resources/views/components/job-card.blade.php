@props(['job'])

<x-panel>
    <section class="flex items-start">
        <h3 class="text-sm text-gray-400"> {{ $job->employer->name }} </h3>
    </section>

    <section class="text-center space-y-2">
        <h1 class="font-bold text-lg max-w-[200px] mx-auto group-hover:text-blue-700 transition-colors duration-300 capitalize
            ">
            {{ $job->title }}
        </h1>
        <p class="text-xs"> ${{ $job->salary }} </p>
    </section>

    <section class="flex justify-between mt-auto">
        <div class="flex items-center self-end gap-x-2">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>
        <div class="self-end mt-5">
            <x-employer-logo :size="42" />
        </div>
    </section>
</x-panel>