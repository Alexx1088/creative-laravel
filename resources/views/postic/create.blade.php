

<div>
        <form action="{{route('postic.store')}}" method="post" >

                @csrf
               {{-- @method('get')--}}

                <div class="form-group">
                        <label for="infa">Infa</label>
                        <input type="text" name="infa" class="form-control " id="infa" placeholder="infa">
                </div>

                <div class="form-group">
                        <label for="face">Face</label>
                        <input type="text" name="face" class="form-control" id="face" placeholder="face">
                </div>

                <div class="form-group">
                        <label for="count">count</label>
                        <input type="number" name="count" class="form-control" id="count" placeholder="count">
                </div>
                <div class="form-group">
                        <label for="work">work</label>
                        <textarea class="form-control" name="work" id="work" placeholder="work"></textarea>
                                        </div>

                <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>

</div>



