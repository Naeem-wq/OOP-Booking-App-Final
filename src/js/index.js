new Vue({
  el: "#app-login",
  data() {
    return {
      input: {
        username: "",
        password: "",
      },
    };
  },

  methods: {
    login: function () {
      let storedName = localStorage.getItem("name");
      let storedPw = localStorage.getItem("pw");

      if (
        this.input.username == storedName &&
        this.input.password == storedPw
      ) {
        alert("You are logged in.");
        location.href = "landingPage.php";
      } else {
        alert("User does not exist! Please sign up instead.");
      }
    },
  },
});
