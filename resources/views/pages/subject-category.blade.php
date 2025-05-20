@extends('layouts.app')
@section('title', 'Subject-category')
@section('content')
    <style>
        .bg-home {
            background: url('{{ asset('home/Bg.png') }}') no-repeat center center;
            background-size: cover;
            min-height: 85.2vh;
            padding: 2rem 2rem 2rem 2rem;
        }

        .subject-card {
            border-radius: 20px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .subject-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }


        .subject-image {
            border-radius: 20px;
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
    </style>

    <body>
        <div class="bg-home d-flex align-items-start justify-content-center">
            <div class="container py-5">
                <!-- หัวข้อหลัก -->
                <h1 class="text-center fw-bold mb-5">หมวดวิชาที่สนใจ</h1>

                <!-- ตารางหมวดหมู่ -->
                {{-- <div class="row g-4 justify-content-center justify-content-xl-start">

                @foreach ($subjects as $subject)
                <a href="{{route('CoursePage',$subject->id)}}" class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 text-decoration-none text-dark">
                    <div class="subject-card text-center">
                        <h2 class="fw-bold mb-2">{{$subject->name}}</h2>
                    </div>
                </a>
                @endforeach

            </div> --}}
                <style>
                    .table td:hover {
                        background-color: #53b2e6;
                        color: white;
                    }

                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    table td,
                    table th {
                        border: none;
                        padding: 12px;
                    }

                    table tr:nth-child(odd) {
                        background-color: #7eccec;
                    }

                    table tr:nth-child(even) {
                        background-color: #ffffff;
                    }

                    a {
                        text-decoration: none;
                        color: #333;
                        display: block;
                        width: 100%;
                    }

                    a:hover {
                        color: white;
                    }
                </style>

                <table class="table">
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>
                                <a href="{{route('CoursePage',$subject->id)}}">
                                    <i class="bi bi-folder-fill"></i> {{$subject->name}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>


            </div>
        </div>

    </body>
@endsection
