@extends('layout')
@section('content')
    <div class="container" style="padding-top: 50px">

            <table class="table">
                <thead class="thead">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">نام</th>
                    <th scope="col">نام خانوادگی</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">موبایل</th>
                    <th scope="col">ایمیل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key=>$user)

                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->national_number}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>


                    </tr>
                @endforeach

                </tbody>
            </table>

                <div>
                    <a class="btn btn-primary" href="/user/create" style="margin: 20px 0 50px 0; width: 20%"> ثبت کاربر جدید</a>
                </div>


    </div>
@endsection
