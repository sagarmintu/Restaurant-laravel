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
            
            <div class="container">

                <h1>Customers Orders</h1>
                <form action="{{url('/search')}}" method="get">
                    @csrf
                    <input type="text" name="search" style="color: blue;">
                    <input type="submit" value="Search" class="btn btn-success">
                </form>

            <table class="table table-bordered" style="margin-top: 20px;">
                <tr align="center">
                    <th style="padding: 20px;color: white">Name</th>
                    <th style="padding: 20px;color: white">Phone</th>
                    <th style="padding: 20px;color: white">Address</th>
                    <th style="padding: 20px;color: white">Foodname</th>
                    <th style="padding: 20px;color: white">Price</th>
                    <th style="padding: 20px;color: white">Quantity</th>
                    <th style="padding: 20px;color: white">Total Price</th>
                </tr>

                @foreach($data as $data)
                <tr align="center" style="background-color: black;">
                    <td style="color: white;">{{$data->name}}</td>
                    <td style="color: white;">{{$data->phone}}</td>
                    <td style="color: white;">{{$data->address}}</td>
                    <td style="color: white;">{{$data->foodname}}</td>
                    <td style="color: white;">{{$data->price}}$</td>
                    <td style="color: white;">{{$data->quantity}}</td>
                    <td style="color: white;">{{$data->price * $data->quantity}}$</td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
            @include('admin.adminjs')
    </body>
</html>