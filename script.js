$(document).ready(function()
{


  $('.markComplete').on('click', function() {
    const taskId = $(this).data('id');
    console.log(typeof(taskId));
    $.post('update_task.php', { id: taskId, status: 'Completed' }, function(response) {
        location.reload();
    });
});


$('.deleteTask').on('click', function() {
  const taskId = $(this).data('id');
  console.log(typeof(taskId));
  $.post('delete_task.php', { id: taskId }, function(response) {
      location.reload();
  });
});




});