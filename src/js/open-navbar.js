function openNavbar() {
    fadeInCloseMenu()
    blackOutScreen()
    fadeOutToggle()
    const menu = document.getElementById( "menu-drawer" )
    menu.style.transform = "translateX( 0 )"
    menu.style.opacity = "1"
}

function fadeInCloseMenu() {
    const menuX = document.getElementById( "close-menu")
    menuX.style.opacity = "1"
}

function fadeOutToggle() {
    const toggle = document.querySelector( ".menu-toggle a .dashicons" )
    toggle.style.opacity = "0"
}

function blackOutScreen() {
    const blackoutScreen = document.getElementById( "blackout-screen" )
    blackoutScreen.style.height = "100%"
    blackoutScreen.style.opacity = ".96"
}

export default openNavbar