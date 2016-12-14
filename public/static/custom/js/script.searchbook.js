function loadResults(string){
    var url = config.path.ajax 
            + "/books/" + string;

    var table = $('#book-results'),
        table_parent_row = table.parents('.row'),
        default_tpl = _.template($('#search_book').html());


    table_parent_row.show();

    $.ajax({
        url : url,
        success : function(data){
            if($.isEmptyObject(data)){
                table.html('<tr><td colspan="99">Không có cuốn này trong thư viện.</td></tr>');
            } else {
                table.html('');
                for(var books in data) {
                    book = data[books];

                    if(book.avaliability){
                        book.avaliability = '<a class="btn btn-success">Sẵn Có</a>';
                    } else {
                        book.avaliability = '<a class="btn btn-danger">Đã Mượn Hết</a>';
                    }
                    
                    table.append(default_tpl(book));
                }
            }
        },
        beforeSend : function(){
            table.css({'opacity' : 0.4});
        },
        complete : function() {
            table.css({'opacity' : 1.0});
        }
    });
}

$(document).ready(function(){   
    $("#search_book_button").click(function() {
        var search_query = $(this).parents('form').find('textarea').val();

        if(search_query != '')
            loadResults(search_query);
    });
});