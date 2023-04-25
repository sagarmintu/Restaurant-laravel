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
                <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Name</label>
                        <input style="color: blue;" type="text" name="name" placeholder="Enter Name" required>
                    </div>
                    <div>
                        <label>Speciality</label>
                        <input style="color: blue;" type="text" name="speciality" placeholder="Enter Speciality" required>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <input type="submit" value="Save">
                    </div>
                </form>

                <div>
                    <table bgcolor="black" style="margin-top: 10px;">
                        <tr>
                            <th style="padding: 20px;">Name</th>
                            <th style="padding: 20px;">Speciality</th>
                            <th style="padding: 20px;">Image</th>
                            <th style="padding: 20px;">Update</th>
                            <th style="padding: 20px;">Delete</th>
                        </tr>

                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->speciality}}</td>
                            <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
                            <td><a href="{{url('/editchef', $data -> id)}}">Edit</a></td>
                            <td><a href="{{url('/deletechef', $data -> id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>


            <div>
        </div>
            @include('admin.adminjs')
    </body>
</html>