function setActive(element) {
    // Remove active class from all links
    document.querySelectorAll('a').forEach(function(el) {
        el.classList.remove('active');
    });

    // Add active class to clicked link
    element.classList.add('active');
}