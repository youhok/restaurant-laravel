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
    </style>
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')
        <div class="container">


            <div class="row mt-9">



                <div class="col-12">

                    <form action="{{ url('uploadchef') }}" method="Post" enctype="multipart/form-data">

                        @csrf

                        <div>

                            <div class="inputBox">
                                <input required="" type="text" name="name" required="" placeholder="Name">
                                <span>Name</span>
                            </div>

                        </div>

                        <div class="mt-4">
                            <div class="inputBox">
                                <input required="" type="text" name="speciality" required=""
                                    placeholder="speciality">
                                <span>Speciality</span>
                            </div>

                        </div>

                        <div class="mt-4">
                            <label for="file" class="labelFile"><span><svg xml:space="preserve"
                                        viewBox="0 0 184.69 184.69" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1" width="60px"
                                        height="60px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M149.968,50.186c-8.017-14.308-23.796-22.515-40.717-19.813
        C102.609,16.43,88.713,7.576,73.087,7.576c-22.117,0-40.112,17.994-40.112,40.115c0,0.913,0.036,1.854,0.118,2.834
        C14.004,54.875,0,72.11,0,91.959c0,23.456,19.082,42.535,42.538,42.535h33.623v-7.025H42.538
        c-19.583,0-35.509-15.929-35.509-35.509c0-17.526,13.084-32.621,30.442-35.105c0.931-0.132,1.768-0.633,2.326-1.392
        c0.555-0.755,0.795-1.704,0.644-2.63c-0.297-1.904-0.447-3.582-0.447-5.139c0-18.249,14.852-33.094,33.094-33.094
        c13.703,0,25.789,8.26,30.803,21.04c0.63,1.621,2.351,2.534,4.058,2.14c15.425-3.568,29.919,3.883,36.604,17.168
        c0.508,1.027,1.503,1.736,2.641,1.897c17.368,2.473,30.481,17.569,30.481,35.112c0,19.58-15.937,35.509-35.52,35.509H97.391
        v7.025h44.761c23.459,0,42.538-19.079,42.538-42.535C184.69,71.545,169.884,53.901,149.968,50.186z"
                                                        style="fill:#FFFFFF;"></path>
                                                </g>
                                                <g>
                                                    <path d="M108.586,90.201c1.406-1.403,1.406-3.672,0-5.075L88.541,65.078
        c-0.701-0.698-1.614-1.045-2.534-1.045l-0.064,0.011c-0.018,0-0.036-0.011-0.054-0.011c-0.931,0-1.85,0.361-2.534,1.045
        L63.31,85.127c-1.403,1.403-1.403,3.672,0,5.075c1.403,1.406,3.672,1.406,5.075,0L82.296,76.29v97.227
        c0,1.99,1.603,3.597,3.593,3.597c1.979,0,3.59-1.607,3.59-3.597V76.165l14.033,14.036
        C104.91,91.608,107.183,91.608,108.586,90.201z" style="fill:#FFFFFF;"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p>drag and drop your file here or click to select a file!</p>
                            </label>
                            <input class="input" name="image" id="file" type="file" required />

                        </div>

                        <div class="d-flex justify-center mt-3">
                            <button class="button" type="submit">
                                <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round"
                                        stroke-linecap="round"></path>
                                </svg>
                                <div class="text">
                                    Save
                                </div>
                            </button>
                        </div>

                    </form>
                </div>


                <div class="col-12 mt-7">

                    <h4>Data Chef</h4>
                    <table class="table bg-black">
                        <thead>
                            <tr>
                                <th scope="col">Chef Name</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action2</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <th scope="row">{{ $data->name }}</th>
                                    <td>{{ $data->speciality }}</td>
                                    <td><img src="/chefimage/{{ $data->image }}"></td>
                                    <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                                    <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>

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
