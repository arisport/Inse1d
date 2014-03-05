$(document).ready(function() {
//Insert new Section on button click
	$(".newBlock").on('click', function() {
        var title = $(this).prev().find('.wbtTitle').val();
        var note = $(this).prev().find('.wbtNote').val();
        var wbtSet = $(this).prev("section").html();       

        $(this).prev().find('.wbtTitle').replaceWith(title);
        $(this).prev().find('.wbtNote').replaceWith(note);

        $(this).prev("section").after('<section>' + wbtSet + '</section>');
    });
//Insert new Top Div in graph on button click
	$(".newGraphBlock").on('click', function() {
		var taskTitle = $(this).prev().find('.wbtTaskTitleTop').val();
		var wbtTask = $(this).prev(".task").html(); 
		
		$(this).prev().find('.wbtTaskTitle').replaceWith(taskTitle);
		$(this).prev("div").after('<div class="task">' + wbtTask + '</div>');
    });
});