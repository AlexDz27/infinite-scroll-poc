const target = document.querySelector('#target');
const options = {
  rootMargin: '0px',
  threshold: 0.3 // extent of target visibility when firing callback
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) return;

    fetch('/get-dresses.php')
      .then(response => response.json())
      .then(dresses => console.log(dresses))
    ;
  });
}, options);
observer.observe(target);