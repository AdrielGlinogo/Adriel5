const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const categorySelect = document.getElementById("category");
const ratingInput = document.getElementById("rating");
const messageInput = document.getElementById("message");

const submitBtn = document.getElementById("submitBtn");
const errorMsg = document.getElementById("errorMsg");
const outputContainer = document.getElementById("outputContainer");

const outName = document.getElementById("outName");
const outEmail = document.getElementById("outEmail");
const outCategory = document.getElementById("outCategory");
const outRating = document.getElementById("outRating");
const outMessage = document.getElementById("outMessage");

submitBtn.addEventListener("click", function(event) {
    event.preventDefault();

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const category = categorySelect.value;
    const rating = ratingInput.value;
    const message = messageInput.value.trim();

    if (name === "" || email === "" || category === "" || rating === "" || message === "") {
        errorMsg.textContent = "Please fill in all 5 fields completely.";
        outputContainer.classList.add("hidden");
        return;
    }

    if (rating < 1 || rating > 5) {
        errorMsg.textContent = "Please enter a rating between 1 and 5.";
        outputContainer.classList.add("hidden");
        return;
    }

    errorMsg.textContent = "";

    outName.textContent = name;
    outEmail.textContent = email;
    outCategory.textContent = category;
    outRating.textContent = rating;
    outMessage.textContent = message;

    outputContainer.classList.remove("hidden");
});