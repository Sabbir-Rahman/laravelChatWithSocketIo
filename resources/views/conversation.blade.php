@extends('layouts.app')

@section('content')
    <div class="row chat-row">
        <div class="col-md-3">
            <div class="users">
                <h5>Users</h5>

                <ul class="list-group list-chat-item">
                    @if($users->count())
                        @foreach($users as $user)
                            <li class="chat-user-list @if($user->id == $friendInfo->id) active @endif">
                                <a href="{{route('message.conversation', $user->id)}}">
                                    <div class="chat-image">

                                        {!! makeImageFromName($user->name) !!}
                                    </div>
                                    <div class="chat-name font-weight-bold">
                                        {{$user->name}}
                                    </div>

                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <h1>
                Message section
            </h1>
            <p class="lead">
                Chat Body Here
            </p>
        </div>
    </div>
@endsection
