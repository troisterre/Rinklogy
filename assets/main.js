document.addEventListener("DOMContentLoaded", () => {
  // =========================================================
  // 1. ヘッダーのスクロール処理
  // =========================================================
  const headerElement = document.querySelector(".l-header");

  if (headerElement) {
    window.addEventListener("scroll", function () {
      const scrollY = window.scrollY;
      const headerHeight = 80;

      if (scrollY > headerHeight) {
        headerElement.classList.add("is-scrolled");
      } else {
        headerElement.classList.remove("is-scrolled");
      }
    });
  }

  // =========================================================
  // 2. ハンバーガーメニュー・ドロワー処理
  // =========================================================
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const overlay = document.querySelector(".js-overlay");
  const drawerLinks = drawer ? drawer.querySelectorAll("a") : [];

  if (hamburger && drawer && overlay) {
    const toggleMenu = () => {
      const isExpanded = hamburger.getAttribute("aria-expanded") === "true";

      hamburger.setAttribute("aria-expanded", !isExpanded);
      drawer.setAttribute("aria-hidden", isExpanded);

      hamburger.classList.toggle("is-active");
      drawer.classList.toggle("is-active");
      overlay.classList.toggle("is-active");

      document.body.classList.toggle("is-locked");
    };

    const closeMenu = () => {
      hamburger.setAttribute("aria-expanded", "false");
      drawer.setAttribute("aria-hidden", "true");

      hamburger.classList.remove("is-active");
      drawer.classList.remove("is-active");
      overlay.classList.remove("is-active");

      document.body.classList.remove("is-locked");
    };

    hamburger.addEventListener("click", toggleMenu);
    overlay.addEventListener("click", closeMenu);

    drawerLinks.forEach((link) => {
      link.addEventListener("click", closeMenu);
    });
  }

  // =========================================================
  // 3. ヒーロースライダー処理
  // =========================================================
  const slides = document.querySelectorAll(".js-hero-slide");
  const slideCount = slides.length;

  if (slideCount > 1) {
    let currentSlideIndex = 0;

    const showNextSlide = () => {
      slides[currentSlideIndex].classList.remove("is-active");
      currentSlideIndex = (currentSlideIndex + 1) % slideCount;
      slides[currentSlideIndex].classList.add("is-active");
    };

    setInterval(showNextSlide, 4000);
  }

  // =========================================================
  // 4. 縦スクロールリスト処理
  // =========================================================
  const list = document.querySelector(".js-scroll-list");

  if (list) {
    let isAnimating = false;
    let startY = 0;
    const animDuration = 600;

    let autoPlayInterval;
    const autoPlayDelay = 3000;

    function updateCards() {
      const cards = Array.from(list.querySelectorAll(".js-scroll-item"));

      cards.forEach((card) => {
        card.classList.remove(
          "is-hidden-top",
          "is-prev",
          "is-active",
          "is-next",
          "is-hidden-bottom"
        );
      });

      if (cards.length >= 5) {
        cards[0].classList.add("is-hidden-top");
        cards[1].classList.add("is-prev");
        cards[2].classList.add("is-active");
        cards[3].classList.add("is-next");
        cards[4].classList.add("is-hidden-bottom");
      }
    }

    function nextSlide() {
      if (isAnimating) return;
      isAnimating = true;

      const firstCard = list.firstElementChild;
      list.appendChild(firstCard);
      updateCards();

      setTimeout(() => {
        isAnimating = false;
      }, animDuration);
    }

    function prevSlide() {
      if (isAnimating) return;
      isAnimating = true;

      const lastCard = list.lastElementChild;
      list.prepend(lastCard);
      updateCards();

      setTimeout(() => {
        isAnimating = false;
      }, animDuration);
    }

    function startAutoPlay() {
      stopAutoPlay();
      autoPlayInterval = setInterval(() => {
        nextSlide();
      }, autoPlayDelay);
    }

    function stopAutoPlay() {
      if (autoPlayInterval) {
        clearInterval(autoPlayInterval);
      }
    }

    function resetAutoPlay() {
      stopAutoPlay();
      startAutoPlay();
    }

    list.addEventListener("touchstart", (e) => {
      startY = e.touches[0].clientY;
      stopAutoPlay();
    });

    list.addEventListener(
      "touchmove",
      (e) => {
        e.preventDefault();
      },
      { passive: false }
    );

    list.addEventListener("touchend", (e) => {
      const endY = e.changedTouches[0].clientY;
      const diffY = startY - endY;

      if (Math.abs(diffY) > 30) {
        if (diffY > 0) {
          nextSlide();
        } else {
          prevSlide();
        }
      }
      resetAutoPlay();
    });

    list.addEventListener(
      "wheel",
      (e) => {
        e.preventDefault();
        if (e.deltaY > 0) {
          nextSlide();
        } else if (e.deltaY < 0) {
          prevSlide();
        }
        resetAutoPlay();
      },
      { passive: false }
    );

    updateCards();
    startAutoPlay();
  }

  // =========================================================
  // 5. ご相談スライダー（横スクロール制御）
  // =========================================================
  const consultSliderList = document.querySelector(".js-slider-list");

  if (consultSliderList) {
    const prevBtnSp = document.querySelector(".js-consult-prev-sp");
    const nextBtnSp = document.querySelector(".js-consult-next-sp");
    const prevBtnPc = document.querySelector(".js-consult-prev");
    const nextBtnPc = document.querySelector(".js-consult-next");
    const dots = document.querySelectorAll(".js-consult-dot");
    const items = consultSliderList.querySelectorAll(".js-slider-item");

    const scrollSlider = (direction) => {
      const item = items[0];
      if (!item) return;

      const itemWidth = item.offsetWidth;
      const gap = parseInt(window.getComputedStyle(consultSliderList).gap) || 0;
      const scrollAmount = itemWidth + gap;

      consultSliderList.scrollBy({
        left: direction === "next" ? scrollAmount : -scrollAmount,
        behavior: "smooth",
      });
    };

    const updateDots = () => {
      if (dots.length === 0 || items.length === 0) return;

      const scrollLeft = consultSliderList.scrollLeft;
      const itemWidth = items[0].offsetWidth;
      const gap = parseInt(window.getComputedStyle(consultSliderList).gap) || 0;

      const currentIndex = Math.round(scrollLeft / (itemWidth + gap));

      dots.forEach((dot, index) => {
        if (index === currentIndex) {
          dot.classList.add("is-active");
        } else {
          dot.classList.remove("is-active");
        }
      });
    };

    if (prevBtnSp)
      prevBtnSp.addEventListener("click", () => scrollSlider("prev"));
    if (nextBtnSp)
      nextBtnSp.addEventListener("click", () => scrollSlider("next"));
    if (prevBtnPc)
      prevBtnPc.addEventListener("click", () => scrollSlider("prev"));
    if (nextBtnPc)
      nextBtnPc.addEventListener("click", () => scrollSlider("next"));

    consultSliderList.addEventListener("scroll", () => {
      clearTimeout(consultSliderList.scrollTimeout);
      consultSliderList.scrollTimeout = setTimeout(updateDots, 100);
    });
  }
});
// =========================================================
// 6. 支援事例スライダー（横スクロール制御）
// =========================================================
{
  // ★ 変数の重複を防ぐためにブロックで囲んでいます
  const supportSliderList = document.querySelector(".js-support-slider-list");

  if (supportSliderList) {
    const prevBtn = document.querySelector(".js-support-prev");
    const nextBtn = document.querySelector(".js-support-next");
    const dots = document.querySelectorAll(".js-support-dot");
    const items = supportSliderList.querySelectorAll(".js-support-slider-item");

    const scrollSlider = (direction) => {
      const item = items[0];
      if (!item) return;

      const itemWidth = item.offsetWidth;
      const gap = parseInt(window.getComputedStyle(supportSliderList).gap) || 0;
      const scrollAmount = itemWidth + gap;

      supportSliderList.scrollBy({
        left: direction === "next" ? scrollAmount : -scrollAmount,
        behavior: "smooth",
      });
    };

    const updateDots = () => {
      if (dots.length === 0 || items.length === 0) return;

      const scrollLeft = supportSliderList.scrollLeft;
      const itemWidth = items[0].offsetWidth;
      const gap = parseInt(window.getComputedStyle(supportSliderList).gap) || 0;

      const currentIndex = Math.round(scrollLeft / (itemWidth + gap));

      dots.forEach((dot, index) => {
        if (index === currentIndex) {
          dot.classList.add("is-active");
        } else {
          dot.classList.remove("is-active");
        }
      });
    };

    if (prevBtn) prevBtn.addEventListener("click", () => scrollSlider("prev"));
    if (nextBtn) nextBtn.addEventListener("click", () => scrollSlider("next"));

    supportSliderList.addEventListener("scroll", () => {
      clearTimeout(supportSliderList.scrollTimeout);
      supportSliderList.scrollTimeout = setTimeout(updateDots, 100);
    });
  }
}
