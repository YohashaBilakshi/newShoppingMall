
<form role="form" method="POST" action="{{ url('add_ticket') }}" >
    {{ csrf_field() }}
                                                
    

        <div class="row">

            <div class="col form-group">
                <label >Ticket Name</label>
                <input  required name="name" type="text" class="form-control" placeholder="title">
            </div>

            <div class="col form-group">
                <label >Ticket email</label>
                <input  required name="email" type="text" class="form-control" placeholder="email">
            </div>

           

        </div>

    <button  type="submit" class="btn bg-primary-purple text-white mt-4 mb-4 px-4" style="border: none; border-radius: 8px">Save</button>

</form>

<button onclick="window.location.href='{{ route('check.test')}}'">Go to Route</button>



