@php
    $users = ['adam', 'bob', 'charlie', 'dave']
@endphp

FOREACH
@foreach ($users as $user)
    <p> Hi my name is {{$user}}. I am a user of this system.</p>
@endforeach

FOR
@for($i=10; $i < 15; $i++)
    <p> This is number {{$i}}</p>
@endfor

WHILE
@php
    $count = 0;
@endphp

@while ($count < 6)
    <p> This is number {{$count}}</p>
    @php
        $count++;
    @endphp
@endwhile

IF, ELSEIF and ELSE
@php
    $user = 'Dave';
@endphp

@if ($user = 'User')
    <p> Sup user</p>
@elseif ($user = 'Admin')
    <p>Hey Admin</p>
@else
    <p> No user found</p>
@endif

SWITCH
@switch($user)
    @case('User')
        <p>Hey Admin</p>
    @break
    
    @case('User')
        <p>Hey Admin</p>
    @break
    
    @default
        <p>No user</p>

@endswitch
