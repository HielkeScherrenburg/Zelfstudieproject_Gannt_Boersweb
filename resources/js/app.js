import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;
window.jQuery = jQuery;

$(document).ready(function () {
    $('.projects, .tasks, .project.row, .task.row').hide();

    $(".sidebar").on('click', '.item:not(.task)', function() {
        const $this = $(this);
        const $content = $this.next();
        const $arrow = $this.find(".arrow");
        const clientId = $this.data('client-id');
        const projectId = $this.data('project-id');

        $content.toggle();

        if ($content.is(":visible")) {
            $arrow.attr("src", "icons/chevron-down.svg");
            $this.addClass("active-item");
            if (clientId) {
                $('.project.row[data-client-id="' + clientId + '"]').show();
            }
                if (projectId) {
                    $('.project.row[data-project-id="' + projectId + '"]').show();
                    $('.task.row[data-project-id="' + projectId + '"]').show();
                }
        } else {
            $arrow.attr("src", "icons/chevron-up.svg");
            $this.removeClass("active-item");

            if (clientId) {
                $('.project.row[data-client-id="' + clientId + '"]').hide();
                $('.task.row[data-client-id="' + clientId + '"]').hide();
            }

            if (projectId) {
                $('.task.row[data-project-id="' + projectId + '"]').hide();
            }

            $content.find(".tasks").hide();
            $content.find(".arrow").attr("src", "icons/chevron-up.svg");
        }
    });

});

    function setLines() {
        const $item = $('.container .left .sidebar .item').first();
        if (!$item.length) return;

        var height = $item[0].getBoundingClientRect().height;
        var width = $('.timeline')[0].getBoundingClientRect().width;
        $('.gannt_body .row').css({
            'height': height + 'px',
            'width': width + 'px'
        });
    }

    function setHeightTimeline() {
        var height = $('.title_block').outerHeight();
        $('.timeline').height(height);
        $('.months, .weeks, .days').height(height / 3);
    }

    $(window).on('load resize', function() {
        setLines();
        setHeightTimeline();

        $('body').css('opacity', '1');

    });
