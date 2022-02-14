jQuery(function ($) {
  const filterForm = $("#filter");

  if (filterForm.length) {
    filterForm.submit(function (e) {
      e.preventDefault();

      const formInputs = filterForm.find(
        "input[type='text'], input[type='radio']:checked, input[type='number'], input[type='checkbox']:checked, select"
      );

      let data = {
        action: "property_filter",
        posts_per_page: $("#filter-posts-per-page").val(),
      };

      formInputs.each((index, input) => {
        data[input.getAttribute("name").replace("filter-", "")] = input.value;
      });

      $.ajax({
        url: searchPropertyObject.ajax_url,
        type: "POST",
        data: data,
        success: function (response) {
          let responseArray = JSON.parse(response);
          let responseElement = $("#ajax-results");

          responseElement.empty();

          if (responseArray.length) {
            responseArray.forEach((element) => {
              responseElement.append(element);
            });
          } else {
            responseElement.append("Ничего не найдено");
          }
        },
      });
    });
  }
});
