import Util from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Alert from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
import Button from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Carousel from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Collapse from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Dropdown from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Modal from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Popover from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Scrollspy from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Tab from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
// import Tooltip from '../bootstrap-4.0.0/bootstrap-4.0.0/js/src'
import openNavbar from "./open-navbar.js"
import closeNavbar from "./close-navbar.js"
import teachableSetUpSocialLinks from "./social-links.js"

if (
    document.readyState === "complete" ||
    (document.readyState !== "loading" && !document.documentElement.doScroll)
) {
onLoad();
} else {
    document.addEventListener("DOMContentLoaded", onLoad);
}

function onLoad() {
    
    if ( document.getElementById( "menu-toggle" ) ) {
        document.getElementById( "menu-toggle" ).addEventListener( 'click', openNavbar )
    }

    if ( document.getElementById( "close-menu" ) ) {
        document.getElementById( "close-menu" ).addEventListener( 'click', closeNavbar )
    }

    if ( document.getElementById( "blackout-screen" ) ) {
        document.getElementById( "blackout-screen" ).addEventListener( 'click', closeNavbar )
    }

    if ( document.getElementsByClassName( 'post-header' ) ) {
        teachableSetUpSocialLinks()
    }
    
}