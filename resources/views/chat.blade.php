<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 300px;
        }
    </style>
</head>
<body>
<div class="text-center">
    <h1><strong>Chat Room</strong></h1>
    <p><strong>By: Christopher Jason</strong></p>
    <small>Press Enter to Send Messages</small>
</div>
<div class="container">
    <div class="row" id="app">
        <div class="col-md-4" style="display:inline-block">
            <h5>Online Chatters</h5>
            <ul class="list-group" style="display:inline">
                <userslist v-for="user in usersList" class="list-group-item-dark"
                >@{{ user.name }}
                </userslist>
            </ul>
        </div>
        <div class=" col-sm-8 mt-3">
            <li class="list-group-item list-group-item-dark">Start Chatting
                <span class="badge badge-pill badge-warning">@{{ numberOfUsers }}</span>
                <a href="" class="btn btn-danger btn-sm float-right"
                   @click='deleteSession'>Clear</a></li>
            <div class="badge badge-pill badge-info">@{{ typing }}</div>
            <ul class="list-group" v-chat-scroll>
                <message v-for="value,index in chat.message"
                         :key=index
                         :color=chat.color[index]
                         :user=chat.user[index]
                         :time=chat.time[index]>@{{ value }}
                </message>

            </ul>
            <input type="text" class="form-control" placeholder="Type your message.." v-model="message"
                   @keyup.enter='send'>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>