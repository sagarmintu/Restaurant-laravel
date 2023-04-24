<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')

    </head>
    <body>
        <div class="container-scroller">
            @include('admin.navbar')
            <div style="position: relative; top: 60px; right: -150px;">
                <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title</label>
                        <input style="color: blue;" type="text" name="title" placeholder="Enter Title" required>
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color: blue;" type="number" name="price" placeholder="Enter Price" required>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <label>Description</label>
                        <input style="color: blue;" type="text" name="description" placeholder="Enter Description" required>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Save">
                    </div>
                </form>

                <div>
                    <table bgcolor="black" style="margin-top: 10px;">
                        <tr>
                            <th style="padding: 20px;">Food Name</th>
                            <th style="padding: 20px;">Food Price</th>
                            <th style="padding: 20px;">Food Description</th>
                            <th style="padding: 20px;">Food Image</th>
                            <th style="padding: 20px;">Action</th>
                        </tr>

                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td><img height="100" width="100" src="/foodimage/{{$data->image}}"></td>
                            <td><a href="{{url('/deletefoodmenu', $data -> id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
            @include('admin.adminjs')
    </body>
  </body>
</html>