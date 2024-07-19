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
            <div class="row mt-9">
                <div class="col-12">
                    <h1>User</h1>
                    <table class="table bg-black mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    @if ($data->usertype == '0')
                                        <td><a href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                                    @else
                                        <td><a>Not Allowed</a></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


    @include('admin.adminscript')
</body>

</html>
