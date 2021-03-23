/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is not neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/*!********************!*\
  !*** ./js/main.js ***!
  \********************/
eval("/*$(document).ready(function(){\r\n    alert('Ваша версия jQuery ' + jQuery.fn.jquery);\r\n});\r\n\r\n$(function() {\r\n\tvar $menu_popup = $('.menu-popup');\r\n \r\n\t$(\".menu-triger\").click(function(){\r\n\t\t$('body').addClass('body_pointer');\t\t\r\n\t\t$menu_popup.show(0);\r\n\t\t$menu_popup.animate(\r\n\t\t\t{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, \r\n\t\t\t300\r\n\t\t);\r\n\t\treturn false;\r\n\t});\t\r\n\t\r\n\t$(\".menu-close\").click(function(){\r\n\t\t$('body').removeClass('body_pointer');\t\t\r\n\t\t$menu_popup.animate(\r\n\t\t\t{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, \r\n\t\t\t300, \r\n\t\t\tfunction(){\r\n\t\t\t\t$menu_popup.hide(0);\r\n\t\t\t}\r\n\t\t);\r\n\t\treturn false;\r\n\t});\t\r\n\t\r\n\t$(document).on('click', function(e){\r\n\t\tif (!$(e.target).closest('.menu-popup').length){\r\n\t\t\t$('body').removeClass('body_pointer');\r\n\t\t\t$menu_popup.animate(\r\n\t\t\t\t{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, \r\n\t\t\t\t300, \r\n\t\t\t\tfunction(){\r\n\t\t\t\t\t$menu_popup.hide(0);\r\n\t\t\t\t}\r\n\t\t\t);\r\n\t\t}\r\n\t});\r\n});*/\n\n//# sourceURL=webpack:///./js/main.js?");
/******/ })()
;