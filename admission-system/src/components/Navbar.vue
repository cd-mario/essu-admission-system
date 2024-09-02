


<template>
    <header>
        <div class="logo">
            <img src="../assets/image/essu.png" alt="essu logo">
        </div>
        <nav>
            <ul>
                <li>
                    <RouterLink :to="{name: 'home'}">Home</RouterLink>
                </li>
                <li>
                    <RouterLink :to="{name: 'procedure'}">Admission procedure</RouterLink>
                </li>
                <li>
                    <RouterLink :to="{name: 'form'}">Admission form</RouterLink>
                </li>
            </ul>
        </nav>
    </header>
</template>
<style scoped>
    .logo {
        background: green;
        text-align: center;
    }
    .logo img {
        width: 600px;
    }
    nav {

        background: rgba(0, 0, 0, 0.9);
    }
    ul {
        display: flex;
        list-style: none;
        justify-content: center;
        justify-content: space-evenly;
        height: 3rem;
    }
    li {
        position: relative;
        top: 1rem;

    }
    a {
        text-decoration: none;
        color: #76BA1B;
        font-weight: 700;
        text-transform: uppercase;
        padding: 1rem 0.3rem 0.8rem 0.3rem;
    }
    a:hover {
        background: #76BA1B;
        color: rgba(0, 0, 0, 0.7);
    }
</style>