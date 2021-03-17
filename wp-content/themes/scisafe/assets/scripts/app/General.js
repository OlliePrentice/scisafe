import $ from 'jquery';
import 'jquery-match-height/dist/jquery.matchHeight';
import resizeEvent from "../utilities/triggerResizeEvent";
import JSShare from "js-share";

function General() {
    $('.mh').matchHeight();

    $.fn.matchHeight._afterUpdate = function(_event, _groups) {
        window.dispatchEvent(resizeEvent);
    };

    const shareItems = document.querySelectorAll('.social_share');

    function shareAction(i) {
        shareItems[i].addEventListener('click', function share(_e) {
            return JSShare.go(this);
        });
    }

    for (let i = 0; i < shareItems.length; i += 1) {
        shareAction(i);
    }
}

export default General;
