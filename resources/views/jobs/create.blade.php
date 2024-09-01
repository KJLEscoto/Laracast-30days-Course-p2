<x-layout>
    <div class="space-y-10">
        <x-heading>New Job</x-heading>

        <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="Title" name="title" placeholder="Web Developer" />
            <x-forms.input label="Salary" name="salary" type="number" />
            <x-forms.input label="Location" name="location" placeholder="Davao City, Philippines" />

            <x-forms.select label="Schedule" name="schedule">
                <option class="text-black">Part Time</option>
                <option class="text-black">Full Time</option>
            </x-forms.select>

            <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />

            <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

            <x-forms.divider />

            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracast, video, education" />

            <x-forms.button>Publish</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>