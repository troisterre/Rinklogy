document.addEventListener("DOMContentLoaded", () => {
  const list = document.querySelector(".js-scroll-list");

  if (!list) return;

  let isAnimating = false;
  let startY = 0;
  const animDuration = 600;

  // --- オートプレイ用の変数 ---
  let autoPlayInterval;
  const autoPlayDelay = 3000; // 3秒ごとに自動で回る

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

  // === オートプレイの制御 ===

  // オートプレイを開始する関数
  function startAutoPlay() {
    // 既存のタイマーがあればクリアして重複を防ぐ
    stopAutoPlay();
    autoPlayInterval = setInterval(() => {
      nextSlide();
    }, autoPlayDelay);
  }

  // オートプレイを停止する関数
  function stopAutoPlay() {
    if (autoPlayInterval) {
      clearInterval(autoPlayInterval);
    }
  }

  // ユーザーが手動操作した時、一時的にオートプレイを止めて再開する処理
  function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay(); // 指定秒数(autoPlayDelay)後に再開される
  }

  // === スワイプ・スクロールのイベントリスナー ===

  list.addEventListener("touchstart", (e) => {
    startY = e.touches[0].clientY;
    stopAutoPlay(); // タッチ中はオートプレイを止める
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
    resetAutoPlay(); // 指が離れたらタイマーをリセットして再開
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
      resetAutoPlay(); // ホイール操作後もタイマーをリセット
    },
    { passive: false }
  );

  // 初期化
  updateCards();
  startAutoPlay(); // 読み込み完了と同時にオートプレイ開始
});
