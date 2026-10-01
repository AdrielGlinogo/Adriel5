const loginForm =
    document.getElementById("loginForm");

const loginName =
    document.getElementById("loginName");

const loginAge =
    document.getElementById("loginAge");

const loginError =
    document.getElementById("loginError");

const loginPage =
    document.getElementById("loginPage");

const orderingPage =
    document.getElementById("orderingPage");

const welcomeUser =
    document.getElementById("welcomeUser");


function createGreeting(name, age) {

    if (age >= 18) {

        return "Hello, " + name + "! You are an adult.";

    } else {

        return "Hello, " + name + "! You are a minor.";

    }

}


loginForm.addEventListener("submit", function(event) {

    event.preventDefault();

    const name =
        loginName.value.trim();

    const age =
        Number(loginAge.value);


    if (
        name === "" ||
        loginAge.value === ""
    ) {

        loginError.textContent =
            "Please enter your name and age.";

        return;
    }


    if (age < 0) {

        loginError.textContent =
            "Please enter a valid age.";

        return;
    }


    const greeting =
        createGreeting(name, age);


    loginError.textContent = "";


    loginPage.classList.add("hidden");

    orderingPage.classList.remove("hidden");


    welcomeUser.textContent =
        greeting +
        " Welcome to Adriel Pizza Haven.";

});


const logoutBtn =
    document.getElementById("logoutBtn");


logoutBtn.addEventListener("click", function() {

    orderingPage.classList.add("hidden");

    loginPage.classList.remove("hidden");

    loginName.value = "";

    loginAge.value = "";

    loginError.textContent = "";

});


const orderButtons =
    document.querySelectorAll(".orderBtn");

const selectedPizza =
    document.getElementById("selectedPizza");

let selectedPrice = 0;


orderButtons.forEach(function(button) {

    button.addEventListener("click", function() {

        const pizzaName =
            button.dataset.pizza;

        selectedPrice =
            Number(button.dataset.price);

        selectedPizza.value =
            pizzaName;


        document
            .querySelector(".order-section")
            .scrollIntoView({
                behavior: "smooth"
            });

    });

});


const orderForm =
    document.getElementById("orderForm");

const fullName =
    document.getElementById("fullName");

const email =
    document.getElementById("email");

const quantity =
    document.getElementById("quantity");

const rating =
    document.getElementById("rating");

const orderError =
    document.getElementById("orderError");

const orderResult =
    document.getElementById("orderResult");

const orderName =
    document.getElementById("orderName");

const orderPizza =
    document.getElementById("orderPizza");

const orderQuantity =
    document.getElementById("orderQuantity");

const orderRating =
    document.getElementById("orderRating");

const orderTotal =
    document.getElementById("orderTotal");


orderForm.addEventListener("submit", function(event) {

    event.preventDefault();


    const name =
        fullName.value.trim();

    const userEmail =
        email.value.trim();

    const qty =
        Number(quantity.value);


    if (
        name === "" ||
        userEmail === "" ||
        selectedPizza.value === "" ||
        rating.value === ""
    ) {

        orderError.textContent =
            "Please complete all fields and select a rating.";

        orderResult.classList.add("hidden");

        return;
    }


    if (qty < 1) {

        orderError.textContent =
            "Please enter a valid quantity.";

        orderResult.classList.add("hidden");

        return;
    }


    const total =
        selectedPrice * qty;


    let ratingText = "";


    if (rating.value === "5") {

        ratingText =
            "⭐⭐⭐⭐⭐ Excellent";

    } else if (rating.value === "4") {

        ratingText =
            "⭐⭐⭐⭐ Good";

    } else if (rating.value === "3") {

        ratingText =
            "⭐⭐⭐ Average";

    } else if (rating.value === "2") {

        ratingText =
            "⭐⭐ Poor";

    } else if (rating.value === "1") {

        ratingText =
            "⭐ Very Poor";

    }


    orderError.textContent = "";


    orderName.textContent =
        name;

    orderPizza.textContent =
        selectedPizza.value;

    orderQuantity.textContent =
        qty;

    orderRating.textContent =
        ratingText;

    orderTotal.textContent =
        total;


    orderResult.classList.remove("hidden");

});