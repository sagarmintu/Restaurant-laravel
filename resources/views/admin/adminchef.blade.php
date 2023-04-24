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
        </div>
            @include('admin.adminjs')
    </body>
</html>