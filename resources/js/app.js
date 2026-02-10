// import './bootstrap';
// import jQuery from 'jquery';
// window.$ = jQuery;
// window.jQuery = jQuery;
//
// $(document).ready(function() {
//     $('.projects').hide();
//     $('.tasks').hide();
//
//     $(".sidebar").on('click','.client',function() {
//         const project = $(this).next(".projects");
//         project.toggle();
//
//         if (project.is(":visible")) {
//             project.addClass("active-project");
//             $(this).addClass("active-client");
//         } else {
//             project.removeClass("active-project");
//             $(this).removeClass("active-client");
//         }
//
//         const arrow = $(this).find(".arrow");
//         if (project.is(":visible")) {
//             arrow.attr("src", "icons/chevron-down.svg");
//         } else {
//             arrow.attr("src", "icons/chevron-up.svg");
//         }
//     });
//
//     $(".single").click(function() {
//         const tasks = $(this).next(".tasks");
//         tasks.toggle();
//
//         if (tasks.is(":visible")) {
//             tasks.addClass("active-task");
//         } else {
//             tasks.removeClass("active-task");
//         }
//
//         const arrow = $(this).find(".arrow");
//         if (tasks.is(":visible")) {
//             arrow.attr("src", "icons/chevron-down.svg");
//         } else {
//             arrow.attr("src", "icons/chevron-up.svg");
//         }
//     });
//
// });
