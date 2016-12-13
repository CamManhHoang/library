@extends('layout.index')

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a class="btn-box span12"><b>Hệ Thống Quản Lý Thông Tin Thư Viện UET</b></a>
        </div>

        <div class="btn-box-row row-fluid">
            <a class="btn-box big span4 homepage-form-box" id="findbookbox">
                <i class="icon-list"></i>
                <b>Tìm Sách</b>
            </a>

            <a class="btn-box big span4 homepage-form-box" id="findissuebox">
                <i class="icon-book"></i>
                <b>Tìm Ấn Bản</b>
            </a>

            <a class="btn-box big span4 homepage-form-box" id="findstudentbox">
                <i class="icon-user"></i>
                <b>Tìm Sinh Viên</b>
            </a>
        </div>

        <div class="content">
            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findbookform">
                        <div class="control-group">
                            <label class="control-label">Tên hoặc tác giả<br>của sách</label>
                            <div class="controls">
                                <div class="span9">
                                    <textarea class="span12" rows="2"></textarea>
                                </div>
                                <div class="span3">
                                    <a class="btn homepage-form-submit">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-striped table-bordered table-condensed" style="display: none;">
                        <thead>
                            <tr>
                                <th>ID Sách</th>
                                <th>Tên Sách</th>
                                <th>Tác Giả</th>
                                <th>Mô Tả</th>
                                <th>Thể Loại</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody id="book-results"></tbody>
                    </table>
                </div>
            </div>
            
            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findissueform">
                        <div class="control-group">
                            <label class="control-label">Điền Mã Ấn Bản</label>
                            <div class="controls">
                                <input type="number" placeholder="" class="span9">
                                <a class="btn homepage-form-submit">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="module-body" id="module-body-results"></div>
            </div>

            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findstudentform">
                        <div class="control-group">
                            <label class="control-label">Điền Mã Sinh Viên</label>
                            <div class="controls">
                                <input type="text" placeholder="" class="span9">
                                <a class="btn homepage-form-submit">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="module-body" id="module-body-results"></div>
            </div>
        </div>
    </div>
</div>
@stop


@section('custom_bottom_script')
<script type="text/javascript">
    var branches_list = {{ json_encode($branch_list) }},
        student_categories_list = {{ json_encode($student_categories_list) }};
    var categories_list = {{ json_encode($categories_list) }}
</script>

<script type="text/javascript" src="{{ Config::get('view.custom.js') }}/script.mainpage.js"></script>


<script type="text/template" id="search_book">
    @include('underscore.search_book')
</script>
<script type="text/template" id="search_issue">
    @include('underscore.search_issue')
</script>
<script type="text/template" id="search_student">
    @include('underscore.search_student')
</script>
<script type="text/template" id="approvalstudents_show">
    @include('underscore.approvalstudents_show')
</script>
@stop