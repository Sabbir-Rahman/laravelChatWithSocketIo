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
        <div class="col-md-9 chat-section">
            <div class="chat_header">
                <div class="chat-header">
                    <div class="chat-image">

                    </div>

                    <div class="chat-name font-weight-bold">
                        {{ $user->name }}
                        <i class="fa fa-circle user-status-head" title="away"
                            id="userStatusHead{{$friendInfo->id}}"></i>
                    </div>
                </div>
            </div>

            <div class="chat-body" id="chatBody">
                <div class="message-listing" id="messageWrapper">
                    <div class="row message align-items-center mb-2">
                        <div class="col-md-12 user-info">
                            <div class="chat-image">
                                {!! makeImageFromName('Md sabbir') !!}
                            </div>

                            <div class="chat-name font-weight-bold">
                                Md Sabbir
                                <span class="small time text-gray-500 " title="2020-05-06 10:30 PM">
                                    10:30 PM
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 message-content">
                            <div class="message-text">
                                Message Here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
