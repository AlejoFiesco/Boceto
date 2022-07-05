ScrollReveal().reveal('.destacado:nth-child(odd)', ({
    delay: 100,
    reset: true,
    distance: '100px',
    origin: 'left'
}));
ScrollReveal().reveal('.destacado:nth-child(even)', ({
    delay: 100,
    reset: true,
    distance: '100px',
    origin: 'right'
}));

ScrollReveal().reveal('.destacado:nth-child(odd)::before, .destacado:nth-child(odd)::after', ({
    delay: 100,
    reset: true,
    distance: '100px',
    origin: 'right'
}));