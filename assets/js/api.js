// require("dotenv").config({ path: "../../.env" });

// const api_key = process.env.IMDB_API_KEY ? 'f7182b2d73f71e8efc8c7b11f99cdb8e' ;
const api_key = "f7182b2d73f71e8efc8c7b11f99cdb8e";

const getBanner = async () => {
  const response = await fetch(
    `https://api.themoviedb.org/3/discover/tv?api_key=${api_key}&with_networks=213&language=en-US`
  );
  const data = await response.json();
  return data.results[Math.floor(Math.random() * data.results.length - 1)];
};

export { getBanner };
