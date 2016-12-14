@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Sách Đã Mượn Của {{ $student->first_name }} {{ $student->last_name }}</h3>
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
                        <th>Tiêu Đề</th>
                        <th>Tác Giả</th>
                        <th>Mượn Vào Lúc</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student->issued_books as $issue)
                        <tr>
                            <td>{{ $issue->book_issue_id }}</td>
                            <td>{{ $issue->name }}</td>
                            <td>{{ $issue->author }}</td>
                            <td>{{ $issue->issued_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
