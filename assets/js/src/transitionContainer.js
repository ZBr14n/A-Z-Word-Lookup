


// scan url for whichever the user clicks and compare if it matches the id so we can animate.
function TransitionContainer(theLetter){
    const getWrapper = document.getElementsByClassName('the-words' + theLetter)[0]
    getWrapper.style.border = '10px solid orange'
    
    getWrapper.style.transition = 'border-color .6s ease-out'
    
    setTimeout(function(){
        getWrapper.style.borderColor = 'transparent'
        // getWrapper.style.opacity = '0'
    }, 800)
    
    // alert(getWrapper)
}



