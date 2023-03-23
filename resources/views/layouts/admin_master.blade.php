@include('layouts._partials.header')
    <main class="main">
        <div class="container-fluid">
            @yield('content')
            @if(request()->is('dashboard'))
                <h3>لیست نوبت ها</h3><br>
                @if(session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th style="text-align: center" scope="col">#</th>
                        <th style="text-align: center" scope="col">نام</th>
                        <th style="text-align: center" scope="col">موبایل</th>
                        <th style="text-align: center" scope="col">تاریخ</th>
                        <th style="text-align: center" scope="col">ساعت</th>
                        <th style="text-align: center" scope="col">مدریت</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    @php $nobatgiri = \App\Models\nobatGiri::all() @endphp

                    @foreach($nobatgiri as $key => $value)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td width="30%">{{ $value->username }}</td>
                            <td width="20%">{{ $value->mobile }}</td>
                            <td>{{ $value->nobat_id[0] }}</td>
                            <td>{{ $value->nobat_id[1] }}</td>
                            <td>
                                <form style="display: contents;" action="{{ route('nobatgiri.destroy',$value->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="مراجعه گردید؟">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
@include('layouts._partials.footer')
