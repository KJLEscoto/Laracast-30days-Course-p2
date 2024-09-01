<x-layout>
    <div class="space-y-10">
        <x-heading>Login</x-heading>

        <x-forms.form method="POST" action="/login">
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />

            <x-forms.button>Log In</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>