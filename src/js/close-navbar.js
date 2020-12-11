function closeNavbar() {
    fadeOutCloseMenu()
    unblackOutScreen()
    fadeInToggle()
    const menu = document.getElementById( "menu-drawer" )
    menu.style.transform = "translateX( -100% )"
    menu.style.opacity = "0"
}

function fadeOutCloseMenu() {
    const menuX = document.getElementById( "close-menu")
    menuX.style.opacity = "0"
}

function fadeInToggle() {
    const toggle = document.querySelector( ".menu-toggle a .dashicons" )
    toggle.style.opacity = "1"
}

function unblackOutScreen() {
    const blackoutScreen = document.getElementById( "blackout-screen" )
    blackoutScreen.style.opacity = "0"
    setTimeout( ()=> {
        blackoutScreen.style.height = "0"
    }, 400 )
}

export default closeNavbar