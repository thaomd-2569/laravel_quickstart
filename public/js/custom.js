$(function() {
    $("#btn-logout").click(function() {
        var csrf = document.querySelector('meta[name="csrf-token"]').content;
        $.ajax({
            url: "/logout",
            type: "POST",
            data: { value: "", _token: csrf },
            success: function(response) {
                window.location = "/login";
            }
        });
    });
});
