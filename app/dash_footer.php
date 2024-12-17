<script>
    const nav = document.getElementsByClassName("navigation");

    let theNav = Array.from(nav);
    let links = [];

    theNav.forEach(element => {
        links.push(element.getAttribute("href"));
    });
    console.log(theNav[2]);

    let link = window.location.pathname;

    switch (link) {
        case "/pages/players_list.php":
            theNav[1].classList.remove("active");
            theNav[2].classList.remove("active");
            theNav[0].classList.add("active");
            break;
        case "/pages/nationalities.php":
            theNav[0].classList.remove("active");
            theNav[2].classList.remove("active");
            theNav[1].classList.add("active");
            break;
        case "/pages/clubs.php":
            theNav[0].classList.remove("active");
            theNav[1].classList.remove("active");
            theNav[2].classList.add("active");
            break;

        default:
            theNav[0].classList.add("active");
            break;
    }
</script>

</body>

</html>