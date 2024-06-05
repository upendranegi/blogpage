@include('include.Header')

<main id="main py-4">
    <div class="container py-3 mt-5">

        @foreach ($blogs as $bdata => $bitems)
            <center>
                <h1>
                    {{ $bitems->Tittle }}
                </h1>
            </center>

            <p class="px-4">
                {{ $bitems->Description }}
            </p>
        @endforeach



        @isset($userdat)
        <div class=" border rounded border-info py-3 my-4">

            <center><h3>
                Comment</h3></center >
            @foreach($userdat as $user=>$usdata)
            <div class=" p-2" >

         
<p>
 <b> Name </b> : {{$usdata->Name}}
</p>

<p>
    <b>
        {{$usdata->Comment}}
    </b>
</p>

</div>

            @endforeach
        </div>
        @endisset




        <form class="py-4 px-3"  action="{{route('user')}}" method="POST" style="    background-color: rgb(123 164 213) !important" >
      <center>  <h4 class="my-3">Share your Thoughts</h4>
      </center>

@csrf
      @foreach($blogs as $bdata => $bitems)
      <input type="text" class="form-control d-none" value="{{$bitems->id}}" name='id' id="exampleInputEmail1" aria-describedby="emailHelp" required>
      @endforeach
<div class="d-flex flex-wrap">
            <div class="mb-3 col-md-6 px-2">
              <label for="exampleInputEmail1" class="form-label"><b> Name </b></label>
              <input type="text" class="form-control" name="Name"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3 col-md-6 px-2">
              <label for="exampleInputPassword1" class="form-label"> <b>Email </b></label>
              <input type="email" class="form-control" name="Email" id="exampleInputPassword1" required>
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputPassword1" class="form-label"><b>comment </b></label>
                <input type="text" class="form-control" name="Comment" id="exampleInputPassword1" required>
              </div>



        </div>
       <center>     <button type="submit" class="btn btn-primary">Submit</button> </center>
          </form>


    </div>


</main>




@include('include.Fotter')
