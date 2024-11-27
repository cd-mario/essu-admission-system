<template>
    <div class="wrapper">
        <h1 class="title">ESSU Admission Form</h1>
        <p class="note"><strong>Note: </strong>You must <strong>login</strong> to access the admission form.</p>
        <p class="desc">Enter your following information below</p>
        <hr>
            <div class="cont">
                    <form>
                        <h3 class="title-2 name">Name</h3>
                        <div class="form-wrapper">
                            <div class="form-group">
                              <label for="f_name">First name</label>
                              <input type="text" class="form-control" id="f_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                              <label for="m_name">Midldle name</label>
                              <input type="text" class="form-control" id="m_name" placeholder="Enter middle name">
                            </div>
                            <div class="form-group">
                              <label for="l_name">Last name</label>
                              <input type="text" class="form-control" id="l_name" placeholder="Enter last name">
                            </div>
                        </div>
                        <hr>
                        <h3 class="title-2">Personal</h3>
                        <div class="form-wrapper personal">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="bday">Date of birth</label>
                              <input type="date" class="form-control" id="bday" placeholder="Enter birth date">
                            </div>
                            <div class="form-group">
                              <label for="num">Mobile number</label>
                              <input type="number" class="form-control" id="num" placeholder="Enter mobile number">
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <input type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                        </div>
                        <hr>
                        <h3 class="title-2">School</h3>
                        <div class="form-wrapper school">
                            <div class="form-group">
                              <label for="primary">Primary school</label>
                              <input type="text" class="form-control" id="primary" placeholder="Enter primary school">
                            </div>
                            <div class="form-group">
                              <label for="secondary">Secondary school</label>
                              <input type="text" class="form-control" id="secondart" placeholder="Enter secondary school">
                            </div>
                            <div class="form-group">
                              <label for="senior">Enter senior high school</label>
                              <input type="text" class="form-control" id="senior" placeholder="Enter senior high school">
                            </div>
                        </div>
                        <hr>
                        <h3 class="title-2">Admission</h3>
                        <div class="form-wrapper school">
                            <div class="form-group">
                              <label for="f_choice">First choice</label>
                              <input type="text" class="form-control" id="f_choice" placeholder="Enter first choice">
                            </div>
                            <div class="form-group">
                              <label for="s_choice">Second choice</label>
                              <input type="text" class="form-control" id="s_choice" placeholder="Enter second choice">
                            </div>
                            <div class="form-group">
                              <label for="gpa">GPA</label>
                              <input type="text" class="form-control" id="s_choice" placeholder="Enter grade point average">
                            </div>
                        </div>
                        <div class="right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
            </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 78%;
    border-radius: 0.7rem;
    margin: 2rem auto;
    padding: 3rem 2rem;
    height: 290vh;
}
.title {
  font-weight: 500;
  color: #4b6043;
  margin-bottom: 1rem;
  font-size: 3rem;
}
.title-2 {
    font-weight: 300;
}
.form-wrapper {
    border: 1px solid rgba(0, 0, 0, 0.1);
    height: 17rem;
    border-radius: 0.6rem;
    padding: 1rem 2rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: white;
    margin-bottom: 2.5rem;
}
.form-group {
    margin-bottom: 1rem;
}
.personal {
    height: 22rem;
}
button {
    padding: 0.6rem 3rem;
    width: 10rem;
}
.note {
  background: rgba(0, 0, 0, 0.1);
  width: fit-content;
  padding: 0.1rem 0.6rem;
  font-size: 0.8rem;
}
.desc {
  margin-top: 1rem;
  font-weight: 500;
}
.right {
  text-align: center;
}
</style>
