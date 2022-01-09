export default function reviews() {
  const reviewsArray = document.querySelectorAll('.review');
  const starsWrapper = document.querySelectorAll('.review-stars');
  const buttonLeft = document.querySelector('.reviews-left');
  const buttonRight = document.querySelector('.reviews-right');
  let actualReview = 0;

  if (reviewsArray.length === 0 || !buttonLeft || !buttonRight) return null;

  reviewsArray[0].classList.add('active');

  reviewsArray.forEach((review, index) => {
    const stars = review.getAttribute('data-stars');
    const negativeStars = 5 - stars;

    for (let i = 0; i < stars; i++) {
      const filledStar = document.createElement('img');
      filledStar.setAttribute('src', `${template_URL}/img/src/star.svg`);

      starsWrapper[index].appendChild(filledStar);
    }

    for (let i = 0; i < negativeStars; i++) {
      const outlineStar = document.createElement('img');
      outlineStar.setAttribute('src', `${template_URL}/img/src/star-outline.svg`);

      starsWrapper[index].appendChild(outlineStar);
    }
  });

  buttonLeft.addEventListener('click', e => {
    actualReview = actualReview === 0 ? reviewsArray.length - 1 : actualReview - 1;

    reviewsArray.forEach((review, index) => {
      review.classList.remove('active');

      if (index === actualReview) {
        review.classList.add('active');
      }
    });
  });

  buttonRight.addEventListener('click', e => {
    actualReview = actualReview === reviewsArray.length - 1 ? 0 : actualReview + 1;

    reviewsArray.forEach((review, index) => {
      review.classList.remove('active');

      if (index === actualReview) {
        review.classList.add('active');
      }
    });
  });
}
