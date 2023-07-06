/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/assets/js/index1.js ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "index": () => (/* binding */ index)
/* harmony export */ });
function getCssValuePrefix() {
  var returnValue = ''; //default to standard syntax

  var prefixes = ['-o-', '-ms-', '-moz-', '-webkit-']; // Create a temporary DOM object for testing

  var dom = document.createElement('div');

  for (var i = 0; i < prefixes.length; i++) {
    // Attempt to set the style
    dom.style.background = prefixes[i] + 'linear-gradient(#ffffff, #000000)'; // Detect if the style was successfully set

    if (dom.style.background) {
      returnValue = prefixes[i];
    }
  }

  dom = null;
  remove(dom);
  return returnValue;
}

function index(HExaTORGBA08, HExaTORGBA02, HExaTORGBAV108, myVarVal) {
  // document.querySelector('.bg-recentorder').style.background = getCssValuePrefix() + 'linear-gradient(' + 'right' + ', ' + hexToRgba(myVarVal, 0.8) + ', ' + hexToRgba(myVarVal, 0.6) + ')'

  /*-----Transactions-----*/
  var myCanvas = document.getElementById("transactions");
  myCanvas.height = "330";
  var myCanvasContext = myCanvas.getContext("2d");
  var gradientStroke1 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
  gradientStroke1.addColorStop(0, HExaTORGBA08 || 'rgba(108, 95, 252, 0.8)');
  gradientStroke1.addColorStop(1, HExaTORGBA02 || 'rgba(108, 95, 252, 0.2) ');
  var gradientStroke2 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
  gradientStroke2.addColorStop(0, HExaTORGBAV108 || 'rgba(5, 195, 251, 0.8)');
  gradientStroke2.addColorStop(1, HExaTORGBAV108 || 'rgba(5, 195, 251, 0.2) ');
  var myChart = new Chart(myCanvas, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
      type: 'line',
      datasets: [{
        label: 'Total Sales',
        data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210],
        backgroundColor: gradientStroke1,
        borderColor: myVarVal || "#6c5ffc",
        pointBackgroundColor: '#fff',
        pointHoverBackgroundColor: gradientStroke1,
        pointBorderColor: myVarVal || "#6c5ffc",
        pointHoverBorderColor: gradientStroke1,
        pointBorderWidth: 0,
        pointRadius: 0,
        pointHoverRadius: 0,
        borderWidth: 3,
        fill: 'origin'
      }, {
        label: 'Total Orders',
        data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454],
        backgroundColor: 'transparent',
        borderColor: '#05c3fb',
        pointBackgroundColor: '#fff',
        pointHoverBackgroundColor: gradientStroke2,
        pointBorderColor: '#05c3fb',
        pointHoverBorderColor: gradientStroke2,
        pointBorderWidth: 0,
        pointRadius: 0,
        pointHoverRadius: 0,
        borderWidth: 3,
        fill: 'origin'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      tooltips: {
        enabled: false
      },
      legend: {
        display: false,
        labels: {
          usePointStyle: false
        }
      },
      scales: {
        xAxes: [{
          display: true,
          gridLines: {
            display: false,
            drawBorder: false,
            color: 'rgba(119, 119, 142, 0.08)'
          },
          ticks: {
            fontColor: '#b0bac9',
            autoSkip: true
          },
          scaleLabel: {
            display: false,
            labelString: 'Month',
            fontColor: 'transparent'
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 1050,
            stepSize: 150,
            fontColor: "#b0bac9"
          },
          display: true,
          gridLines: {
            display: true,
            drawBorder: false,
            zeroLineColor: 'rgba(142, 156, 173,0.1)',
            color: "rgba(142, 156, 173,0.1)"
          },
          scaleLabel: {
            display: false,
            labelString: 'sales',
            fontColor: 'transparent'
          }
        }]
      },
      title: {
        display: false,
        text: 'Normal Legend'
      }
    }
  });
} // index()
// Use 'index()' if you are not using themecolor.js, otherwise chart in index.blade.php page will not work.
// Remove 'index()' if you want to use themecolor.js, otherwise chart in index.blade.php page will not work.
/******/ })()
;