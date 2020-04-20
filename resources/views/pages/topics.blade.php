<html lang="en">
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Events</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <div class="row">
            <h1>Events:</h1>
    </div>
        <div class="row">
        @forelse ($topics as $topic)
            <div class="col-sm-3 border-primary">
            <div class="card-body w-120 mb-3" style="height:15em">
                    <h5 class="card-title">The topic name is: {{$topic->name}}</h5>
                @forelse($topic->events as $event)
                    <p class="card-text"><b>Message:</b> {{$event->message}}</p>
                @empty
                    <p class="card-text"><b>Message:</b> This topic has no message.</p>
                @endforelse
                </div>
                <div class="card-footer">
                 <small class="text-muted"><b>Url:</b>{{$topic->url}}</small>
            </div>
            </div>
            @empty
            <div class="card-body w-120 mb-3" style="height:15em">
            <img src="https://media0.giphy.com/media/13xHqoOQOdFu5a/giphy.gif?cid=ecf05e476642eba850cbf7674260c472fc387ea2c21fa498&rid=giphy.gif"/>
            </br>
            <h1>No topics found here.<h1>
            </div>
            @endforelse
        </div>
    </div>


    
    </body>
</html>