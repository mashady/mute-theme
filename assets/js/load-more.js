jQuery(document).ready(function ($) {
  $("#load-more").on("click", function () {
    var button = $(this);
    var page = button.data("page");

    $.ajax({
      url: ajaxurl,
      type: "POST",
      data: {
        action: "my_load_more",
        page: page,
      },
      beforeSend: function () {
        button.text("Loading...");
      },
      success: function (data) {
        if ($.trim(data) != "") {
          $("#blog-posts").append(data);
          button.data("page", page + 1);
          button.text("Load More");
        } else {
          button.remove();
        }
      },
    });
  });
});
