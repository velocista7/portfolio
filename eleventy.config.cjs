// eleventy.config.cjs
module.exports = function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("src/static"); // src/static → dist/static
  eleventyConfig.addPassthroughCopy("src/css");    // src/css  → dist/css
  eleventyConfig.addPassthroughCopy("src/js");     // src/js   → dist/js

  return {
    dir: {
      input: "src",
      output: "docs",
      includes: "_includes",
      layouts: "_includes"
    },
    templateFormats: ["njk", "html", "md"]
  };
};
