<div class="alert-success"><center>Chi Tiết Sách</center></div>
<dl class="dl-horizontal">
    <dt>Tên Sách</dt>
    <dd><%= obj.book_name %></dd>
    <dt>Tác Giả</dt>
    <dd><%= obj.author %></dd>
    <dt>Thể Loại</dt>
    <dd><%= obj.category %></dd>
    <dt>Có Sẵn</dt>
    <dd><%= obj.available_status %></dd>
    <dt>Ngày Thêm Vào</dt>
    <dd><%= obj.added_at_timestamp %></dd>
</dl>

<%
    if(obj.hasOwnProperty('student')){
%>
<div class="alert-success"><center>Chi Tiết Sinh Viên Mượn Sách</center></div>
<dl class="dl-horizontal">
    <dt>Mã Sinh Viên</dt>
    <dd><%= obj.student.student_id %></dd>
    <dt>Tên Sinh viên</dt>
    <dd><%= obj.student.first_name %> <%= obj.student.last_name %></dd>
    {{-- <dt>Student Category</dt>
    <dd><%= obj.student.category %></dd>
    <dt>Roll Number</dt>
    <dd><%= obj.student.roll_num %></dd> --}}
</dl>
<%
    }
%>