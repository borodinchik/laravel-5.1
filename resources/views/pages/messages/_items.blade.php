<div class="massages">

    @if (! $messages->isEmpty() )
        @foreach($messages as $message )
    <h3 class="panel-title">
        <span>
            #{!! $message->id  !!}
            @unless(empty($message->email))
                <a href="mailto:{{ $message->email }}">{{ $message->name }}</a>
                @else
                {{ $message->name }}
                @endunless
        </span>

        <span class="pull-right label label-info">
            {{--17:15:00/03.07.2016--}}
            {{ $message->created_at }}
        </span>

    </h3>
</div>
<div class="panel-body">
    Lorem ipsum dolor sit amet,
    consectetur adipisicing elit.
    Corporis dignissimos minus nam
    recusandae sint! Consequatur eveniet
    molestias nobis officiis quis.
    {{ $message->message }}
    <hr />
    <div class="pull-right">
        <a class="btn btn-info" href="#">
            <i class="glyphicon glyphicon-pencil"></i>
        </a>
        <button class="btn btn-danger">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </div>
</div>

@endforeach
  <div class="text-center">
      {!! $messages->render() !!}
  </div>

@endif
</div>