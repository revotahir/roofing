"use strict"; // Enforces stricter parsing and error handling in JavaScript

// Select all tab content elements within the multiTabs section
const multiTabs = document.querySelectorAll(
  "#multiTabsBtnsContentSection .multi_tabs_content-container .multi_tab_content"
);

// Select all tab buttons within the multiTabs section
const multiTabsBtns = document.querySelectorAll(
  "#multiTabsBtnsContentSection .multi_tabs_btns-container .multi_tabs-btn"
);

// Get the last character from the URL hash (e.g., "#step-1" -> "1")
const preferedStep = window.location.hash.slice(-1);

// If a preferred step exists in the URL hash, activate the corresponding tab button
if (preferedStep) {
  // Remove "active_tab" class from all tab buttons
  multiTabsBtns.forEach((_tabBtn) => _tabBtn.classList.remove("active_tab"));

  // Activate the button corresponding to the step in the URL (index is step - 1)
  multiTabsBtns[preferedStep - 1].classList.add("active_tab");
} else {
  // If no hash is present, default to activating the first tab button
  multiTabsBtns[0].classList.add("active_tab");
}

// Log the selected elements for debugging purposes
console.log(multiTabs, multiTabsBtns);

// Loop through each tab button to add event listeners
multiTabsBtns.forEach((tabBtn, index) => {
  const btn = tabBtn.querySelector(".tab-btn"); // Get the button inside the tab container

  // Only add click event if the button is not disabled
  if (!btn.disabled) {
    // If the button is active, show the corresponding tab content
    if (tabBtn.classList.contains("active_tab"))
      multiTabs[index].classList.add("active");

    // Add click event listener to handle tab switching
    btn.addEventListener("click", () => {
      // Remove "active_tab" class from all buttons to reset the state
      multiTabsBtns.forEach((_tabBtn) =>
        _tabBtn.classList.remove("active_tab")
      );

      // Set the clicked button as active
      tabBtn.classList.add("active_tab");

      // Remove "active" class from all tab content to reset the state
      multiTabs.forEach((tab) => tab.classList.remove("active"));

      // Show the corresponding tab content
      multiTabs[index].classList.add("active");

      // Update the URL hash to reflect the current step (e.g., "#step-2")
      window.location.hash = "step-" + (index + 1);
    });
  }
});
