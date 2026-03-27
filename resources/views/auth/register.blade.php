<x-layout>
    <x-page-heading>register</x-page-heading>
    <x-forms.form method="post" action="/register" enctype="multipart/form-data">
        <x-forms.input label="name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="password" name="password" type="password"/>
        <x-forms.input label="password_confirmation" name="password_confirmation" type="password"/>
        <x-forms.divider/>
        <x-forms.input label="Employer Name" name="employer"/>
        <x-forms.input label="Employer Logo" name="logo" type="file"/>
        <x-forms.button>Create Account</x-forms.button>


    </x-forms.form>
</x-layout>

