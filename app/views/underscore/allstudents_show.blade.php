<%
for(var i=0; i<branches_list.length; i++){
	if(obj.branch == branches_list[i].id){
		var student_branch = branches_list[i].branch;
		break;
	}
}
for(var i=0; i<categories_list.length; i++){
	if(obj.category == categories_list[i].cat_id){
		var student_category = categories_list[i].category;
		break;
	}
}
var student_year = String(obj.year).trim().substring(2,4);
%>

<tr data-student-id="<%= obj.student_id %>">
	<td><%= obj.student_id %></td>
	<td><%= obj.first_name %></td>
	<td><%= obj.last_name %></td>
	<td><%= obj.roll_num %>/<%= student_branch %>/<%= student_year %></td>
	<td><%= student_branch %></td>
	<td><%= student_category %></td>
	<td><%= obj.email_id %></td>
	<td><%= obj.books_issued %></td>
</tr>