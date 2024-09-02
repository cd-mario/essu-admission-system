


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
        background: darkgreen;
        text-align: center;
    }
    .logo img {
        width: 500px;
    }
    nav {
        background: #161b22;
    }
    ul {
        display: flex;
        list-style: none;
        justify-content: center;
        justify-content: space-evenly;
        height: 2rem;
    }
    li {
        position: relative;
        top: 0.4rem;
    }
    a {
        font-size: 0.9rem;
        text-decoration: none;
        color: #76BA1B;
        font-weight: 600;
        text-transform: uppercase;
        padding: 0.5rem 0.3rem 0.5rem 0.3rem;
    }
    a:hover {
        background: #76BA1B;
        color: #161b22;
    }
</style>