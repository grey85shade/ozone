function modeDeadlinerItem(id, column)
{
    var newVal = $('#'+id+'-'+column).val();
    $.ajax({
        data: {"id" : id, "column" : column, "newVal" : newVal},
        type: "POST",
        dataType: "html",
        url: "modify.php",
        success: function(data)
        {
            if (column == 'ini' || column == 'end') {
                location.reload();
            } else {
                $('#'+id+'-'+column).css("border", "1px solid #b5fbb5");
            }
            
        },
        error : function(xhr, status, data) {
            alert(data);
        }
     });
}

function deleteItem(id)
{
    if (confirm("Seguro?") == true) {
        $.ajax({
            data: {"id" : id, "delete" : "true"},
            type: "POST",
            dataType: "html",
            url: "modify.php",
            success: function(data)
            {
                location.reload();
            },
            error : function(xhr, status, data) {
                alert(data);
            }
        });
    }
}

function showNewLink(id)
{
    $('#newLinkBox-'+id).slideToggle();
    
}
 
function saveNewLink(id)
{
    var newName = $('#newName-'+id).val();
    var newSubGrupo = $('#newSubGrupo-'+id).val();
    var newLink = $('#newLink-'+id).val();

    $.ajax({
        data: {"grupo" : id, "subGrupo" : newSubGrupo, "name" : newName, "link" : newLink},
        type: "POST",
        dataType: "html",
        url: "/ajax/saveLink",
        success: function(data)
        {
            $('#link-grupo-box-'+id).append(data);
            
            $('#newName-'+id).val('');
            $('#newSubGrupo-'+id).val('');
            $('#newLink-'+id).val('');
        },
        error : function(xhr, status, data) {
            alert('ERROR!!');
            alert(data);
        }
     });
}
