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
            
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Mã Ấn Bản</th>
                        <th>Mã Sách</th>
                        <th>Tiêu Đề</th>
                        <th>Tác Giả</th>
                        <th>Có Sẵn</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop


@stop