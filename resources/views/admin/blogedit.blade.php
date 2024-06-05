@include('admin.include.header')
<!--  Header End -->
<div class="container-fluid">
  <div class="container-fluid">
      <div class="card">
          <div class="card-body">

              <div class="card">
                  <div class="card-body">
                      <center>
                          <h1 class="my-3">
                              <b> Blog Edit </b>
                          </h1>
                      </center>
                      <form class="d-flex flex-wrap py-2" action="{{ route('updateblog') }}" method="post" enctype="multipart/form-data">
                          <div class="col-12 d-flex flex-wrap my-3">
                         
                              @csrf
                         
                          </div>
                          @foreach($blogdata as $Formdat=>$blogdata)


                          <div class="my-3 col-md-6 px-2">
                            <label for="exampleInputEmail1" class="form-label">Blog Title</label>
                            <input type="text" name="id" value="{{$blogdata->id}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" style="    border: 1px solid black;">

                        </div>

                          <div class="my-3 col-md-6 px-2">
                              <label for="exampleInputEmail1" class="form-label">Blog Title</label>
                              <input type="text" name="Tittle" value="{{$blogdata->Tittle}}" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" style="    border: 1px solid black;">

                          </div>
                         
                       
                          <div class="my-3 col-12 px-2">
                              <label for="exampleInputPassword1"  class="form-label">Blog Description</label>
                              <textarea type="text" name="Description" class="form-control" id="exampleInputPassword1" style="    border: 1px solid black;">{{$blogdata->Description}}</textarea>
                          </div>



@endforeach

                          <div class="col-12">
                              <center>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </center>

                          </div>

                      </form>
                  </div>
              </div>
             
          </div>
      </div>
  </div>
</div>
</div>
</div>





@include('admin.include.footer')
