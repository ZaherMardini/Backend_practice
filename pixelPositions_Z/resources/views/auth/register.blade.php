<x-layout>
  <x-page-heading>Register</x-page-heading>
  <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input label="Your name" name="name"/>
    <x-forms.input label="Your email" name="email" name="email"/>
    <x-forms.input label="Your password" name="password"/>
    <x-forms.input label="Confirm password" name="password_confirmation"/>
    <x-forms.divider/>
    <x-forms.input label="Employer name" name="empname"/>
    <x-forms.input label="Employer logo" name="emplogo" type="file"/>
    <x-forms.button>New User</x-forms.button>
  </x-forms.form>
</x-layout>