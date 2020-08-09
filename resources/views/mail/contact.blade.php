@component('mail::message')
# New Contact from {{ $contact->name }}

You have received a new message from {{ $contact->name }} via the contact form.

## Details
__Name:__ {{ $contact->name }} <br>
__Email:__ [{{ $contact->email }}](mailto:{{ $contact->email }}) <br>
__Message:__ <br>
{{ $contact->message }}

@component('mail::button', ['url' => 'mailto:' . $contact->email])
Send Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
