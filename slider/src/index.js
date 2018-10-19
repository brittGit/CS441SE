// collect the DOM elements
const slider = document.getElementById("slider");
const sliderValue = document.getElementById("sliderValue");
const sliderCurrentValue = document.getElementById("sliderCurrentValue");
const sliderPercent = document.getElementById("sliderPercent");

// set the display of the final value
function setValue(sliderElement, displayElement) {
  displayElement.innerHTML = `Value: ${sliderElement.value}`;
}

// set the display of the current value
function setCurrentValue(sliderElement, displayElement) {
  displayElement.innerHTML = `Current Value: ${sliderElement.value}`;
}

// set the dsiplay of the Yes/No percentages
function setYesNo(sliderElement, displayElement) {
  const percent = Math.round((sliderElement.value / 100) * 100);
  const yes = `${percent}%`;
  const no = `${100 - percent}%`;
  displayElement.innerHTML = `Yes: ${yes}, No: ${no}`;
}

// display initial values
setValue(slider, sliderValue);
setCurrentValue(slider, sliderCurrentValue);
setYesNo(slider, sliderPercent);

// listen for when the user lets go of the thumb
// update display
slider.addEventListener("change", function(e) {
  setValue(e.currentTarget, sliderValue);
});

// listen for when the user is sliding the thumb
// update display
slider.addEventListener("input", function(e) {
  setCurrentValue(e.currentTarget, sliderCurrentValue);
  setYesNo(e.currentTarget, sliderPercent);
});
