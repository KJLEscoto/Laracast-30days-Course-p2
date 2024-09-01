<x-layout>
    <div class="space-y-10">
        <x-heading>Register</x-heading>

        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.input label="Name" name="name" />
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

            <x-forms.divider />

            <x-forms.input label="Employer Name" name="employer" />
            <x-forms.input label="Employer Logo" name="logo" type="file" class="cursor-pointer" />

            <x-forms.button>Create Account</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>