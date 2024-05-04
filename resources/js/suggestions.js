$(document).ready(function() {
    // Get the modal element
    var modal = document.getElementById("suggestionsModal");
  
    // Get the "Optimize Title AI" button element
    var optimizeTitleBtn = $("input[type='submit'].optimize-ai")[0];
  
    // Add a click event listener to the "Optimize Title AI" button
    optimizeTitleBtn.addEventListener("click", function() {
      // Show the modal
      modal.style.display = "block";
    });
  
    // Add a click event listener to the close button of the modal
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", function() {
      // Hide the modal
      modal.style.display = "none";
    });
  
    // Add a click event listener to the "Apply Suggestions" button
    var applySuggestionsBtn = document.getElementById("applySuggestions");
    applySuggestionsBtn.addEventListener("click", function() {
      // Get the selected suggestions
      var selectedSuggestions = [];
      $("input[type='checkbox']:checked").each(function() {
        selectedSuggestions.push($(this).val());
      });
  
      // Do something with the selected suggestions, for example, update the product title
      if (selectedSuggestions.length > 0) {
        var newTitle = selectedSuggestions.join(", ");
        $("input[name='atitle']").val(newTitle);
      }
  
      // Hide the modal
      modal.style.display = "none";
    });
  
    // Add a scroll event listener to the description textarea
    var descriptionTextarea = $("textarea[name='description']")[0];
    descriptionTextarea.addEventListener("scroll", function() {
      // Update the scroll position of the modal
      modal.scrollTop = descriptionTextarea.scrollTop;
    });
  });