@include('admin.include.header')



      <!--  Header End -->
      <div class="container-fluid">
      .<table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
          <tr>
            <th>S.No.</th>
            <th>Blog Title</th>
            <th>Full Blog</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            <?php $i=0;  ?>
            @foreach($data as $pdata=>$item)

            <tr>
              <td scope="row">{{++$i}}</td>
              <td>{{$item->Tittle}}</td>
              <td>{{$item->Description}}</td>
              <td><a
             href="/Blogedit/{{$item->id}}"
                class="btn btn-primary"
            
              >
                Edit
              </a>
              </td>
              <td><a
                href="/blogDelete/{{$item->id}}"
                class="btn btn-danger"
            
              >
                Delete
              </a></td>
            </tr>
       
            @endforeach
            <tr>
              <td scope="row"></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
      </table>
      
        @include('admin.include.footer')