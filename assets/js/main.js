/**
 * Scripts publics du thème.
 */

/**
 * Indique le lien actif dans la navigation principale.
 */
function setActiveNavigationLink() {
    const navigation = document.querySelector(".site-header__navigation");

    if (!navigation) {
        return;
    }

    const currentPath = normalizePath(window.location.pathname);
    const links = navigation.querySelectorAll("a[href]");

    links.forEach((link) => {
        const linkUrl = new URL(link.href, window.location.origin);
        const linkPath = normalizePath(linkUrl.pathname);

        link.removeAttribute("aria-current");
        link.closest(".wp-block-navigation-item")?.classList.remove("is-current");

        if (linkPath === currentPath) {
            link.setAttribute("aria-current", "page");
            link.closest(".wp-block-navigation-item")?.classList.add("is-current");
        }
    });
}

/**
 * Normalise une URL pour comparer proprement les chemins.
 *
 * /contact et /contact/ sont ainsi considérés comme identiques.
 *
 * @param {string} path Chemin à normaliser.
 * @returns {string}
 */
function normalizePath(path) {
    if (path === "/") {
        return "/";
    }

    return path.replace(/\/+$/, "");
}

document.addEventListener("DOMContentLoaded", () => {
    setActiveNavigationLink();
});