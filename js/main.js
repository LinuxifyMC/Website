const maintxt_topbar = document.getElementById("maintxt_topbar");
const about_topbar = document.getElementById("about_topbar");
const github_logo = document.getElementById("github-logo");
const twitter_logo = document.getElementById("twitter-logo");

maintxt_topbar.addEventListener("click", () => {
    window.location.href = "/";
});
about_topbar.addEventListener("click", () => {
    window.location.href = "/about.php";
});
github_logo.addEventListener("click", () => {
    window.location.href = "https://github.com/LinuxifyMC";
});
twitter_logo.addEventListener("click", () => {
    window.location.href = "https://x.com/LinuxifyMC";
});