document.addEventListener('DOMContentLoaded', () => {
    const maintxt_topbar = document.getElementById("maintxt_topbar");
    const about_topbar = document.getElementById("about_topbar");
    const github_logo = document.getElementById("github-logo");
    const twitter_logo = document.getElementById("twitter-logo");

    if (maintxt_topbar) {
        maintxt_topbar.addEventListener("click", () => {
            window.location.href = "/";
        });
    }

    if (about_topbar) {
        about_topbar.addEventListener("click", () => {
            window.location.href = "/about.php";
        });
    }

    if (github_logo) {
        github_logo.addEventListener("click", () => {
            window.location.href = "https://github.com/LinuxifyMC";
        });
    }

    if (twitter_logo) {
        twitter_logo.addEventListener("click", () => {
            window.location.href = "https://x.com/LinuxifyMC";
        });
    }
});