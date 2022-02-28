
<div>

        <div>
                {{$post->id}}.{{$post->infa}}
                                                     </div>
        <div>
                {{$post->face}}
        </div>

    <div>
        <a href="{{route('postic.index')}}"> Back  </a>


    </div>

    <div>
        <form action="{{route('postic.delete')}}" method="post">

            @csrf
            @method( 'destroy')
            <input type="submit" value="delete">


        </form>


    </div>




</div>
