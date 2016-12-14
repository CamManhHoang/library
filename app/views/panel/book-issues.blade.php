@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Sách Theo Ấn Bản</h3>
        </div>
        <div class="module-body">

            {{ HTML::ul($errors->all()) }}

            @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Mã Ấn Bản</th>
                        <th>Mã Sách</th>
                        <th>Tiêu Đề</th>
                        <th>Tác Giả</th>
                        <th>Có Sẵn</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book->issues as $issue)
                        <tr>
                            <td>{{ $issue->issue_id }}</td>
                            <td>{{ $issue->book_id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $issue->available_status? 'Yes' : 'No'}}</td>
                            <td>
                                @if (Auth::check() && Auth::user()->is_student)
                                    @if ($issue->available_status == 1)
                                        {{ Form::open(['method' => 'POST', 'id' => 'order-button', 'route'=>['order-book', $issue->issue_id]]) }}
                                        {{ Form::hidden('book_issue_id', $issue->issue_id) }}
                                        {{ Form::button('<i class="menu-icon icon-signout"></i> ' . 'Đặt Mượn', ['type' => 'submit', 'class' => 'btn btn-primary btn-md', 'onclick' => "return confirm('Bạn Muốn Mượn Cuốn Này?')"]) }}
                                        {{ Form::close() }}
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
