// 全ての処理を DOMContentLoaded の中にまとめることで、変数の衝突（エラー）を防ぎます
document.addEventListener("DOMContentLoaded", () => {
  // =========================================================
  // 1. ヘッダーのスクロール処理
  // =========================================================
  const headerElement = document.querySelector(".l-header");

  // ヘッダーが存在する場合のみ処理を実行
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
    // メニューの開閉処理
    const toggleMenu = () => {
      console.log("ハンバーガーがクリックされました！");
      const isExpanded = hamburger.getAttribute("aria-expanded") === "true";

      // WAI-ARIA属性の更新（アクセシビリティ対応）
      hamburger.setAttribute("aria-expanded", !isExpanded);
      drawer.setAttribute("aria-hidden", isExpanded);

      // クラスの切り替え（アニメーション発火）
      hamburger.classList.toggle("is-active");
      drawer.classList.toggle("is-active");
      overlay.classList.toggle("is-active");

      // 背景のスクロールロックを切り替え
      document.body.classList.toggle("is-locked");
    };

    // メニューを閉じる専用処理
    const closeMenu = () => {
      hamburger.setAttribute("aria-expanded", "false");
      drawer.setAttribute("aria-hidden", "true");

      hamburger.classList.remove("is-active");
      drawer.classList.remove("is-active");
      overlay.classList.remove("is-active");

      document.body.classList.remove("is-locked");
    };

    // ハンバーガーボタンのクリックイベント
    hamburger.addEventListener("click", toggleMenu);

    // オーバーレイ（背景暗幕）クリックで閉じる
    overlay.addEventListener("click", closeMenu);

    // ドロワー内のリンク（ページ内アンカー等）をクリックしたら閉じる
    drawerLinks.forEach((link) => {
      link.addEventListener("click", closeMenu);
    });
  }

  // =========================================================
  // 3. ヒーロースライダー処理
  // =========================================================
  const slides = document.querySelectorAll(".js-hero-slide");
  const slideCount = slides.length;

  // スライドが2枚以上ある場合のみ実行
  if (slideCount > 1) {
    let currentSlideIndex = 0; // 他の処理と変数名が被らないように変更

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
});
