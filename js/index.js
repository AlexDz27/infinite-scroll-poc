/*
TODO:

2. Function for creating components (?) and inserting them
 */

const target = document.querySelector('#target');

const observer = new IntersectionObserver(async (entries) => {
  const [target] = entries;
  if (!target.isIntersecting) return;

  const response = await fetch('/get-dresses.php');
  const dresses = await response.json();

  console.log(dresses);
});
observer.observe(target);