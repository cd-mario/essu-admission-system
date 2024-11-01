<template>
    <div class="wrapper">
        <h1 class="title">ESSU Admission Form</h1>
        <form>
            <div class="form-group">
              <label for="f_name">First Name: </label>
              <input type="text" class="form-control" id="f_name" placeholder="First Name">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</template>
<style scoped>
    .wrapper {
        height: 100vh;
        padding: 3rem;

    }
    form {
        width: 80%;
        margin: 0 auto;
    }
    .title {
        text-align: center;
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 700;
    }
</style>