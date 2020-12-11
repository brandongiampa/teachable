function teachableSetUpSocialLinks() {

    let directoryURL = tchbl.template_url 
    let siteName = tchbl.site_name
    let pageURL = document.location.href
    let thumbnail 
    let pageTitle 
    let hashTags = "GlutenFreeBeer,GlutenFree,TastesGreatLessDiarrhea"
    let imgSrc

    pageTitle = null !== document.querySelector("h1.page-title") ? document.querySelector("h1.page-title").innerText : siteName

    imgSrc = null !== thumbnail ? thumbnail : directoryURL + "/assets/img/toasting.jpg"

    let facebookURL = `https://www.facebook.com/sharer.php?u=${pageURL}`
    let twitterURL = `https://twitter.com/share?url=${pageURL}&text=${pageTitle}=&hashtags=${hashTags}`
    let linkedinURL = `https://www.linkedin.com/shareArticle?url=${pageURL}&title=${pageTitle}`

    let facebookShareLink = document.querySelector("a#facebook-share-link") 
    let twitterShareLink = document.querySelector("a#twitter-share-link")
    let linkedinShareLink = document.querySelector("a#linkedin-share-link") 

    if ( null !== facebookShareLink ) {
        facebookShareLink.href = facebookURL 
    }
    
    if ( null !== twitterShareLink ) {
        twitterShareLink.href = twitterURL
    }
     
    if ( null !== facebookShareLink ) {
        linkedinShareLink.href = linkedinURL
    }
}

export default teachableSetUpSocialLinks