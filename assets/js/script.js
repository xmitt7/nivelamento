const menuOpenButton= document.querySelector("#menu-open-button");
const menuCloseButton= document.querySelector("#menu-close-button");

menuOpenButton.addEventListener("click", ()=> {
    document.body.classList.toggle("show-mobile-menu");
});
//fechar menu quando o bottao do fechar é clicavel
menuCloseButton.addEventListener("click", () => menuOpenButton.click());