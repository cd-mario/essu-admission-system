

<template>
    <nav>
        <RouterLink :to="{ name: 'Home'}">Logo</RouterLink> <!-- this is logo -->
        <RouterLink :to="{ name: 'Home'}">Home</RouterLink>
        <RouterLink :to="{ name: 'Procedure'}">Procedure</RouterLink>
        <RouterLink :to="{ name: 'Form'}">Admission</RouterLink>
    </nav>
</template>