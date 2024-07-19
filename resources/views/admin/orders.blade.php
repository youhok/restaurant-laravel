<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    <style>
         .inputBox {
            position: relative;
        }

        .inputBox input {
            padding: 15px 20px;
            width: 100%;
            outline: none;
            background: transparent;
            border-radius: 5px;
            color: #e8e8e8;
            border: 1px solid#e8e8e8;
            font-size: 1em;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            font-size: 0.7em;
            transform: translateX(14px) translateY(-7.5px);
            padding: 0 6px 1px 5px;
            border-radius: 2px;
            background: #212121;
            letter-spacing: 1px;
            border: 1px solid #e8e8e8;
            color: #e8e8e8;
        }

        /* input */
        .input {
            max-width: 190px;
            display: none;
        }

        .labelFile {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* width: 250px; */
            height: 190px;
            border: 2px dashed #ccc;
            align-items: center;
            text-align: center;
            padding: 5px;
            color: #f8f9fa;
            cursor: pointer;
        }

         /* button-style */
         .button {
            background-color: #ffffff00;
            color: #fff;
            width: 8.5em;
            height: 2.9em;
            border: #3654ff 0.2em solid;
            border-radius: 33px;
            text-align: right;
            transition: all 0.6s ease;
        }

        .button:hover {
            background-color: #3654ff;
            cursor: pointer;
            border-radius: 5px;
        }

        .button svg {
            width: 1.6em;
            margin: -0.2em 0.8em 1em;
            position: absolute;
            display: flex;
            transition: all 0.6s ease;
        }

        .button:hover svg {
            transform: translateX(5px);
        }

        .text {
            margin: 0 1.5em
        }

    </style>
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')
        
        <div class="container mt-10">
            <div class="row">
                <div class="col-12">
                    <form action="{{url('/search')}}" method="get">
                    
                        <div class="d-flex justify-between">
                        <div>
                         <h1>Search Order</h1>
                        </div>
                            <div class="d-flex gap-9">
                            <div class="inputBox">
                                <input required="" type="text" name="search">
                                <span>Search</span>
                            </div>
                            <button class="button" type="submit">
                                <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round"
                                        stroke-linecap="round"></path>
                                </svg>
                                <div class="text">
                                    Search 
                                </div>
                            </button>
                            </div>
                        </div>   
                    </form>
                    <table class="table bg-black mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Foodname</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <th scope="row">
                                        {{ $data->name }}
                                    </th>
                                    <td>
                                        {{ $data->phone }}
                                    </td>
                                    <td>
                                        {{ $data->address }}
                                    </td>
                                    <td>
                                        {{ $data->foodname }}
                                    </td>
                                    <td>
                                        {{ $data->price }}$
                                    </td>
                                    <td>
                                        {{ $data->quantity }}
                                    </td>
                                    <td>
                                        {{ $data->price * $data->quantity }}$
                                    </td>
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
