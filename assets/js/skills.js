const frontEnd = document.querySelector('.front-end');
const FrontEnd = [
    {
        icon: 'fab fa-html5',
        id:'html',
    },
    {
        icon: 'fab fa-css3-alt',
        id:'css',
    },
    {
        icon: 'fab fa-js',
        id: 'js',
    },
    {
        icon: 'fab fa-bootstrap',
        id:'bootstrap',
    },
    {
        icon: '',
        id:'sass'
    }
]



let FeDev = '';
FrontEnd.forEach(fe => {
    return FeDev += getSkill(fe.icon,fe.id);
});
frontEnd.innerHTML = FeDev;


const rowBackEnd = document.querySelector('.back-end');
const backEnd = [
    {
        icon: 'fab fa-php',
        id: 'php'
    },
    {
        icon: 'fab fa-node-js',
        id:'nodeJs'
    }
]   

let BeDev = '';
backEnd.forEach(be => {
   return BeDev += getSkill(be.icon,be.id);
})
rowBackEnd.innerHTML = BeDev;


function getSkill(icon, id) {
    return (
        `<div class="col-lg-3 col-md-4 col-sm-4 col-4 icon-skill justify-content-center">
            <i class="${icon}" id="${id}"></i>
        </div>`
    );
}



