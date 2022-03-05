

<div>

  <div>
      <a href="{{route('postic.create')}}">Add post</a>


  </div>

    @foreach($postic as $post)

                <div>
                        <a href="{{route('postic.show', $post->id)}}"> {{$post->id}}.{{$post->infa}}</a>
                </div>

    @endforeach

</div>



