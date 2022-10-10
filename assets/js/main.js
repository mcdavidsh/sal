// Listen for click on the document
document.addEventListener('click', function (event) {

    let target = (event.target.nodeName === "SPAN" || event.target.nodeName === "path"|| event.target.nodeName === "svg")?event.target.parentElement :event.target;
    
    //Bail if our clicked element doesn't have the class
    if (!target.classList.contains('accordion-toggle')) return;
    // Get the target content
    var content = document.querySelector(target.dataset.target);
    if (!content) return;


    // If the content is already expanded, collapse it and quit
    if (content.classList.contains('active')) {
        content.classList.remove('active');
        target.lastElementChild.classList.add('accordion-arrow')
        target.lastElementChild.classList.remove('accordion-arrow-180')
        return;
    }

    // Get all open accordion content, loop through it, and close it
    var accordions = document.querySelectorAll('.accordion-content.active');
    for (var i = 0; i < accordions.length; i++) {
        accordions[i].classList.remove('active');
        target.lastElementChild.classList.remove('accordion-arrow-180')
        target.lastElementChild.classList.add('accordion-arrow')
        target.lastElementChild.classList.remove('accordion-arrow-180')
    }

    // Toggle our content
    content.classList.toggle('active');
    if (target.lastElementChild.nodeName === 'svg' ) {
        target.lastElementChild.classList.add('accordion-arrow-180')
        target.lastElementChild.classList.remove('accordion-arrow')
    }
})