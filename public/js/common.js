function deleteUser (url,id) {
  if (!confirm('Are you sure you want to delete!')) {
    return false;
  }

  $.ajax({
      type: "POST",
      url: url,
      dataType: 'json',
      data: {"id": id},
      success: function (res) {
          alert(res.message);
          if (res.status === 0) {
              location.reload();
          } 
      }
  });
}

function hashPassword(url, changeOldPass, c) {
    $.ajax({
        url: url,
        dataType: 'json',
        type: 'post',
        data: {title: changeOldPass},
        success: function(result){
            c(result.message); 
        }
    });
}
