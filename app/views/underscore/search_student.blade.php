<div class="alert-success"><center>Chi Tiết Sinh Viên</center></div>
<dl class="dl-horizontal">
<%
    var flag = false;
    if(obj.hasOwnProperty('approved')){
        flag = true;
%>
    <dt></dt>
    <dd><strong><p class="text-error">Not Approved</p></strong></dd>
<%
    }
%>
<%
    if(obj.hasOwnProperty('rejected')){
        flag = true;
%>
    <dt></dt>
    <dd><strong><p class="text-error">Rejected</p></strong></dd>
<%
    }
%>
    <dt>Mã Sinh Viên</dt>
    <dd><%= obj.student_id %></dd>
    <dt>Tên Sinh Viên</dt>
    <dd><%= obj.first_name %> <%= obj.last_name %></dd>
    {{-- <dt>Student Category</dt>
    <dd><%= obj.category %></dd> --}}
    <dt>Email</dt>
    <dd><%= obj.email_id %></dd>
    {{-- <dt>Roll Number</dt>
    <dd><%= obj.roll_num %>/<%= obj.branch %>/<%= obj.year %></dd> --}}

    <%
        if(!flag){
    %>
        <dt>Số Sách Đã Mượn</dt>
        <dd><%= obj.books_issued %></dd>
    <%
        }
    %>
</dl>

<%
    if(!flag){
        if(obj.issued_books.length > 0){
%>

<div class="alert-success"><center>Chi Tiết Sách Đã Mượn</center></div>

<%
            for(var book in obj.issued_books){
%>
<dl class="dl-horizontal">
    <dt>Mã Ấn Bản</dt>
    <dd><%= obj.issued_books[book].book_issue_id %></dd>
    <dt>Tên Sách</dt>
    <dd><%= obj.issued_books[book].name %></dd>
    <dt>Mượn Vào Lúc</dt>
    <dd><%= obj.issued_books[book].issued_at %></dd>
</dl>
<%
            }
        }
    }
%>