import { getBanner } from "./api.js";

const home__banner = document.getElementById("home__banner");
const banner__title = document.getElementById("banner__title");
const bannerOverview = document.getElementById("banner__overview");
const categoryCards = document.querySelectorAll("[data-type]");

const imagePath = "https://image.tmdb.org/t/p/original/";

const getRandomMovie = async () => {
  const movieData = await getBanner();

  //   banner.src = `${imagePath}${movieData.backdrop_path}`;
  console.log(movieData);
  home__banner.style.backgroundImage = `url(${imagePath}${
    movieData?.backdrop_path || movieData?.poster_path
  })`;
  banner__title.textContent = movieData.name;
  bannerOverview.textContent = movieData.overview;
  return movieData;
};

categoryCards.forEach((categoryCard) => {
  categoryCard.addEventListener("mouseover", (e) => {
    if (e.target.className === "category__img") {
      const video = e.target.parentNode.querySelector("[autoplay]");
      video.classList.remove("hide");
    }
  });
  categoryCard.addEventListener("mouseout", (e) => {
    if (e.target.className === "category__img") {
      const video = e.target.parentNode.querySelector("[autoplay]");
      video.classList.add("hide");
    }
  });
});

getRandomMovie();
