$(document).ready(function () {
  // ! Navbar

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 30) {
      $("nav").css("background", "white");
      $(".navbar-brand").css("color", "black");
      $("ul li a").css("color", "black");
      $(".btn-login").css("color", "black");
      $("nav").css("height", "60px");
      $(".back-to-top").fadeIn();
    } else {
      $("nav").css("background", "transparent");
      $(".navbar-brand").css("color", "white");
      $("ul li a").css("color", "white");
      $(".btn-login").css("color", "white");
      $("nav").css("height", "70px");
      $(".back-to-top").fadeOut();
    }
  });

  // ! Gsap Effect

  // let t1 = gsap.timeline({
  //   scrollTrigger: {
  //     trigger: "#about",
  //     toggleActions: "restart none reverse pause",
  //     scrub: true,
  //     toggleClass: "active",
  //   },
  // });

  // t1.from(".about-img img", {
  //   x: -200,
  //   opacity: 0,
  //   duration: 1.5,
  // })
  //   .from(".about-desc h2", { x: 200, opacity: 0, duration: 1 }, "-=1")
  //   .from(".about-desc p", { y: 200, opacity: 0, duration: 1 }, "-=1")
  //   .from("heading h2", { y: 100, opacity: 0, duration: 1 });

  // ! Materialize Effect

  $(".materialboxed").materialbox();
  $("select").formSelect();
  $(".datepicker").datepicker();
  $(".tooltipped").tooltip();

  // ! Type Writer Effect

  var typed = new Typed(".typing", {
    strings: ["To Travel.", "The Movement And Make The Memories."],
    smartBackspace: true, // Default value
    typeSpeed: 90,
    backSpeed: 60,
    loop: true,
  });
});
