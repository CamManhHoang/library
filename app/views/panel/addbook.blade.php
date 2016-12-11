@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Thêm Sách</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Tiêu Đề Sách</label>
                    <div class="controls">
                        <input type="text" data-form-field="title" placeholder="Điền tiêu đề sách ở đây..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Tên Tác Giả</label>
                    <div class="controls">
                        <input type="text" data-form-field="author" placeholder="Điền tên tác giả của sách..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Mô tả về sách</label>
                    <div class="controls">
                        <textarea class="span8" data-form-field="description" rows="5" placeholder="Điền vài dòng mô tả về sách..."></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Thể Loại</label>
                    <div class="controls">
                        <select tabindex="1" data-form-field="category" data-placeholder="Select category.." class="span8">
                            @foreach($categories_list as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Tổng Số Ấn Bản/Bản Sao</label>
                    <div class="controls">
                        <input type="number" data-form-field="number" placeholder="Tổng số ấn bản của cuốn sách?" class="span8">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbooks">Thêm Sách</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ Config::get('view.custom.js') }}/script.addbook.js"></script>

@stop