const options = {
  root: null, // use the viewport as the root
  rootMargin: "0px", // no margin
  threshold: 0.5, // trigger when 50% of the element is visible
};

const handleIntersection = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      $(".counting").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");

        $({ countNum: 0 }).animate(
          {
            countNum: countTo,
          },
          {
            duration: 3000,
            easing: "linear",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum + "+");
            },
          }
        );
      });

      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(handleIntersection, options);
const counterSection = document.getElementById("counter-stats");
observer.observe(counterSection);
