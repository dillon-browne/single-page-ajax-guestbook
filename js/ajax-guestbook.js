// this is the id of the form
$("#idForm").submit(function(e) {

    var url = "guestbook-post.php"; // the script where you handle the form input.

    $.ajax({
        type: "POST",
        url: url,
        data: $("#idForm").serialize(), // serializes the form's elements.
        success: function(data)
        {
            $("#msg").append(data);
            $("#comments").append(data);
        }
    });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$(document).ready(function() {

    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "guestbook-get.php",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#comments").append(response).fadeIn(999);
        }

    });
});