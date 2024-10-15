<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
    @csrf
    <x-forms.input label="Name" name="name" />
    <x-forms.input label="Password" name="password" type="password" />

    @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <x-forms.button>Log In</x-forms.button>
</x-forms.form>


</x-layout>