new Vue({
  el: "#app-register",
  data() {
    return {
      input: {
        username: "",
        password: "",
        confirmpassword: "",
      },
    };
  },

  methods: {
    register: function () {
      const lowerCaseLetters = /[a-z]/g;
      const upperCaseLetters = /[A-Z]/g;
      const numbers = /[0-9]/g;

      if (this.input.username == 0) {
        alert("Please fill in email");
      } else if (this.input.password == 0) {
        alert("Please fill in password");
      } else if (
        this.input.username == 0 &&
        this.input.password == 0 &&
        this.input.confirmpassword == 0
      ) {
        alert("Please fill in email and password");
      } else if (this.input.password != this.input.confirmpassword) {
        alert("Please ensure passwords match");
      } else {
        localStorage.setItem("name", this.input.username);
        localStorage.setItem("pw", this.input.password);
        alert("Thanks! Account has been created");
        location.href = "index.php";
      }
    },
  },
});
