require("dotenv").config({ path: "../../.env" });

const api_key = process.env.MOVIEDB_API_KEY;

const getBanner = async () => {
  const response = await fetch(
    `https://api.themoviedb.org/3/trending/all/week?api_key=${api_key}&language=en-US`
  );
  const data = await response.json();
  return data.results[Math.floor(Math.random() * data.results.length - 1)];
};

export { getBanner };
