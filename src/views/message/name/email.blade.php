@component('mail::message')
# Introduction

there is new query from email:{{$email}} and name:{{$name}}
<br>
Message:
<br>
{{$message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
