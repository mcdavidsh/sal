class Accordion {
    constructor(options= {}, item = [{}]) {

    }
    open(accordionItem,accordionContent){
        for (let i = 0; i < this.accordionItem.length; i++) {
            accordionItem[i].addEventListener("click", (e) => {
                accordionItem[i].classList.add("accordion--open");
                accordionContent[i].style.display = "block";
                e.stopPropagation();
                for (let j = 0; j < accordionItem.length; j++) {
                    if (j != i) {
                        accordionContent[j].style.display = "none";
                        accordionItem[j].classList.remove("accordion--open");
                    }
                }
                // BEGIN: Open parent accordion
                let recursiveNode = accordionItem[i];
                while( (recursiveNode = recursiveNode.parentNode) ){
                    if (recursiveNode.classList && recursiveNode.classList.contains('accordion--item')) {
                        recursiveNode.classList.add("accordion--open");
                        let recursiveNodeChildren = recursiveNode.childNodes;
                        for(let j = 0; j < recursiveNodeChildren.length; j++) {
                            let childNode = recursiveNodeChildren[j];
                            if (childNode.classList && childNode.classList.contains('accordion__content')) {
                                childNode.style.display = "block";
                                break;
                            }
                        }

                    }
                }
                // END: Open parent accordion
            })
        }
    }
    close(accordionItem,accordionContent){

    }

}
const accordionItems = [
    {
        id: 'accordion-example-heading-1',
        triggerEl: document.querySelector('#accordion-example-heading-1'),
        targetEl: document.querySelector('#accordion-example-body-1'),
        active: true
    },
    {
        id: 'accordion-example-heading-2',
        triggerEl: document.querySelector('#accordion-example-heading-2'),
        targetEl: document.querySelector('#accordion-example-body-2'),
        active: false
    },
    {
        id: 'accordion-example-heading-3',
        triggerEl: document.querySelector('#accordion-example-heading-3'),
        targetEl: document.querySelector('#accordion-example-body-3'),
        active: false
    }
];

// options with default values
const options = {
    alwaysOpen: true,
    activeClasses: 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white',
    inactiveClasses: 'text-gray-500 dark:text-gray-400',
    onOpen: (item) => {
        console.log('accordion item has been shown');
        console.log(item);
    },
    onClose: (item) => {
        console.log('accordion item has been hidden');
        console.log(item);
    },
    onToggle: (item) => {
        console.log('accordion item has been toggled');
        console.log(item);
    },
};
/*
* accordionItems: array of accordion item objects
* options: optional
*/

const accordion = new Accordion(accordionItems, options);
// open accordion item based on id
accordion.open('accordion-example-heading-2');

// close accordion item based on id
accordion.close('accordion-example-heading-2');

// toggle visibility of item based on id
accordion.toggle('accordion-example-heading-3');