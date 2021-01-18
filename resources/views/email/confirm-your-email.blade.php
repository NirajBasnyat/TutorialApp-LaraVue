@component('mail::message')
    # One more step before you Join Our system

    We need you to confirm your email !

    @component('mail::button', ['url' => route('confirm_email') . '?token=' . $user->confirm_token])
        Confirm
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
