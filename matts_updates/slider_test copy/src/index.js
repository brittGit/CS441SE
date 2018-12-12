/*
  Userful articles to read:

  JavaScript:
  https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementById
  https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener

  HTML:
  https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/range
  https://css-tricks.com/sliding-nightmare-understanding-range-input/

  CSS:
  https://developer.mozilla.org/en-US/docs/Web/CSS/pointer-events
  https://developer.mozilla.org/en-US/docs/Web/CSS/flex
  https://a11yproject.com/posts/never-remove-css-outlines/
*/

// collect DOM elements
const slider = document.getElementById("slider");
const sliderValue = document.getElementById("sliderValue");
const sliderCurrentValue = document.getElementById("sliderCurrentValue");
const sliderPercent = document.getElementById("sliderPercent");
const sliderInfoYes = document.getElementById("sliderInfoLeft");
const sliderInfoNo = document.getElementById("sliderInfoRight");

/*
  Below we declare some useful functions that we'll compose
  to get values and set displays
*/

// you can change the min and max of your slider
// this formula ensures we get the perecentage regardless of values for min/max
function getPercent(sliderElement) {
  return Math.round(
    (sliderElement.value / (sliderElement.max - sliderElement.min)) * 100
  );
}

// While this gives the same value as getPercent
// it's nice to generalize it so we can modify it separately from the percent
function getYesPercent(sliderElement) {
  return getPercent(sliderElement);
}

function getNoPercent(sliderElement) {
  return 100 - getPercent(sliderElement);
}

function setValue(sliderElement, displayElement) {
  displayElement.innerHTML = `Value: ${sliderElement.value}`;
}

function setCurrentValue(sliderElement, displayElement) {
  displayElement.innerHTML = `Current Value: ${sliderElement.value}`;
}

function setYesNo(sliderElement, displayElement) {
  const yes = getYesPercent(sliderElement);
  const no = getNoPercent(sliderElement);
  displayElement.innerHTML = `Yes: ${yes}%, No: ${no}%`;
}

function setSliderInfo(sliderElement, yesElement, noElement) {
  yesElement.innerHTML = ` ${getYesPercent(sliderElement)}%`;
  noElement.innerHTML = ` ${getNoPercent(sliderElement)}%`;
}

/* 
   Below we execute the functions to display initial values
   and set listeners to update the values as the user interacts
   with the slider
*/

// display initial values
setValue(slider, sliderValue);
setCurrentValue(slider, sliderCurrentValue);
setYesNo(slider, sliderPercent);
setSliderInfo(slider, sliderInfoYes, sliderInfoNo);

// listen for when the user slides the thumb
slider.addEventListener("input", function(e) {
  setCurrentValue(e.currentTarget, sliderCurrentValue);
  setYesNo(e.currentTarget, sliderPercent);
  setSliderInfo(e.currentTarget, sliderInfoYes, sliderInfoNo);
});

// listen for when the user releases the thumb
slider.addEventListener("change", function(e) {
  setValue(e.currentTarget, sliderValue);
});
