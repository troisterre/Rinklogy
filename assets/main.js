document.addEventListener("DOMContentLoaded", () => {
  // =========================================================
  // 1. ヘッダーのスクロール処理
  // =========================================================
  const headerElement = document.querySelector(".l-header");

  // ★修正: { が抜けて構文エラーになっていたのを修正しました
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

    // =====================================
    // ★追加: 画面サイズ変更時のリセット処理
    // =====================================
    const mediaQuery = window.matchMedia("(min-width: 768px)"); // タブレットのブレイクポイント

    const handleResize = (e) => {
      // 画面幅が768px以上になり、かつメニューが開いている場合のみ閉じる
      if (e.matches && hamburger.classList.contains("is-active")) {
        closeMenu();
      }
    };

    // 画面幅が変わった時に判定を実行
    mediaQuery.addEventListener("change", handleResize);
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
  // 4. 縦スクロールリスト処理（ドット連動版）
  // =========================================================
  const list = document.querySelector(".js-scroll-list");

  if (list) {
    let isAnimating = false;
    const animDuration = 600;
    let autoPlayInterval;
    const autoPlayDelay = 3000;

    let currentIndex = 0;

    const cards = Array.from(list.querySelectorAll(".js-scroll-item"));
    const dots = Array.from(document.querySelectorAll(".js-scroll-dot")); // 全体からドットを取得
    const total = cards.length;

    function updateCards() {
      if (total < 5) return;

      cards.forEach((card) => {
        card.classList.remove(
          "is-hidden-top",
          "is-prev",
          "is-active",
          "is-next",
          "is-hidden-bottom"
        );
      });

      requestAnimationFrame(() => {
        const activeIdx = currentIndex;
        const prevIdx = (currentIndex - 1 + total) % total;
        const nextIdx = (currentIndex + 1) % total;
        const hiddenTopIdx = (currentIndex - 2 + total) % total;
        const hiddenBottomIdx = (currentIndex + 2) % total;

        cards[hiddenTopIdx].classList.add("is-hidden-top");
        cards[prevIdx].classList.add("is-prev");
        cards[activeIdx].classList.add("is-active");
        cards[nextIdx].classList.add("is-next");
        cards[hiddenBottomIdx].classList.add("is-hidden-bottom");

        if (dots.length > 0) {
          dots.forEach((dot, index) => {
            if (index === currentIndex) {
              dot.classList.add("is-active");
            } else {
              dot.classList.remove("is-active");
            }
          });
        }
      });
    }

    function nextSlide() {
      if (isAnimating) return;
      isAnimating = true;

      currentIndex = (currentIndex + 1) % total;
      updateCards();

      setTimeout(() => {
        isAnimating = false;
      }, animDuration);
    }

    if (dots.length > 0) {
      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          if (isAnimating || currentIndex === index) return;
          isAnimating = true;

          currentIndex = index;
          updateCards();
          resetAutoPlay();

          setTimeout(() => {
            isAnimating = false;
          }, animDuration);
        });
      });
    }

    function startAutoPlay() {
      stopAutoPlay();
      autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
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

    updateCards();
    startAutoPlay();

    list.addEventListener("mouseenter", stopAutoPlay);
    list.addEventListener("mouseleave", startAutoPlay);
    list.addEventListener("touchstart", stopAutoPlay, { passive: true });
    list.addEventListener("touchend", startAutoPlay, { passive: true });
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

    // ★修正: 親枠ではなく、中に入っている個別のドット(.c-dot)を正しく取得
    const dotsContainer = document.querySelector(".js-consult-dot");
    const dots = dotsContainer ? dotsContainer.querySelectorAll(".c-dot") : [];

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
      const maxScrollLeft =
        consultSliderList.scrollWidth - consultSliderList.clientWidth;
      const itemWidth = items[0].offsetWidth;
      const gap = parseInt(window.getComputedStyle(consultSliderList).gap) || 0;

      let currentIndex = Math.round(scrollLeft / (itemWidth + gap));

      if (scrollLeft >= maxScrollLeft - 10) {
        currentIndex = dots.length - 1;
      }

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
      consultSliderList.scrollTimeout = setTimeout(updateDots, 50);
    });

    updateDots();
  }

  // =========================================================
  // 6. 支援事例スライダー（横スクロール制御）
  // =========================================================
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
      const maxScrollLeft =
        supportSliderList.scrollWidth - supportSliderList.clientWidth;
      const itemWidth = items[0].offsetWidth;
      const gap = parseInt(window.getComputedStyle(supportSliderList).gap) || 0;

      let currentIndex = Math.round(scrollLeft / (itemWidth + gap));

      if (scrollLeft >= maxScrollLeft - 10) {
        currentIndex = dots.length - 1;
      }

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
      supportSliderList.scrollTimeout = setTimeout(updateDots, 50);
    });

    updateDots();
  }

  // =========================================================
  // 7. フローセクション（アコーディオン）処理
  // =========================================================
  const flowItems = document.querySelectorAll(".p-flow-item");

  flowItems.forEach((item) => {
    // クラス名を dt と dd に変更
    const dt = item.querySelector(".p-flow-item__dt");
    const dd = item.querySelector(".p-flow-item__dd");

    if (!dt || !dd) return;

    let isAnimating = false;

    dt.addEventListener("click", (e) => {
      e.preventDefault();
      if (isAnimating) return;
      isAnimating = true;

      const isOpen = item.classList.contains("is-open");

      if (isOpen) {
        // 【閉じる時】
        item.classList.remove("is-open");

        const animation = dd.animate(
          { height: [`${dd.scrollHeight}px`, "0px"] },
          { duration: 300, easing: "ease-out" }
        );

        animation.onfinish = () => {
          dd.style.display = "none";
          isAnimating = false;
        };
      } else {
        // 【開く時】
        item.classList.add("is-open");
        dd.style.display = "block";

        const animation = dd.animate(
          { height: ["0px", `${dd.scrollHeight}px`] },
          { duration: 300, easing: "ease-out" }
        );

        animation.onfinish = () => {
          dd.style.height = "auto";
          isAnimating = false;
        };
      }
    });
  });
});
// =========================================================
// 8. サービスセクション（アコーディオン）処理
// =========================================================
const serviceAccordions = document.querySelectorAll(".js-accordion");

serviceAccordions.forEach((item) => {
  const trigger = item.querySelector(".js-accordion-trigger");
  const body = item.querySelector(".js-accordion-body");

  if (!trigger || !body) return;

  let isAnimating = false;

  trigger.addEventListener("click", (e) => {
    e.preventDefault();
    // アニメーション中の連打防止
    if (isAnimating) return;
    isAnimating = true;

    const isOpen = item.classList.contains("is-open");

    if (isOpen) {
      // 【閉じる時】
      item.classList.remove("is-open");

      const animation = body.animate(
        { height: [`${body.scrollHeight}px`, "0px"] },
        { duration: 300, easing: "ease-out" }
      );

      animation.onfinish = () => {
        body.style.display = "none";
        isAnimating = false;
      };
    } else {
      // 【開く時】
      item.classList.add("is-open");
      body.style.display = "block";

      const animation = body.animate(
        { height: ["0px", `${body.scrollHeight}px`] },
        { duration: 300, easing: "ease-out" }
      );

      animation.onfinish = () => {
        body.style.height = "auto";
        isAnimating = false;
      };
    }
  });
});
