@extends('layouts.admin_layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                <div class="panel-heading">Пользователи. Вы <b><h1 class="text-center">{{Auth::user()->name }}</h1></b> </div>

                    <div class="panel-body">
                        <table>
                                    <thead>
                                        <th>Имя</th>
                                        <th>Почта</th>
                                        <th>Администратор</th>
                                        <th>Автор</th>
                                        <th>Юзер</th>
                                        <th></th>
                                    </thead>
                            <tbody>
                                    @if (isset($users))
                                    @foreach($users as $user)
                                <tr {{--{{Auth::user()->id == $user->id ? "class=alert-success" : ''}--}}}>
                                    <form action="/admin/users/changerule" method="post">
                                        <td>{{$user->name}}&nbsp;</td>
                                        <td>{{$user->email}}&nbsp;</td>
                                        <td><input type="checkbox" name="selection" {{$user->hasRole('Admin') ? 'checked' : 'нет'}}></td>
                                        <td><input type="checkbox" name="selection" {{$user->hasRole('author') ? 'checked' : 'нет'}}></td>
                                        <td><input type="checkbox" name="selection" {{$user->hasRole('user') ? 'checked' : 'нет'}}></td>
                                        {{ csrf_field() }}
                                        <td><button type="submit">Изменить роль</button></td>
                                    </form>
                                </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script></script>
@endsection
