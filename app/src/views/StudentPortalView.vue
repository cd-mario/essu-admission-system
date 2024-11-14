<template>
    <div class="wrapper">
        <header>
            <img src="../assets/images/essu.png"  alt="essu logo" width="280">
            <button type="button" class="btn btn-dark">Logout</button>
        </header>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 110vh;
}
header {
    padding: 1rem 3rem;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}
.btn-dark {
    position: absolute;
    right: 2rem;
    top: 16rem;
}
</style>