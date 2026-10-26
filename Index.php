<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adriel Pizza Haven.</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="loginPage" class="login-page">

        <div class="login-box">

            <div class="pizza-icon">🍕</div>

            <h1>Adriel Pizza Haven</h1>

            <h2>Customer Login</h2>

            <p>Login to access the pizza ordering system.</p>

            <form id="loginForm">

                <input
                    type="text"
                    id="loginName"
                    placeholder="Enter your name"
                >

                <input
                    type="email"
                    id="loginEmail"
                    placeholder="Enter your email"
                >

                <input
                    type="password"
                    id="loginPassword"
                    placeholder="Enter your password"
                >

                <input
                    type="number"
                    id="loginAge"
                    placeholder="Enter your age"
                >

                <button type="submit">
                    Login
                </button>

            </form>

            <p id="loginError"></p>

        </div>

    </section>


    <section id="orderingPage" class="hidden">

        <header>

            <div class="header-content">

                <div>

                    <h1>🍕 Adriel Pizza Haven</h1>

                    <p>
                        Choose your favorite pizza and place your order.
                    </p>

                </div>

                <button id="logoutBtn" class="logout-btn">
                    Logout
                </button>

            </div>

            <p id="welcomeUser"></p>

        </header>


        <main class="container">

            <section>

                <div class="section-title">

                    <h2>Our Pizza Menu</h2>

                    <p>
                        Select a pizza to start your order.
                    </p>

                </div>


                <div class="cards">


                    <div class="card">

                        <img
                            src="https://www.wellplated.com/wp-content/uploads/2024/05/Best-Mushroom-Pizza-Recipe.jpg"
                            alt="Mushroom Pizza"
                        >

                        <div class="card-content">

                            <h2>Mushroom Pizza</h2>

                            <p>
                                Fresh mushrooms, melted cheese,
                                and rich tomato sauce.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱250
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Mushroom Pizza"
                                    data-price="250"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <img
                            src="https://th.bing.com/th/id/OIP.GUtzz3zgkImN3_ikBYuNfgHaE8?w=259&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="Cheese Pizza"
                        >

                        <div class="card-content">

                            <h2>Cheese Pizza</h2>

                            <p>
                                A classic pizza with delicious
                                tomato sauce and melted cheese.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱220
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Cheese Pizza"
                                    data-price="220"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <img
                            src="https://tse3.mm.bing.net/th/id/OIP.5ss0Np4_jqHlZAkJsGsrTQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
                            alt="Pepperoni Pizza"
                        >

                        <div class="card-content">

                            <h2>Pepperoni Pizza</h2>

                            <p>
                                Flavorful pepperoni with tomato
                                sauce and melted cheese.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱280
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Pepperoni Pizza"
                                    data-price="280"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <img
                            src="https://img.kidspot.com.au/pZnR2nZu/kk/2015/03/hawaiian-pizza-recipe-605894-2.jpg"
                            alt="Hawaiian Pizza"
                        >

                        <div class="card-content">

                            <h2>Hawaiian Pizza</h2>

                            <p>
                                Ham, pineapple, tomato sauce,
                                and melted cheese.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱270
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Hawaiian Pizza"
                                    data-price="270"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <img
                            src="https://www.tastekahani.com/wp-content/uploads/2022/05/60.Supreme-Pizza.jpg"
                            alt="Supreme Pizza"
                        >

                        <div class="card-content">

                            <h2>Supreme Pizza</h2>

                            <p>
                                A loaded pizza with different
                                toppings and melted cheese.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱320
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Supreme Pizza"
                                    data-price="320"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <img
                            src="https://quickrrecipes.com/wp-content/uploads/2025/04/u1523819493_please_create_me_image_of_Barbecue_Bacon_Pizza_by_5cc19893-360c-47ec-83bc-753bc6364848_0-11.webp"
                            alt="Bacon Pizza"
                        >

                        <div class="card-content">

                            <h2>Bacon Pizza</h2>

                            <p>
                                Crispy bacon with tomato sauce
                                and melted cheese.
                            </p>

                            <div class="pizza-bottom">

                                <span class="price">
                                    ₱300
                                </span>

                                <button
                                    class="orderBtn"
                                    data-pizza="Bacon Pizza"
                                    data-price="300"
                                >
                                    Order
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <section class="order-section">

                <h2>Pizza Order Form</h2>

                <p class="form-description">
                    Enter your information and complete your order.
                </p>


                <form id="orderForm">

                    <label for="fullName">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullName"
                        placeholder="Enter your full name"
                    >


                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Enter your email"
                    >


                    <label for="selectedPizza">
                        Selected Pizza
                    </label>

                    <input
                        type="text"
                        id="selectedPizza"
                        placeholder="Click Order on a pizza above"
                        readonly
                    >


                    <label for="quantity">
                        Quantity
                    </label>

                    <input
                        type="number"
                        id="quantity"
                        min="1"
                        value="1"
                    >


                    <label for="rating">
                        Food Rating
                    </label>

                    <select id="rating">

                        <option value="">
                            Select a rating
                        </option>

                        <option value="5">
                            ⭐⭐⭐⭐⭐ Excellent
                        </option>

                        <option value="4">
                            ⭐⭐⭐⭐ Good
                        </option>

                        <option value="3">
                            ⭐⭐⭐ Average
                        </option>

                        <option value="2">
                            ⭐⭐ Poor
                        </option>

                        <option value="1">
                            ⭐ Very Poor
                        </option>

                    </select>


                    <button
                        type="submit"
                        class="place-order-btn"
                    >
                        Place Order
                    </button>

                    <p id="orderError"></p>

                </form>


                <div id="orderResult" class="hidden">

                    <h3>✅ Order Successful!</h3>

                    <p>
                        <strong>Customer:</strong>
                        <span id="orderName"></span>
                    </p>

                    <p>
                        <strong>Pizza:</strong>
                        <span id="orderPizza"></span>
                    </p>

                    <p>
                        <strong>Quantity:</strong>
                        <span id="orderQuantity"></span>
                    </p>

                    <p>
                        <strong>Food Rating:</strong>
                        <span id="orderRating"></span>
                    </p>

                    <p>
                        <strong>Total:</strong>
                        ₱<span id="orderTotal"></span>
                    </p>

                </div>

            </section>

        </main>


        <footer>

            <p>
                © 2026 Adriel Pizza Haven
            </p>

        </footer>

    </section>


    <script src="script.js"></script>

</body>

</html>