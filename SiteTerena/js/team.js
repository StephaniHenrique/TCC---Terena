window.addEventListener("load", (event) => {
  var swiperWrapper = document.querySelector(".swiper-wrapper");

  /* The Team */
  var team = [
    {
      name: "Nathalia Araujo",
      role: "Full Stack Developer",
      desc:
        "Estudante da ETEC de Guaianases, responsavel pela identidade visual da empresa Terena e Aplicação Web do projeto Simetria.",
      photo:
        "https://lh3.googleusercontent.com/Wma64dq24C4UwRZt1e-HYOYz6Tu-cut6o2ZRSFGiw6p5z6bqmDKqHdQPvPBd8TTikv0VJTvjWFvjqSaGIVTsGRQv9FcYjqL0o3dLBAu7Gdqds8v0Tjq4teUE6jSO042YO0tR9YpXHLP0rEt-RZ0pLFIbFSBnE3IfzP_-amUXcGsIJaXQhtP0okHi_SGCttz5zvhvMXkmEvuGa3a7Z1oco2Z6r3esYoZi0mTiyUDMcfrAfmx3csok-MMMmH9ZMK8o6nuhEvY5uqxJkRn-76eVFd5uG2jf0qroA0REg1zxI-m4pkgT-cn6lFK5ei9hDxl_d_6Yrbk-ldRl8qIsX4BxkdwTH5-yabZMOOgPhQJpnP619ylNS3kURBvXF-bSPqzIhLwLELMXCDuBnbFTa27EzBy_y50HGgNla2HwkC8-lapgcbs1ookl3OfifmQ1wznedzbrj_chzT1_IhNO6R0o11iXNDasmU0oA8eCDu2bmczxqKyhc69J1lh2ArCWgGTZjtrbzhky1LOTRAsGm2rpD0HInd7KH5O_QhkRypw4lMWaoXYwRxef3cknFjzXucavlVI-PPr8XRMivDiig4e7--_vPt-KWQfcVNd_M5W7T-kD_b5x91PD8hgYO3r4U8hCphq14Wvk0Nqre5QiYPfSz1TByJ1AFRPN-sYbDPWRAdoBwJA_qKK0W4q-vkIWvA=s920-no?authuser=0",
      website: "https://rafaelalucas.com",
      email: "mailto:rafaelavlucas@gmail.com",
      linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      dribbble: "https://dribbble.com/rafaelalucas",
    },
    {
      name: "Stephani Henrique",
      role: "Full Stack Developer",
      desc:
        "Estudante da ETEC de Guaianases, responsavel pela pesquisa de campo da empresa Terena e Aplicação Mobile do projeto Simetria.",
      photo:
        "https://lh3.googleusercontent.com/4LpZRk1FdFwk-bPVLVe9oHMq3ssJOI7fMB_snmJrUNxvjtfol2VADIMHtFOIEW1YBWDcyJSPXf2G5S1xQgcplQGG_9_6Q7GXdxfHbqcCFvmXJFq2ZxLxPRjzkrjyLAGe5bY3_Lmljk3aCSKMhd1KLvS9Yy-z_cKnKd0IVf6QbcpbGwEO3RwTM7HTDT5HKLT8aKgn-qi0YA6UrLNwMyOX5BKB1f0-asW4zFNO-JLbWnuS-kXnBG-vn5i1y6xUZEEXR8kmttdh3isXmAwmb_ovhQD-9GWkPsdA353cN3ecBi4YzxNf0g1kH-HeSlV118E9xevLj6izhWmN96SOvwV1OfPrQ41kSN_R_UR7T3ij8ZlDL4bvsr3HEyoNYbMeDAT2w-M1CJ8hUGUbf5hNZnrAy72WF2OUrFW0-rBXIA3GWKwq38nghRSWkNMTZ3MJgp3PzNrxIXEiffQttpVm757SB3Xixh47FlK-V-ppkJL-m3csS9aTBBVUwH5zC5hdp_Xn6LqdfvDzi6bU4pPDmpbTE-dAAHMPmexdjWM5FmTdAQQf4rv5ITlKf1fMAdymv1lenKxzgBr0lNe-h-AFALyu_LgMgBZ5cGdUXWBlgzw3LyuIlZcah0oFJQcCVFCiJS1E093jpineklQLk8LuzIAbRPvPM2LBGIr77sh72SU5JyKKZVTArOuIWWcpwtMDnQ=w720-h719-no?authuser=0",
      website: "https://rafaelalucas.com",
      email: "mailto:rafaelavlucas@gmail.com",
      linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      dribbble: "https://dribbble.com/rafaelalucas",
    },
    {
      name: "Tais Fermino",
      role: "Full Stack Developer e DBA",
      desc:
        "Estudante da ETEC de Guaianases, responsavel pelo desenvolvimento do site da empresa Terena e Banco de Dados da Aplicação Simetria.",
      photo:
        "https://lh3.googleusercontent.com/GYj_VeHBOotKMXTW4QMN-zb_qdpD-WrTKOJ8XBfGUJ8eY19_5_zWjwIbEqvpgoL9nta7hOIW1RcB68q0Ckf2k2ergA3TA6ru9JaGQGaDOW4kl_Yj4H11-tfkkQj07mCw3RDpO7iho1WyjNP40n9Fn5muBZwkUD_kmM1-1THXQYnW7oIu7Kg1aTQJIehDr5om1qElQH-XZyQe297aU69t_m1fu_5q3Lcbdi68fFiYT8qZGFhjHxIDQCZq6O4ML8G3wYUIp30hF3rO69KFi9590w8YGWjyL8IrE4gpmao5E-gm-P0FFUdRGUEkH4LcrHRSIcgVX-2Bb6sYX5-Uv42COkIJB5Ph73pYBcasK2yEZdBx_mZFZ6ln1f-hLpqWEyojfpaJ4XkKaeOZfWIAK4NoTvGe0iScEpeCgB0n3elw5PGaW2H84Ie0soZ4pqbkcCall145oT3BjcoY38u_gtiQpQv1me85MRflHGnI-XxKJeHXtkoCFIoBF6pBlY6EKBQXvk_gsPtzCIzk8geh_RCUwriQMoh1a05R1jybJbHrj_GzPUsfuRlPtf2Q8iFB_jhl6klWvOSlSvVylO0374FNqFu6xEHiOwNyCFUZ8YveWol70uY2DR-AHfzj8ZgBhYqSJJTEP0QF9O8lT_zztLBzKWUJ8dghvD7N5BtAs1K-uxM-mTHNP1matgKQFnOyrA=w1227-h920-no?authuser=0",
      website: "https://rafaelalucas.com",
      email: "mailto:rafaelavlucas@gmail.com",
      linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      dribbble: "https://dribbble.com/rafaelalucas",
    },
  ];

  /* Social Icons */
  var icons = [
    {
      iWebsite: "https://rafaelalucas.com/dailyui/6/assets/link.svg",
      iEmail: "https://rafaelalucas.com/dailyui/6/assets/email.svg",
      iLinkedin: "https://rafaelalucas.com/dailyui/6/assets/linkedin.svg",
      iDribbble: "https://rafaelalucas.com/dailyui/6/assets/dribbble.svg",
    },
  ];

  var iWebsite = icons[0].iWebsite,
    iEmail = icons[0].iEmail,
    iLinkedin = icons[0].iLinkedin,
    iDribbble = icons[0].iDribbble;

  /* Function to populate the team members */
  function addTeam() {
    for (let i = 0; i < team.length; i++) {
      /* Variables for the team */
      var name = team[i].name,
        role = team[i].role,
        desc = team[i].desc,
        photo = team[i].photo,
        website = team[i].website,
        email = team[i].email,
        linkedin = team[i].linkedin,
        dribbble = team[i].dribbble;

      /* Template for the Team Cards */
      var template = `
               <div class="swiper-slide">
               <div class="card">
                   <span class="bg"></span>
                   <span class="more"></span>
                   <figure class="photo"><img src="${photo}"></figure>
                       <article class="text">
                           <p class="name">${name}</p>
                           <p class="role">${role}</p> 
                           <p class="desc">${desc}</p> 
                       </article>
                       
                       <div class="social">
                       <span class="pointer"></span>
                       <div class="icons">
                           <a class="icon" href="${website}" target="_blank" data-index="0"><img src="${iWebsite}"></a>
                           <a class="icon" href="${email}" target="_blank" data-index="1"><img src="${iEmail}"></a>
                           <a class="icon" href="${linkedin}" target="_blank" data-index="2"><img src="${iLinkedin}"></a>
                           <a class="icon" href="${dribbble}" target="_blank" data-index="3"><img src="${iDribbble}"></a>
                           </div>
                           </div>
                   </div>
               </div>`;

      swiperWrapper.insertAdjacentHTML("beforeend", template);
    }
  }

  addTeam();

  /* Swiper Settings */

  var mySwiper = new Swiper(".swiper-container", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    centeredSlides: false,
    speed: 800,
    slidesPerView: 3,
    spaceBetween: 40,
    threshold: 5,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1180: {
        slidesPerView: 2,
        spaceBetween: 40,
        centeredSlides: false,
      },
      799: {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
      },
    },
  });

  /* Show More */

  var btnShow = document.querySelectorAll(".more");

  btnShow.forEach(function (el) {
    el.addEventListener("click", showMore);
  });

  function showMore(event) {
    var card = event.target.closest(".swiper-slide");

    if (card.classList.contains("show-more")) {
      card.classList.remove("show-more");
    } else {
      card.classList.add("show-more");
    }
  }

  /* Social Hover */
  var icon = document.querySelectorAll(".icon");

  icon.forEach(function (el) {
    el.addEventListener("mouseenter", followCursor);
  });

  function followCursor(event) {
    var pointer = event.currentTarget
        .closest(".swiper-slide")
        .querySelector(".pointer"),
      index = event.currentTarget.dataset.index,
      sizeIcon = 60 * index + 25;

    pointer.style.transform = `translateX(${sizeIcon}px)`;
  }

  /* end */
});
